<html>
<head>

<title>
</title>
<style>
.logo{
	
	margin-left:600px;
	
}

</style>
<meta charset="utf-8">
 <script src="dashboard/js/tinymce/tinymce.min.js"></script>
    <script src="dashboard/js/tinymce/script.js"></script>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/cms-home.css">
	<link rel="stylesheet" type="text/css" href="css/material-icons.css">
	<link rel="stylesheet" type="text/css" href="css/style.css" media="all" />
    <link rel="stylesheet" type="text/css" href="css/demo.css" media="all" />
    <link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
<?php
include ('loginvalidation.php');

    $conn=mysqli_connect('localhost','root','');
           mysqli_select_db($conn, 'health');
     $queryx=mysqli_query($conn, "select * from admin where userid='".$_SESSION['ad']."'")or die(mysqli_error($conn));
  while($deal=mysqli_fetch_array($queryx)){
  $fn= $deal['username'];

}

?>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><img src="img/kenya.png" width="30%">Ministry of Health</a>
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
      <span class="navbar-toggler-icon"></span>
  </button>
  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="healthhomepage.php">Menu</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="login.php">Login</a>
    </li>


  </ul>
  <div class="logo">


  <?php
  echo $fn."   ". "<br>";
echo '<a href="signout.php">Sign out</a>';
  ?>

  </div>
</nav>

<div class="container">
	<div class="row">
		<div class="col-sm-4 ">
		     <div class="list-group width>
              <a href="#" class="list-group-item list-group-item-action active">Dashboard</a>
              <a href="registrationnurse.php" class="list-group-item list-group-item-action">Registration</a>
              <a href="reglist.php" class="list-group-item list-group-item-action">List of nurses registered</a>
              <a href="regdelete.php" class="list-group-item list-group-item-action">Update nurse information</a>
              <a href="generatetablecert.php" class="list-group-item list-group-item-action">Generate birth certificate</a>
              <a href="Deletechildmotherfatherinformant1.php" class="list-group-item list-group-item-action">Delete Registered child/parent details</a>
              <a href="listchildmotherfatherinformant.php" class="list-group-item list-group-item-action">List of child/parents details</a>
              <a href="registration.php" class="list-group-item list-group-item-action">registration of registra</a>
             
              
            </div> 
		</div>
	</div>	
	
	</body>
	</html>