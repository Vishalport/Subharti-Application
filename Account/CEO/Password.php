<?php
    session_start();
	if(!$_SESSION['CeoLogin'])
		header('Location: ../../index.php');
    include "Navbar.php";
    include "Sidebar.php";
?>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>import swal from 'sweetalert';</script>
	<script
  	type="text/javascript"
  	src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.3.0/mdb.min.js"
	></script>

	<!-- Font Awesome -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
	<!-- MDB -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.3.0/mdb.min.css" rel="stylesheet"/>
	
	<title>Subharti Application</title>
</head>
<body>
<main style="margin-top: 58px">
    <div class="container pt-4">
        <div class="row d-flex justify-content-center align-items-center" id="nav_mp_side" data-aos="fade-up"
        data-aos-anchor-placement="top-bottom" data-aos-duration="2000"> 
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
            <div class="card shadow-2-strong" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center">

                <h3 class="mb-5">Change Password</h3>
                <form method="post">
                    <div class="form-outline mb-4">
                        <input type="password" id="typePasswordX-2" name ="oldpassword" class="form-control form-control-lg" />
                        <label class="form-label" for="typePasswordX-2">Old Password</label>
                    </div>
                    <div class="form-outline mb-4">
                        <input type="password" id="typePasswordX-2" name ="newpassword" class="form-control form-control-lg" />
                        <label class="form-label" for="typePasswordX-2">New Password</label>
                    </div>
                    <div class="form-outline mb-4">
                        <input type="password" id="typePasswordX-2" name ="cnfpassword" class="form-control form-control-lg" />
                        <label class="form-label" for="typePasswordX-2">Confirm Password</label>
                    </div>
                    <button class="btn btn-primary btn-lg btn-block" type="submit" name ="submit">Change Password </button>
                </form>
            </div>
            </div>
        </div>
        </div>
    </div>
</main>
<?php include "footer.php"; ?>
</body>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>

<?php
    if(isset($_POST['submit']))
    {
        $oldpassword = $_POST['oldpassword'];
        $newpassword = $_POST['newpassword'];
        $cnfpassword = $_POST['cnfpassword'];
        if($newpassword != $cnfpassword)
        {
            ?>
                <script>
                    swal("New password and Confirm Password should be the same!", "", "warning")
                    .then((value) => {
                        window.location.replace("Password.php"); 
                    });
                </script>
            <?php
        }

        $connect = mysqli_connect("localhost", "root", "");
        $connect->select_db("svsuapp");

        $query = "SELECT password from users WHERE username = '".$_SESSION['username']."' and password = '".$oldpassword."'";
        $result = $connect->query($query) or die($connect->error);
        if($result->num_rows == 1)
        {
            $query = "update users set password = '$newpassword' where username = '".$_SESSION['username']."'";
            $connect->query($query) or die($connect->error);

            ?>
                <script>
                    swal("Password Updated Successfully!", "", "success")
                    .then((value) => {
                        window.location.replace("dashboard.php"); 
                    });
                </script>
            <?php
        }
        else
        {
            ?>
                <script>
                    swal("Invalid Old Password!", "", "error")
                    .then((value) => {
                        window.location.replace("Password.php"); 
                    });
                </script>
            <?php
        }
    }
?>