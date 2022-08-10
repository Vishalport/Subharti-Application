<?php
    include "Navbar.php";
    include "Sidebar.php";
	session_start();
?>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
  
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
	
	<title>View Application</title>
</head>
<body>
<main style="margin-top: 58px" id="nav_mp">
	<div class="container pt-4">

	<!-- pending applicaion -->
		<section class="mb-4">
		<div class="card">
			<div class="card-header text-center py-3">
			<h5 class="mb-0 text-center">
				<strong>Pending Applications</strong>
			</h5>
			</div>
			<div class="card-body">
			<?php
				$connect = mysqli_connect("localhost", "root", "");
				$connect->select_db("svsuapp");
				$query = "select digit, source, position, name, appdate from letter where destuser = '".$_SESSION['username']."'";
				$result = $connect->query($query);
			?>
			<div class="table-responsive">
				<table class="table table-hover text-nowrap">
				<thead>
                        <tr>
                            <th>College</th>
                            <th>Position</th>
                            <th>Name</th>
                            <th>Date</th>
                            <th colspan="3">Action</th>
                        </tr>
                    </thead>
                    <?php

                        while($row = $result->fetch_assoc()):?>
                            <tr>
                                <td><?php echo $row['source']?></td>
                                <td><?php echo $row['position']?></td>
                                <td><?php echo $row['name']?></td>
                                <td><?php echo $row['appdate']?></td>
                                <td>
                                    <a href="process.php?viewapp=<?php echo $row['digit']?>" class="btn btn-info">View</a>
                                    <a href="process.php?approve=<?php echo $row['digit']?>" class="btn btn-success">Approve</a>
									<a href="process.php?reject=<?php echo $row['digit']?>" class="btn btn-danger">Reject</a>
                                </td>
                            </tr>
                        <?php endwhile; ?>
				</table>
			</div>
			</div>
		</div>
	</section>
  </div>
</main>
<!-- End pending applicaion -->
<?php include "footer.php"; ?>
</body>