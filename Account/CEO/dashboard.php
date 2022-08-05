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

<?php include "header.php"; ?>
<?php include "sidebar.php"; ?>

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
					height="200"
					style="margin: 0;
					border-radius: 50%;"
					></i>
					</div>
					</div>
				</div>
				</div>
			</div>
		<!-- CEO POST -->
	<!--------------------------------------------------------------------------------------------------- -->

		<!-- VICE-CHANCELLOR Post -->
			<div class="col-xl-3 col-sm-6 col-12 mb-4">
				<div class="card">
				<div class="card-body">
					<div class="d-flex justify-content-between px-md-1">
					<div class="align-self-center">
					<i><img 
					src="https://www.subharti.org/images/website%20images%20500x500.png" alt=""
					height="200"
					style="margin: 0;
					border-radius: 50%;"
					></i>
					</div>
					</div>
				</div>
				</div>
			</div>
		<!-- VICE-CHANCELLOR Post -->
	<!--------------------------------------------------------------------------------------------------- -->
		<!-- REGISTRAR Post -->
			<div class="col-xl-3 col-sm-6 col-12 mb-4">
				<div class="card">
				<div class="card-body">
					<div class="d-flex justify-content-between px-md-1">
					<div class="align-self-center">
					<i><img 
					src="https://www.subharti.org/images/Registrar.jpg" alt=""
					height="200"
					style="margin: 0;
					border-radius: 50%;"
					></i>
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
					height="200"
					style="margin: 0;
					border-radius: 50%;"
					></i>
					</div>
					</div>
				</div>
				</div>
			</div>
		<!-- CHANCELLOR POST -->
		</section>
	<!-- End Post section -->

<!--Main Layout-->


<!-- Start Notice text -->
<p class="note note-primary">
	<strong>Note primary:</strong> Lorem, ipsum dolor sit amet consectetur adipisicing elit.
	Cum doloremque officia laboriosam. Itaque ex obcaecati architecto! Qui necessitatibus
	delectus placeat illo rem id nisi consequatur esse, sint perspiciatis soluta porro?
	</p>

	<p class="note note-secondary">
	<strong>Note secondary:</strong> Lorem, ipsum dolor sit amet consectetur adipisicing
	elit. Cum doloremque officia laboriosam. Itaque ex obcaecati architecto! Qui
	necessitatibus delectus placeat illo rem id nisi consequatur esse, sint perspiciatis
	soluta porro?
	</p>
<!-- End text area -->

<?php include "footer.php"; ?>
</body>
<script type="js/Home.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
</html>