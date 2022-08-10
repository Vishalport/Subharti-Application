<?php
    include "Navbar.php";
    include "Sidebar.php"; 
?>

<body>
<main style="margin-top: 58px" id="nav_mp">
	<div class="container pt-4">

	<!-- pending applicaion -->
		<section class="mb-4">
		<div class="card">
			<div class="card-header text-center py-3">
			<h5 class="mb-0 text-center">
				<strong>Your Applications</strong>
			</h5>
			</div>
			<div class="card-body">
			<?php
				$connect = mysqli_connect("localhost", "root", "");
				$connect->select_db("svsuapp");
				$query = "select * from letter where sourceuser = '".$_SESSION['username']."'";
				$result = $connect->query($query);
			?>
			<div class="table-responsive">
				<table class="table table-hover text-nowrap">
				<thead>
                        <tr>
                            <th>Ref No.</th>
                            <th>App. Date</th>
                            <th>Status</th>
                            <th>Remark</th>
                            <th>Remark Date</th>
                            <th>Send To</th>
                            <th colspan="2">Action</th>
                        </tr>
                    </thead>
                    <?php

                        while($row = $result->fetch_assoc()):?>
                            <tr>
                                <td><?php echo $row['ref']?></td>
                                <td><?php echo $row['appdate']?></td>
                                <td><?php echo $row['status']?></td>
                                <td><?php echo $row['remark']?></td>
                                <td><?php echo $row['remarkdate']?></td>
                                <td><?php echo $row['dest']?></td>
                                <td>
                                    <a href="process.php?viewapp=<?php echo $row['digit']?>" class="btn btn-info">View</a>
                                    <a href="process.php?withdraw=<?php echo $row['digit']?>" class="btn btn-secondary">Withdraw</a>
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
</body>
<?php  include "Footer.php"; ?>
