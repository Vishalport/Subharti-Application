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
    <section class="view intro-2">
      <div class="mask rgba-stylish-strong h-100 d-flex justify-content-center align-items-center">
        <div class="container" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">
          <div class="row">
            <div class="col-xl-5 col-lg-6 col-md-10 col-sm-12 mx-auto mt-lg-5">

              <!--Form with header-->
              <div class="card wow fadeIn" data-wow-delay="0.3s">
                <div class="card-body">

                  <!--Header-->
                  <div class="form-header purple-gradient">
                    <h3><i class="fas fa-user mt-2 mb-2"></i> Sign In:</h3>
                  </div>

                  <!--Body-->
				  <form method="post">
					<div class="md-form">
						<i class="fas fa-user prefix white-text"></i>
						<!-- <input type="text" id="orangeForm-name" class="form-control"> -->
						<select name="user_type" id="user_type">
							<option value="Select User">Select User</option>
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
						window.location.replace("Login.php"); 
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
						window.location.replace("Account/CEO/dashboard.php"); 
					});
				</script>
			<?php
			}
			else{
				?>
				<script>
					swal("Invalid username or password", "", "error")
					.then((value) => {
						window.location.replace("Login.php"); 
					});
				</script>
			<?php
			}

		}
		elseif($user_type == "VC"){

		}
		elseif($user_type == "Registrar"){
			
		}
		elseif($user_type == "Principle"){
			
		}
		elseif($user_type == "HOD"){
			
		}
		elseif($user_type == "Coordinator"){
			
		}
		elseif($user_type == "Faculty"){
			
		}
		elseif($user_type == "Student"){
			
		}
		elseif($user_type == "Staff"){
			
		}
		elseif($user_type == "Hostel Warden"){
			
		}
	}
?>


<!-- Start Start Footer  -->
	<footer class="bg-dark text-center text-white">
	  <!-- Grid container -->
	  <div class="container p-4">
	    <!-- Section: Social media -->
	    <section class="mb-4">
	      <!-- Facebook -->
	      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
	        ><i class="fab fa-facebook-f"></i
	      ></a>

	      <!-- Twitter -->
	      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
	        ><i class="fab fa-twitter"></i
	      ></a>

	      <!-- Google -->
	      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
	        ><i class="fab fa-google"></i
	      ></a>

	      <!-- Instagram -->
	      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
	        ><i class="fab fa-instagram"></i
	      ></a>

	      <!-- Linkedin -->
	      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
	        ><i class="fab fa-linkedin-in"></i
	      ></a>
	    </section>
	    <!-- Section: End Social media -->

	    <!-- Start Section: Text -->
	    <section class="mb-4">
	      <p>
	       The Website is Build for Swami Vivekanada Subharti Universty Meerut NH-58, The Purpous of the Website is to Make The Student Communication Easy With The Department of The Universty. this is Website is Build in a Team (SITE Collage Student) and They are Memmber of Webmaster. 
	      </p>
	    </section>
	    <!--End  Section: Text -->

	    <!-- Section: Links -->
	    <section class="">
	      <!--Grid row-->
	      <div class="row">
	        <!--Grid column-->
	        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
	          <h5 class="text-uppercase">Technology Used</h5>

	          <ul class="list-unstyled mb-0">
	            <li>
	              <a href="#!" class="text-white">HTML</a>
	            </li>
	            <li>
	              <a href="#!" class="text-white">CSS</a>
	            </li>
	            <li>
	              <a href="#!" class="text-white">JAVA SCRIPT</a>
	            </li>
	            <li>
	              <a href="#!" class="text-white">MBD</a>
	            </li>
	          </ul>
	        </div>
	        <!--Grid column-->

	        <!--Grid column-->
	        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
	          <h5 class="text-uppercase">Team Memmber</h5>

	          <ul class="list-unstyled mb-0">
	            <li>
	              <a href="#!" class="text-white">Vishal for Frontend</a>
	            </li>
	            <li>
	              <a href="#!" class="text-white">Amzad for backend</a>
	            </li>
	           	<li>
	              <a href="#!" class="text-white">Parduman for Idea</a>
	            </li>
	          </ul>
	        </div>
	        <!--Grid column-->

	        <!--Grid column-->
	        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
	          <h5 class="text-uppercase">Page's</h5>

	          <ul class="list-unstyled mb-0">
	            <li>
	              <a href="about.php" class="text-white">About</a>
	            </li>
	            <li>
	              <a href="news.php" class="text-white">News</a>
	            </li>
	            <li>
	              <a href="application.php" class="text-white">Application</a>
	            </li>
	            <li>
	              <a href="logout.php" class="text-white">Log out</a>
	            </li>
	          </ul>
	        </div>
	        <!--Grid column-->

	        <!--Grid column-->
	        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
	          <h5 class="text-uppercase">Social</h5>

	          <ul class="list-unstyled mb-0">
	            <li>
	              <a href="#!" class="text-white">Instagram</a>
	            </li>
	            <li>
	              <a href="#!" class="text-white">facebook</a>
	            </li>
	            <li>
	              <a href="#!" class="text-white">Twitter</a>
	            </li>
	            <li>
	              <a href="#!" class="text-white">Google</a>
	            </li>
	          </ul>
	        </div>
	        <!--Grid column-->
	      </div>
	      <!--Grid row-->
	    </section>
	    <!-- Section: Links -->
	  </div>
	  <!-- Grid container -->

	  <!-- Copyright -->
	  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
	    © 2022 Copyright: developer:-Vishal, Amzad
	    <a class="text-white" href="https://mdbootstrap.com/">at https://Subharti.org/</a>
	  </div>
	  <!-- Copyright -->
	</footer>

<!-- End Footer  -->

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