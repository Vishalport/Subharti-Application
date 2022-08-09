<?php
    include "Navbar.php";
    include "Sidebar.php";
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
        <section>
        <div class="container">
            <div class="row">
            <div class="col-lg-12">
                <div class="card mb-4">
                    <form method="post" class="form" id = "form" enctype="multipart/form-data">
                        <div class="card-body text-center upload">
                            <img src=<?php echo $image;?> alt="Avatar" class="rounded-circle img-fluid" style="width: 150px;">
                            <div class="round">
                                <input type="file" name="image" id = "image" accept=".jpg, .jpeg, .png">
                                <i class = "fa fa-camera" style = "color: #fff;"></i>
                            </div>

                            <h5 class="my-3"><?php  echo $data["name"]; ?></h5>
                            <p class="text-muted mb-1"><?php  echo $data["position"]; ?></p>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="card mb-4">
                <div class="card-body">
                    <form method="post">
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Username</p>
                            </div>
                            <div class="col-sm-9">
                            <p><?php  echo $data["username"]; ?></p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Email</p>
                            </div>
                            <div class="col-sm-9">
                                <p><?php  echo $data["email"]; ?></p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Mobile</p>
                            </div>
                            <div class="col-sm-9">
                                <p><?php  echo $data["mobile"]; ?></p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Designation</p>
                            </div>
                            <div class="col-sm-9">
                            <p><?php  echo $data["designation"]; ?></p>
                            </div>
                        </div>
                        <hr>
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
        $username = $_SESSION['username'];
        $newusername = $_POST['username'];

        $connect = mysqli_connect("localhost", "root", "");
        $connect->select_db("svsuapp");

        $query = "update users set name='$name', email='$email', mobile='$mobile', designation='$designation', username='$newusername' where username = '$username'";
        $connect->query($query);
        $_SESSION['username'] = $newusername;

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


<script type="text/javascript">
    document.getElementById("image").onchange = function(){
        document.getElementById("form").submit();
    };
</script>
<?php
if(isset($_FILES["image"]["name"])){
    
    $imageName = $_FILES["image"]["name"];
    $tmpName = $_FILES["image"]["tmp_name"];

    // Image validation
    $validImageExtension = ['jpg', 'jpeg', 'png'];
    $imageExtension = explode('.', $imageName);
    $imageExtension = strtolower(end($imageExtension));
    if (!in_array($imageExtension, $validImageExtension)){
        ?>
            <script>
                swal("Invalid Image Extension!", "", "warning")
                .then((value) => {
                    window.location.replace("Profile.php"); 
                });
            </script>
		<?php
    }
    else{
    $newImageName = $_SESSION["username"]; // Generate new image name
    $newImageName .= '.' . $imageExtension;
    $query = "UPDATE users SET image = '$newImageName' WHERE username = '".$_SESSION['username']."'";
    $connect->query($query);
    move_uploaded_file($tmpName, '../../Resource/users/' . $newImageName);
    ?>
        <script>
            swal("Image Updated Successfully!", "", "success")
            .then((value) => {
                window.location.replace("Profile.php"); 
            });
        </script>
	<?php
    }
}
?>