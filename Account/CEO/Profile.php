<?php
    include "Navbar.php";
    include "Sidebar.php";
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
                    <h5 class="my-3">User Name</h5>
                    <p class="text-muted mb-1">Position</p>
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
                                <input type="text" class="text-muted mb-0" placeholder="ABCD Kuamr" style="border:none;" name="name">
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Email</p>
                            </div>
                            <div class="col-sm-9">
                            <input type="text" class="text-muted mb-0" placeholder="Email" style="border:none;" name="email">
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Mobile</p>
                            </div>
                            <div class="col-sm-9">
                            <input type="text" class="text-muted mb-0" placeholder="Mobile" style="border:none;" name="mobile">
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Designation</p>
                            </div>
                            <div class="col-sm-9">
                            <input type="text" class="text-muted mb-0" placeholder="Designation" style="border:none;" name="designation">
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
        
    }
?>