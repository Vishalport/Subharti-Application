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
	
	<title>Post Application</title>
</head>
<body>
<main style="margin-top: 58px" id="nav_mp">
  <div class="container pt-4">
  <select name="user_type" id="user_type" style="text-align: center">
        <option value="Select User">Post To </option>
         <option value="Principle">Principle</option>
         <option value="Coordinator">Coordinator</option>
        <option value="Faculty">Faculty</option>
     </select>
    <div class="md-form mb-4 pink-textarea active-pink-textarea">
        <i class="fas fa-angle-double-right prefix"></i>
        <textarea id="form21" class="md-textarea form-control" rows="18" placeholder="Write your application here..."></textarea>
     </div>
<button class="btn purple-gradient btn-lg" id="New_Registration" name="submit">POST APPLICATION</button>
  </div>
</main>
</body>
<script src="style.js"></script>
<?php include "footer.php"; ?>