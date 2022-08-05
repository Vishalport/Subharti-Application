<?php
	$page = "homepage.php";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="CSS/style.css">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

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


<!-- Navigation bar-->

	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<!-- Container wrapper -->
	<div class="container">
		<!-- Navbar brand -->
		<a class="navbar-brand me-2" href="https://mdbgo.com/">
		<img
			src="https://www.justmbbs.com/img/college/uttar-pradesh/subharti-medical-college-meerut-logo.jpg"
			height="100"
			alt="MDB Logo"
			loading="lazy"
			style="margin-top: -1px;"
		/>
		</a>

		<!-- Toggle button -->
		<button
		class="navbar-toggler"
		type="button"
		data-mdb-toggle="collapse"
		data-mdb-target="#navbarButtonsExample"
		aria-controls="navbarButtonsExample"
		aria-expanded="false"
		aria-label="Toggle navigation"
		>
		<i class="fas fa-bars"></i>
		</button>

		<!-- Collapsible wrapper -->
		<div class="collapse navbar-collapse" id="navbarButtonsExample">
		<!-- Left links -->
		<ul class="navbar-nav me-auto mb-5 mb-lg-0">
			<li class="nav-item"><a class="nav-link" onclick="DashboardBtn_Clicked()">Dashboard</a></li>
			<li class="nav-item"><a class="nav-link" onclick="AboutBtn_Clicked()">About</a></li>
			<li class="nav-item"><a class="nav-link" href="#">News</a></li>
			<li class="nav-item"><a class="nav-link" href="#">Application</a></li>
			<li class="nav-item"><a class="nav-link" href="#"></a></li>
		</ul>
		<!-- Left links -->

		<div class="d-flex align-items-center">
			<button type="button" class="btn btn-link px-3 me-2" onclick="LoginBtn_Clicked()">
			Login
			</button>
			<div class="d-flex align-items-center">
		</div>
		</div>
		<!-- Collapsible wrapper -->
	</div>
	<!-- Container wrapper -->
	</nav>

<!-- End Navigation bar-->

<iframe src="homepage.php" frameborder="0" width="100%" height="100%"  id="frame">
	<!--Main Layout-->
	
	<!--Main Layout-->
</iframe>




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
	              <a href="about.php" class="text-white">Application</a>
	            </li>
	            <li>
	              <a href="news.php" class="text-white">News</a>
	            </li>
	            <li>
	              <a href="application.php" class="text-white">Apply</a>
	            </li>
	            <!-- <li>
	              <a href="logout.php" class="text-white">Log out</a>
	            </li> -->
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
<script type="js/Home.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>

<script>
	function LoginBtn_Clicked(){
		document.getElementById("frame").src = "Login.php";
	}

	function DashboardBtn_Clicked(){
		document.getElementById("frame").src = "homepage.php";
	}

	function AboutBtn_Clicked(){
		document.getElementById("frame").src = "About.php";
	}
</script>

</html>