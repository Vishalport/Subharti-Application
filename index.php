<?php
	require_once "database.php";
?>
<!DOCTYPE html>

<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="CSS/style.css">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	
	<!-- Font Awesome -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
	<!-- MDB -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.3.0/mdb.min.css" rel="stylesheet"/>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>import swal from 'sweetalert';</script>
	
	<title>Login</title>
</head>
<body>
	
<!-- 	Start Login From -->	
    <section class="view">
	<video id="background-video" autoplay loop muted poster
	style="height: 800px; width: auto;">
	<source src="Background/Background.webm" type="video/mp4">
	</video>
      <div class="mask rgba-stylish-strong h-100 d-flex justify-content-center align-items-center">
        <div class="container" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">
          <div class="row">
            <div class="col-xl-5 col-lg-6 col-md-10 col-sm-12 mx-auto mt-lg-5">

              <!--Form with header-->
              <div class="card wow fadeIn" data-wow-delay="0.3s">
                <div class="card-body">

                  <!--Header-->
                  <div class="form-header purple-gradient">
                    <h3 class="text-center login_mp">Swami Vivekananda Subharti University, Meerut</h3>
                  </div>

                  <!--Body-->
				  <form method="post">
					<div class="md-form">
						<i class="fas fa-user prefix white-text"></i>
						<select name="user_type" id="user_type">
							<option value="Select User">---Select User---</option>
							<option value="CEO">CEO</option>
							<option value="VC">VC</option>
							<option value="Registrar">Registrar</option>
							<option value="Principle">Principle</option>
							<option value="HOD">HOD</option>
							<option value="Coordinator">Coordinator</option>
							<option value="Faculty">Faculty</option>
							<option value="Student">Student</option>
							<option value="Staff">Staff</option>
							<option value="Staff">Hostel Warden</option>
						</select>
						<!-- <label for="orangeForm-name">Your name</label> -->
					</div>
					<div class="md-form">
						<i class="fas fa-envelope prefix white-text"></i>
						<input type="text" id="orangeForm-email" class="form-control" name = "username">
						<label for="orangeForm-email">Username</label>
					</div>

					<div class="md-form">
						<i class="fas fa-lock prefix white-text"></i>
						<input type="password" id="orangeForm-pass" class="form-control" name="password">
						<label for="orangeForm-pass">Password</label>
					</div>

					<div class="text-center">
						<button class="btn purple-gradient btn-lg" id="New_Registration" name="submit">Sign In</button>                    <hr>
						<div class="forget-pwd">
							<a href="#">Forget Password</a>
						</div>
						<div class="inline-ul text-center d-flex justify-content-center">
						<a class="p-2 m-2 fa-lg tw-ic"><i class="fab fa-twitter white-text"></i></a>
						<a class="p-2 m-2 fa-lg li-ic"><i class="fab fa-linkedin-in white-text"> </i></a>
						<a class="p-2 m-2 fa-lg ins-ic"><i class="fab fa-instagram white-text"> </i></a>
						</div>
					</div>
				  </form>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </section>
<!-- End Login From -->

<?php 
	if(isset($_POST['submit'])){

		$user_type = $_POST['user_type'];
		if($user_type == "Select User"){
			?>
				<script>
					swal("Please select user type!", "", "warning")
					.then((value) => {
						window.location.replace("index.php"); 
					});
				</script>
			<?php
		}

		$username = $_POST['username'];
		$password = $_POST['password'];

		
		$conect = mysqli_connect("localhost", "root", "");
		$connect->select_db("svsuapp");

		if($user_type == "CEO"){
			$query = "select * from ceoaccess where username = '".$username."' and password = '".$password."'";
			$result = $connect->query($query);

			if($result->num_rows == 1){
				session_start();
                $_SESSION['CeoLogin'] = true;
			?>
				<script>
					swal("Login Successfull!", "", "success")
					.then((value) => {
						window.location.replace("Account/CEO/Dashboard.php"); 
					});
				</script>
			<?php
			}
			else{
				?>
				<script>
					swal("Invalid username or password", "", "error")
					.then((value) => {
						window.location.replace("Index.php"); 
					});
				</script>
			<?php
			}

		}
		elseif($user_type == "VC"){
			$query = "select * from vcaccess where username = '".$username."' and password = '".$password."'";
			$result = $connect->query($query);

			if($result->num_rows == 1){
				session_start();
                $_SESSION['CeoLogin'] = true;
			?>
				<script>
					swal("Login Successfull!", "", "success")
					.then((value) => {
						window.location.replace("Account/Vc_office/Dashboard.php"); 
					});
				</script>
			<?php
			}
			else{
				?>
				<script>
					swal("Invalid username or password", "", "error")
					.then((value) => {
						window.location.replace("Index.php"); 
					});
				</script>
			<?php
			}

		}
		elseif($user_type == "Registrar"){
			$query = "select * from ceoaccess where username = '".$username."' and password = '".$password."'";
			$result = $connect->query($query);

			if($result->num_rows == 1){
				session_start();
                $_SESSION['CeoLogin'] = true;
			?>
				<script>
					swal("Login Successfull!", "", "success")
					.then((value) => {
						window.location.replace("Account/Registar_office/Dashboard.php"); 
					});
				</script>
			<?php
			}
			else{
				?>
				<script>
					swal("Invalid username or password", "", "error")
					.then((value) => {
						window.location.replace("Index.php"); 
					});
				</script>
			<?php
			}
		}
		elseif($user_type == "Principle"){
			$query = "select * from ceoaccess where username = '".$username."' and password = '".$password."'";
			$result = $connect->query($query);

			if($result->num_rows == 1){
				session_start();
                $_SESSION['CeoLogin'] = true;
			?>
				<script>
					swal("Login Successfull!", "", "success")
					.then((value) => {
						window.location.replace("Account/Collage_Principal/Dashboard.php"); 
					});
				</script>
			<?php
			}
			else{
				?>
				<script>
					swal("Invalid username or password", "", "error")
					.then((value) => {
						window.location.replace("Index.php"); 
					});
				</script>
			<?php
			}
		}
		elseif($user_type == "HOD"){
			$query = "select * from ceoaccess where username = '".$username."' and password = '".$password."'";
			$result = $connect->query($query);

			if($result->num_rows == 1){
				session_start();
                $_SESSION['CeoLogin'] = true;
			?>
				<script>
					swal("Login Successfull!", "", "success")
					.then((value) => {
						window.location.replace("Account/HOD/Dashboard.php"); 
					});
				</script>
			<?php
			}
			else{
				?>
				<script>
					swal("Invalid username or password", "", "error")
					.then((value) => {
						window.location.replace("Index.php"); 
					});
				</script>
			<?php
			}
			
		}
		elseif($user_type == "Coordinator"){
			$query = "select * from ceoaccess where username = '".$username."' and password = '".$password."'";
			$result = $connect->query($query);

			if($result->num_rows == 1){
				session_start();
                $_SESSION['CeoLogin'] = true;
			?>
				<script>
					swal("Login Successfull!", "", "success")
					.then((value) => {
						window.location.replace("Account/Coordinator/Dashboard.php"); 
					});
				</script>
			<?php
			}
			else{
				?>
				<script>
					swal("Invalid username or password", "", "error")
					.then((value) => {
						window.location.replace("Index.php"); 
					});
				</script>
			<?php
			}
			
		}
		elseif($user_type == "Faculty"){
			$query = "select * from ceoaccess where username = '".$username."' and password = '".$password."'";
			$result = $connect->query($query);

			if($result->num_rows == 1){
				session_start();
                $_SESSION['CeoLogin'] = true;
			?>
				<script>
					swal("Login Successfull!", "", "success")
					.then((value) => {
						window.location.replace("Account/Faculty/Dashboard.php"); 
					});
				</script>
			<?php
			}
			else{
				?>
				<script>
					swal("Invalid username or password", "", "error")
					.then((value) => {
						window.location.replace("Index.php"); 
					});
				</script>
			<?php
			}
		}
		elseif($user_type == "Student"){
			$query = "select * from ceoaccess where username = '".$username."' and password = '".$password."'";
			$result = $connect->query($query);

			if($result->num_rows == 1){
				session_start();
                $_SESSION['CeoLogin'] = true;
			?>
				<script>
					swal("Login Successfull!", "", "success")
					.then((value) => {
						window.location.replace("Account/Student/Dashboard.php"); 
					});
				</script>
			<?php
			}
			else{
				?>
				<script>
					swal("Invalid username or password", "", "error")
					.then((value) => {
						window.location.replace("Index.php"); 
					});
				</script>
			<?php
			}
		}
		elseif($user_type == "Staff"){
			$query = "select * from ceoaccess where username = '".$username."' and password = '".$password."'";
			$result = $connect->query($query);

			if($result->num_rows == 1){
				session_start();
                $_SESSION['CeoLogin'] = true;
			?>
				<script>
					swal("Login Successfull!", "", "success")
					.then((value) => {
						window.location.replace("Account/Staff/Dashboard.php"); 
					});
				</script>
			<?php
			}
			else{
				?>
				<script>
					swal("Invalid username or password", "", "error")
					.then((value) => {
						window.location.replace("Index.php"); 
					});
				</script>
			<?php
			}
		}
		elseif($user_type == "Hostel Warden"){
			$query = "select * from ceoaccess where username = '".$username."' and password = '".$password."'";
			$result = $connect->query($query);

			if($result->num_rows == 1){
				session_start();
                $_SESSION['CeoLogin'] = true;
			?>
				<script>
					swal("Login Successfull!", "", "success")
					.then((value) => {
						window.location.replace("Account/Hostel_Warden/Dashboard.php"); 
					});
				</script>
			<?php
			}
			else{
				?>
				<script>
					swal("Invalid username or password", "", "error")
					.then((value) => {
						window.location.replace("Index.php"); 
					});
				</script>
			<?php
			}
		}
	}
?>

</body>
<script type="js/Login.js"></script>
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.3.0/mdb.min.js"
></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>

</html>