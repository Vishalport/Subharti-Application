<?php
	include "Navbar.php";
    include "Sidebar.php";
	session_start();
	if(!$_SESSION['CeoLogin'])
		header('Location: ../../index.php');
	$_SESSION['username'] = $_SESSION['username'];

	$connect = mysqli_connect("localhost", "root", "");
    $connect->select_db("svsuapp");
    $query = "select * from users where username = '".$_SESSION['username']."'";
    $result = $connect->query($query);
    $data = $result->fetch_assoc();
	if(empty($data['image']))
        $image = "https://img.icons8.com/fluency/96/000000/user-male-circle.png";
    else
        $image = "../../Resource/users/".$data['image'];
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
			<div style="padding-top: 65px; text-align:center;">
				<h3>Swami Vivekanada Subharti University</h3>
				<h5>CEO Dashboard</h5>
				<hr>
			</div>
		</div>
		<div class="card-body text-center">
			<img src=<?php echo $image;?> alt="avatar"
			class="rounded-circle img-fluid" style="width: 150px;">
			<h5 class="my-3"><?php  echo $data["name"]; ?></h5>
			<p class="text-muted mb-1"><?php  echo $data["position"]; ?></p>
			<p class="text-muted mb-1"><?php  echo $data["designation"]; ?></p>
		</div>
	</div>
  </div>
</main>
<!--Main Layout-->
<?php include "footer.php"; ?>
</body>


<script src="style.js"></script>