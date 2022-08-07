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
    <form action="Letter.php" method="post">
    <select name="user_type" id="user_type" style="text-align: center">
          <option value="Select User">Post To </option>
          <option value="VC">VC</option>
          <option value="Registrar">Registrar</option>
          <option value="Principle">Principle</option>
    </select>
    <select name="college" id="college">
      <option value="" style="text-align: center">Select Collage</option>
      <option value="Faculty of Medicine">Faculty of Medicine </option>
      <option value="Faculty of Dental Sciences"> Faculty of Dental Sciences</option>
      <option value="Faculty of Nursing"> Faculty of Nursing</option>
      <option value="Faculty of Physiotherapy & Allied Sciences">Faculty of Physiotherapy & Allied Sciences</option>
      <option value="Faculty of AYUSH"> Faculty of AYUSH</option>
      <option value="Faculty of Pharmacy"> Faculty of Pharmacy</option>
      <option value="Faculty of Law"> Faculty of Law</option>
      <option value="Faculty of Engineering">Faculty of Engineering and Technology</option>
      <option value="Faculty of Science Faculty of Education"> Faculty of Science Faculty of Education</option>
      <option value="Subharti College of Management & Commerce">Subharti College of Management & Commerce</option>
      <option value="Faculty of Fine Arts"> Faculty of Fine Arts </option>
      <option value="Faculty of Arts & Social Science"> Faculty of Arts & Social Science</option>
      <option value="School of Buddhist Studies">School of Buddhist Studies</option>
      <option value="Subharti College of Hotel Management"> Subharti College of Hotel Management</option>
      <option value="Subharti Polytechnic College"> Subharti Polytechnic College</option>
    </select>
      <div class="md-form mb-4 pink-textarea active-pink-textarea">
          <i class="fas fa-angle-double-right prefix"></i>

          <label for="to">To</label>
          <input type="text" id="to" name="to"class="md-input-text form-control" value="The ">

          <label for="subject">Subject</label>
          <input type="text" name="subject" id="subject" class="md-input-text form-control">

          <label for="msg">Respected Sir/Madam,</label>
          <textarea id="msg"name = "msg" class="md-textarea form-control" rows="18"placeholder="Write your application here..."></textarea>
      </div>
      <button class="btn purple-gradient btn-lg" id="New_Registration" name="submit">POST APPLICATION</button>
    </form>
  </div>
</main>
</body>
<script src="style.js"></script>
<?php include "footer.php"; ?>

