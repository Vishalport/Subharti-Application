<?php
  session_start();
  if(!isset($_SESSION['CeoLogin']))
    header('Location: ../../Login.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="dashboard.css">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

	<script
  	type="text/javascript"
  	src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.3.0/mdb.min.js"
	></script>
	<script type="text/javascript"src="dashboard.js"></script>


	<!-- Font Awesome -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
	<!-- MDB -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.3.0/mdb.min.css" rel="stylesheet"/>
	
	<title>Subharti University</title>
</head>
<body>

<!--Main Navigation-->
<header>
  <!-- Sidebar -->
  <nav
       id="sidebarMenu"
       class="collapse d-lg-block sidebar collapse bg-white"
       >
    <div class="position-sticky" id="nav_mp_side">
      <div class="list-group list-group-flush mx-3 mt-4">
        <a
           href="#"
           class="list-group-item list-group-item-action py-2 ripple"
           aria-current="true"
           >
          <i class="fas fa-tachometer-alt fa-fw me-3"></i
            ><span>Main dashboard</span>
        </a>
        <a
           href="#"
           class="list-group-item list-group-item-action py-2 ripple"
           ><i class="fas fa-envelope-open fa-fw me-3"></i><span>Application</span></a
          >
        <a
           href="#"
           class="list-group-item list-group-item-action py-2 ripple"
           ><i class="fas fa-newspaper fa-fw me-3"></i
          ><span>News</span></a
          >
        <a
           href="#"
           class="list-group-item list-group-item-action py-2 ripple"
           >
          <i class="fas fa-key fa-fw me-3"></i><span>Password</span>
        </a>
        <a
           href="#"
           class="list-group-item list-group-item-action py-2 ripple"
           ><i class="fas fa-search fa-fw me-3"></i><span>Subharti.org</span></a
          >
        <a
           href="Logout.php"
           class="list-group-item list-group-item-action py-2 ripple"
           ><i class="fas fa-sign-out fa-fw me-3"></i><span>Log Out</span></a
          >
      </div>
    </div>
  </nav>
  <!-- Sidebar -->

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
            <li><a class="dropdown-item" href="Logout.php">Logout</a></li>
          </ul>
        </li>
      </ul>
    </div>
    <!-- Container wrapper -->
  </nav>
  <!-- Navbar -->
</header>
<!--Main Navigation-->

<!--Main layout-->
	<main style="margin-top: 58px" id="nav_mp">
	<div class="container pt-4">

	<!-- pending applicaion -->
		<section class="mb-4">
		<div class="card">
			<div class="card-header text-center py-3">
			<h5 class="mb-0 text-center">
				<strong>Pending Application</strong>
			</h5>
			</div>
			<div class="card-body">
			<div class="table-responsive">
				<table class="table table-hover text-nowrap">
				<thead>
					<tr>
					<th scope="col"></th>
					<th scope="col">Application</th>
					<th scope="col">Date/Time</th>
					<th scope="col">From</th>
					<th scope="col">Last-Date</th>
					<th scope="col">Regarding</th>
					</tr>
				</thead>
				<tbody>
				<!-- number of applicaion -->
					<tr>
					<th scope="row"><a href="#">Application Name</a></th>
					<td>
						<span class="text-danger">
						<i class="fas fa-caret-down me-1"></i
							><span>2</span>
						</span>
					</td>
					<td>
						<span class="text-success">
						<i class="fas fa-caret-up me-1"></i><span>2 Day</span>
						</span>
					</td>
					<td>
						<span class="text-success">
						<i class="fas fa-caret-up me-1"></i><span>Ragistar</span>
						</span>
					</td>
					<td>
						<span class="text-danger">
						<i class="fas fa-caret-up me-1"></i><span>4 Day left</span>
						</span>
					</td>
					<td>
						<span class="text-danger">
						<i class="fas fa-caret-down me-1"></i
							><span>Student</span>
						</span>
					</td>
					</tr>
			<!-- number of applicaion -->
					<tr>
					<th scope="row"><a href="#">Application Name</a></th>
					<td>
						<span class="text-danger">
						<i class="fas fa-caret-down me-1"></i
							><span>2</span>
						</span>
					</td>
					<td>
						<span class="text-success">
						<i class="fas fa-caret-up me-1"></i><span>2 Day</span>
						</span>
					</td>
					<td>
						<span class="text-success">
						<i class="fas fa-caret-up me-1"></i><span>Ragistar</span>
						</span>
					</td>
					<td>
						<span class="text-danger">
						<i class="fas fa-caret-up me-1"></i><span>4 Day left</span>
						</span>
					</td>
					<td>
						<span class="text-success">
						<i class="fas fa-caret-down me-1"></i
							><span>AICTC</span>
						</span>
					</td>
					</tr>
			<!-- number of applicaion -->
					<tr>
					<th scope="row"><a href="#">Application Name</a></th>
					<td>
						<span class="text-danger">
						<i class="fas fa-caret-down me-1"></i
							><span>2</span>
						</span>
					</td>
					<td>
						<span class="text-success">
						<i class="fas fa-caret-up me-1"></i><span>2 Day</span>
						</span>
					</td>
					<td>
						<span class="text-success">
						<i class="fas fa-caret-up me-1"></i><span>Account</span>
						</span>
					</td>
					<td>
						<span class="text-danger">
						<i class="fas fa-caret-up me-1"></i><span>4 Day left</span>
						</span>
					</td>
					<td>
						<span class="text-success">
						<i class="fas fa-caret-down me-1"></i
							><span>Money</span>
						</span>
					</td>
					</tr>

				<!-- number of applicaion -->
					<tr>
					<th scope="row"><a href="#">Application Name</a></th>
					<td>
						<span class="text-danger">
						<i class="fas fa-caret-down me-1"></i
							><span>2</span>
						</span>
					</td>
					<td>
						<span class="text-success">
						<i class="fas fa-caret-up me-1"></i><span>2 Day</span>
						</span>
					</td>
					<td>
						<span class="text-success">
						<i class="fas fa-caret-up me-1"></i><span>Hostel Warden</span>
						</span>
					</td>
					<td>
						<span class="text-danger">
						<i class="fas fa-caret-up me-1"></i><span>4 Day left</span>
						</span>
					</td>
					<td>
						<span class="text-success">
						<i class="fas fa-caret-down me-1"></i
							><span>VHR Hostel</span>
						</span>
					</td>
					</tr>

					<!-- number of applicaion -->

					<tr>
					<th scope="row"><a href="#">Application Name</a></th>
					<td>
						<span class="text-danger">
						<i class="fas fa-caret-down me-1"></i
							><span>2</span>
						</span>
					</td>
					<td>
						<span class="text-success">
						<i class="fas fa-caret-up me-1"></i><span>2 Day</span>
						</span>
					</td>
					<td>
						<span class="text-success">
						<i class="fas fa-caret-up me-1"></i><span>VC office</span>
						</span>
					</td>
					<td>
						<span class="text-danger">
						<i class="fas fa-caret-up me-1"></i><span>4 Day left</span>
						</span>
					</td>
					<td>
						<span class="text-success">
						<i class="fas fa-caret-down me-1"></i
							><span>Cultural Program</span>
						</span>
					</td>
					</tr>
					<!-- number of applicaion -->
					<tr>
					<th scope="row"><a href="#">Application Name</a></th>
					<td>
						<span class="text-danger">
						<i class="fas fa-caret-down me-1"></i
							><span>2</span>
						</span>
					</td>
					<td>
						<span class="text-success">
						<i class="fas fa-caret-up me-1"></i><span>2 Day</span>
						</span>
					</td>
					<td>
						<span class="text-success">
						<i class="fas fa-caret-up me-1"></i><span>Collage Principal</span>
						</span>
					</td>
					<td>
						<span class="text-danger">
						<i class="fas fa-caret-up me-1"></i><span>4 Day left</span>
						</span>
					</td>
					<td>
						<span class="text-success">
						<i class="fas fa-caret-down me-1"></i
							><span>Collage invitation</span>
						</span>
					</td>
					</tr>
				</tbody>
				</table>
			</div>
			</div>
		</div>
		</section>
	<!-- End pending applicaion -->

	<!--------------------------------------------------------------------------------------------------- -->

	<!-- start Post Section  -->
		<section>
		<!-- CEO POST -->
			<div class="row">
			<div class="col-xl-3 col-sm-6 col-12 mb-4">
				<div class="card">
				<div class="card-body">
					<div class="d-flex justify-content-between px-md-1">
					<div class="align-self-center">
					<i><img 
					src="https://www.subharti.org/images/The%20CEO.jpg" alt=""
					height="80"
					style="margin: 0;"
					></i>
					</div>
					<div class="text-end">
						<h4>Dr. Shalya Raj: CEO Post</h4>
						<p class="mb-0"><a href="#">Click here</a></p>
					</div>
					</div>
				</div>
				</div>
			</div>
		<!-- CEO POST -->

		<!-- VICE-CHANCELLOR Post -->
			<div class="col-xl-3 col-sm-6 col-12 mb-4">
				<div class="card">
				<div class="card-body">
					<div class="d-flex justify-content-between px-md-1">
					<div class="align-self-center">
					<i><img 
					src="https://www.subharti.org/images/website%20images%20500x500.png" alt=""
					height="80"
					style="margin: 0;"
					></i>
					</div>
					<div class="text-end">
						<h4>(Dr.) G.K. Thapliyal: Vice-Chancellor Post</h4>
						<p class="mb-0"><a href="#">Click here</a></p>
					</div>
					</div>
				</div>
				</div>
			</div>
		<!-- VICE-CHANCELLOR Post -->

		<!-- REGISTRAR Post -->
			<div class="col-xl-3 col-sm-6 col-12 mb-4">
				<div class="card">
				<div class="card-body">
					<div class="d-flex justify-content-between px-md-1">
					<div class="align-self-center">
					<i><img 
					src="https://www.subharti.org/images/Registrar.jpg" alt=""
					height="80"
					style="margin: 0;"
					></i>
					</div>
					<div class="text-end">
						<h4>Dr. Abhay: Registar Post</h4>
						<p class="mb-0"><a href="#">Click here</a></p>
					</div>
					</div>
				</div>
				</div>
			</div>
		<!-- REGISTRAR Post -->

		<!-- CHANCELLOR POST -->
			<div class="col-xl-3 col-sm-6 col-12 mb-4">
				<div class="card">
				<div class="card-body">
					<div class="d-flex justify-content-between px-md-1">
					<div class="align-self-center">
					<i><img 
					src="https://www.subharti.org/images/Chancellor.jpg" alt=""
					height="80"
					style="margin: 0;"
					></i>
					</div>
					<div class="text-end">
						<h4>Mrs. Stuti Narain(IAS): Chancellor Post</h4>
						<p class="mb-0"><a href="#">Click here</a></p>
					</div>
					</div>
				</div>
				</div>
			</div>
		<!-- CHANCELLOR POST -->
		</section>
	<!-- End Post section -->

<!--Main Layout-->



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
	            <li>
	              <a href="logout.php" class="text-white">Log out</a>
	            </li>
	          </ul>
	        </div>
	        <!--Grid column-->

	        <!--Grid column-->
	        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
	          <h6 class="text-uppercase">OUR COLLEGES</h6>

	          <ul class="list-unstyled mb-0">
	            <li>
	              <a href="#!" class="text-white">Instagram</a>
	            </li>
	            <li>
	              <p>Instagram</p>
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
<!-- End Footer -->

</body>
<script type="js/Home.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
</html>