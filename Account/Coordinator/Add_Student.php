<?php
    include "Navbar.php";
    include "Sidebar.php";
?>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
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
	
	<title>Add Student</title>
</head>
<body>
<main style="margin-top: 58px">
    <div class="container pt-4">
        <div class="row d-flex justify-content-center align-items-center" id="nav_mp_side" data-aos="fade-up"
        data-aos-anchor-placement="top-bottom" data-aos-duration="2000"> 
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
            <div class="card shadow-2-strong" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center">

                <h3 class="mb-5">Add Student</h3>

                <div class="form-outline mb-4">
                <input type="text" class="form-control form-control-lg" />
                <label class="form-label">User Id</label>
                </div>
                <div class="form-outline mb-4">
                <input type="password" id="typePasswordX-2" class="form-control form-control-lg" />
                <label class="form-label" for="typePasswordX-2">Password</label>
                </div>
                <div class="form-outline mb-4">
                <input type="password" id="typePasswordX-2" class="form-control form-control-lg" />
                <label class="form-label" for="typePasswordX-2">Conforam Password</label>
                </div>
                <button class="btn btn-primary btn-lg btn-block" type="submit">Click</button>
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
