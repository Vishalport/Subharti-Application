<?php
    include "Navbar.php";
    include "Sidebar.php";
    $connect = mysqli_connect("localhost", "root", "");
    $connect->select_db("svsuapp");
    $query = "select * from users where username = '".$_SESSION['username']."'";
    $result = $connect->query($query);
    $data = $result->fetch_assoc();
?>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>import swal from 'sweetalert';</script>
  
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
	
	<title>Profile</title>
</head>
<body>
<main style="margin-top: 58px">
    <div class="container pt-4">
        <section style="background-color: #eee;">
        <div class="container py-5">
            <div class="row">
            <div class="col-lg-4">
                <div class="card mb-4">
                <div class="card-body text-center">
                    <img src="https://www.subharti.org/images/website%20images%20500x500.png" alt="avatar"
                    class="rounded-circle img-fluid" style="width: 150px;">
                    <h5 class="my-3"><?php  echo $data["name"]; ?></h5>
                    <p class="text-muted mb-1"><?php  echo $data["position"]; ?></p>
                </div>
                </div>
                <div class="card mb-4 mb-lg-0">
                <div class="card-body p-0">
                    <ul class="list-group list-group-flush rounded-3">
                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                        <i class="fas fa-globe fa-lg text-warning"></i>
                        <p class="mb-0">Own Website</p>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                        <i class="fab fa-twitter fa-lg" style="color: #55acee;"></i>
                        <p class="mb-0">Own twitter</p>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                        <i class="fab fa-instagram fa-lg" style="color: #ac2bac;"></i>
                        <p class="mb-0">Own instagram</p>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                        <i class="fab fa-facebook-f fa-lg" style="color: #3b5998;"></i>
                        <p class="mb-0">Own facebook</p>
                    </li>
                    </ul>
                </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="card mb-4">
                <div class="card-body">
                    <form method="post">
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Name</p>
                            </div>
                            <div class="col-sm-9">
                                <input type="text" class="text-muted mb-0" placeholder="ABCD Kuamr" style="border:none;" name="name" value=<?php echo $data['name']; ?>>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Email</p>
                            </div>
                            <div class="col-sm-9">
                            <input type="text" class="text-muted mb-0" placeholder="Email" style="border:none;" name="email" value=<?php  echo $data["email"]; ?>>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Mobile</p>
                            </div>
                            <div class="col-sm-9">
                            <input type="text" class="text-muted mb-0" placeholder="Mobile" style="border:none;" name="mobile" value=<?php  echo $data["mobile"]; ?>>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Designation</p>
                            </div>
                            <div class="col-sm-9">
                            <input type="text" class="text-muted mb-0" placeholder="Designation" style="border:none;" name="designation" value=<?php  echo $data["designation"]; ?>>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Username</p>
                            </div>
                            <div class="col-sm-9">
                            <input type="text" class="text-muted mb-0" placeholder="Username" style="border:none;" name="username" value=<?php  echo $data["username"]; ?> desabled>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-9">
                                <button class="text-muted mb-0" name="submit">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
                </div>
            </div>
            </div>
        </div>
        </section>
    </div>
</main>
<?php include "footer.php"; ?>
</body>

<?php
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email=$_POST['email'];
        $mobile = $_POST['mobile'];
        $designation = $_POST['designation'];
        $username = $_POST['username'];

        $connect = mysqli_connect("localhost", "root", "");
        $connect->select_db("svsuapp");

        $query = "update users set name='$name', email='$email', mobile='$mobile', designation='$designation' where username = '$username'";
        $connect->query($query);

        ?>
            <script>
                swal("Data Updated Successfully!", "", "success")
                .then((value) => {
                    window.location.replace("Profile.php"); 
                });
            </script>
		<?php
    }
?>