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

<li class="nav-item"><a class="nav-link" onclick="DashboardBtn_Clicked()">Dashboard</a></li>

<!--Main Navigation-->
<header>

	<!-- Navbar -->
	<nav
		id="main-navbar"
		class="navbar navbar-expand-lg navbar-light bg-white fixed-top"
		>
		<!-- Container wrapper -->
		<div class="container-fluid">
		<!-- Toggle button -->
		<button
				class="navbar-toggler"
				type="button"
				data-mdb-toggle="collapse"
				data-mdb-target="#sidebarMenu"
				aria-controls="sidebarMenu"
				aria-expanded="false"
				aria-label="Toggle navigation"
				>
			<i class="fas fa-bars"></i>
		</button>

	<!-- Logo -->
		<a class="navbar-brand" href="#">
			<img
				src="https://www.justmbbs.com/img/college/uttar-pradesh/subharti-medical-college-meerut-logo.jpg"
				height="60"
				alt=""
				loading="lazy"
				/>
		</a>
	<!-- End Logo -->

	<!-- Icon Dropdown With Profile  -->
		<ul class="navbar-nav ms-auto d-flex flex-row">
			<li class="nav-item dropdown">
			<a
				class="nav-link me-3 me-lg-0 dropdown-toggle hidden-arrow"
				href="#"
				id="navbarDropdown"
				role="button"
				data-mdb-toggle="dropdown"
				aria-expanded="false"
				>
			</a>
			<ul
				class="dropdown-menu dropdown-menu-end"
				aria-labelledby="navbarDropdown"
				>
			</ul>
			</li>

			<!-- Avatar -->
			<li class="nav-item dropdown">
			<a
				class="nav-link dropdown-toggle hidden-arrow d-flex align-items-center"
				href="#"
				id="navbarDropdownMenuLink"
				role="button"
				data-mdb-toggle="dropdown"
				aria-expanded="false"
				>
				<img
					src="https://mdbootstrap.com/img/Photos/Avatars/img (31).jpg"
					class="rounded-circle"
					height="40"
					alt=""
					loading="lazy"
					/>
			</a>
			<ul
				class="dropdown-menu dropdown-menu-end"
				aria-labelledby="navbarDropdownMenuLink"
				>
				<li><a class="dropdown-item" href="#">My profile</a></li>
				<li><a class="dropdown-item" href="#">Settings</a></li>
				<li><a class="dropdown-item" href="../../Logout.php">Logout</a></li>
			</ul>
			</li>
		</ul>
		</div>
		<!-- Container wrapper -->
	</nav>
	<!-- Navbar -->
</header>

<!-- Sidebar -->
	<nav
       id="sidebarMenu"
       class="collapse d-lg-block sidebar collapse bg-white"
       >
    <div class="position-sticky" id="nav_mp_side">
      <div class="list-group list-group-flush mx-3 mt-4">
        <a
           href="homepage.php"
           class="list-group-item list-group-item-action py-2 ripple"
           aria-current="true"
           >
          <i class="fas fa-tachometer-alt fa-fw me-3" onclick="DashboardBtn_Clicked()"></i
            ><span>Dashboard</span>
        </a>
        <a
           href="Application.php"
           class="list-group-item list-group-item-action py-2 ripple"
           ><i class="fas fa-envelope-open fa-fw me-3" onclick="ApplicationBtn_Clicked()"></i><span>Application</span></a
          >
		  <a
           href="Application.php"
           class="list-group-item list-group-item-action py-2 ripple"
           ><i class="fas fa-envelope-open fa-fw me-3"onclick="Post_ApplicationBtn_Clicked()"></i><span>Post Application</span></a
          >
        <a
           href="#"
           class="list-group-item list-group-item-action py-2 ripple"
           ><i class="fas fa-newspaper fa-fw me-3"onclick="HistoryBtn_Clicked()"></i
          ><span>History</span></a
          >
        <a
           href="#"
           class="list-group-item list-group-item-action py-2 ripple" 
		   onclick="PasswordBtn_Clicked()">
          <i class="fas fa-key fa-fw me-3"></i><span>Password</span>
        </a>
		<a
        href="http://192.168.60.4:90/"
        class="list-group-item list-group-item-action py-2 ripple"
        ><i class="fas fa-search fa-fw me-3"></i><span>Subharti ERP</span></a
        >
        <a
           href="../../Logout.php"
           class="list-group-item list-group-item-action py-2 ripple"
           ><i class="fas fa-sign-out fa-fw me-3"></i><span>Log Out</span></a
          >
      </div>
    </div>
  </nav>
<!-- End Sidebar -->

<!--Main End Navigation-->

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
	function DashboardBtn_Clicked(){
		document.getElementById("frame").src = "Application.php";
	}
	function ApplicationBtn_Clicked(){
		document.getElementById("frame").src = "Application.php";
	}
	function PasswordBtn_Clicked(){
		document.getElementById("frame").src = "Application.php";
	}
	function HistoryBtn_Clicked(){
		document.getElementById("frame").src = "Application.php";
	}
	function Post_ApplicationBtn_Clicked(){
		document.getElementById("frame").src = "Application.php";
	}
</script>

</html>