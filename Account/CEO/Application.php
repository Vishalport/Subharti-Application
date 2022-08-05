<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="dashboard.css">

	<title>Write-Application</title>

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
</head>
<body>

<!-- Start Navigation  -->
    <header>
    <!-- Sidebar -->
    <nav
        id="sidebarMenu"
        class="collapse d-lg-block sidebar collapse bg-white"
        >
        <div class="position-sticky" id="nav_mp_side">
        <div class="list-group list-group-flush mx-3 mt-4">
            <a
            href="dashboard.php"
            class="list-group-item list-group-item-action py-2 ripple"
            aria-current="true"
            >
            <i class="fas fa-tachometer-alt fa-fw me-3"></i
                ><span>Main dashboard</span>
            </a>
            <a
            href="application.php"
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
                <li><a class="dropdown-item" href="../../Logout.php">Logout</a></li>
            </ul>
            </li>
        </ul>
        </div>
        <!-- Container wrapper -->
    </nav>
    <!-- Navbar -->
    </header>
<!-- End Navigation bar -->

<!-- 	Start Posting Application -->	
    <section class="view intro-2">
      <div class="mask rgba-stylish-strong h-100 d-flex justify-content-center align-items-center">
        <div class="container" data-aos="fade-zoom" data-aos-easing="linear" data-aos-duration="1500">
          <div class="row">
            <div class="col-xl-5 col-lg-6 col-md-10 col-sm-12 mx-auto mt-lg-5">
                  <!--Body-->
				  <form method="post">
					<div class="md-form">
						<i class="fas fa-user prefix white-text"></i>
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
                    <hr>
                    </div>
                    <textarea name="" id="" cols="100" rows="15" 
                    style="border-radius: 15px;
                    background-color: #fff"
                    placeholder="Write the Aplication Here"
                      ></textarea>
					<div class="text-center">
						<button class="btn purple-gradient btn-lg" id="New_Registration" name="submit">POST APPLICATION</button>
						<hr>
					</div>
				  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
<!-- End Posting Application -->

</body>

<script type="js/Home.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
</html>