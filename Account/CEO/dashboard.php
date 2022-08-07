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
	<link rel="stylesheet" href="style.css"> 
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

<!--Main Layout-->
<main style="margin-top: 58px">
  <div class="container pt-4">
	<div class="card mb-4">
		<div class="row" style="padding-top: 0; height: 200px; width: auto;">
			<div class="col-12 col-sm-12 col-lg-6">
			<img src="https://www.lisaadelhi.com/wp-content/uploads/2021/08/logo.jpg" alt="">
			</div>
			<div class="col-12 col-sm-12 col-lg-6" style="padding-top: 65px;">
				<h5>Swami Vivekanada Subharti University</h5>
				<h3>CEO Dashboard</h3>
			</div>
		</div>
		<hr>
		<div class="card-body text-center">
			<img src="https://www.subharti.org/images/website%20images%20500x500.png" alt="avatar"
			class="rounded-circle img-fluid" style="width: 150px;">
			<h5 class="my-3">User Name</h5>
			<p class="text-muted mb-1">User name</p>
			<p class="text-muted mb-1">Position</p>
			<p class="text-muted mb-1">Office</p>
		</div>
	</div>
  </div>
</main>
<!--Main Layout-->
<?php include "footer.php"; ?>
</body>


<script src="style.js"></script>