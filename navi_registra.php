<html>
<head>

<title>
</title>
<meta charset="utf-8">
<style>

.main {
    margin-left: 60px; /* Same width as the sidebar + left position in px */
	margin-top:-320px;
    font-size: 16px; /* Increased text to enable scrolling */
    padding: 0px 200px;
	width:1400px;
}
.img{
	
	width:75px;
	height:75px;
	border-radius:80px;
}
.logo{
	margin-left:800px
}
</style>
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
     $query=mysqli_query($conn, "select * from registra where id='".$_SESSION['ad']."'")or die(mysqli_error());
  while($deal=mysqli_fetch_array($query)){
  $fn= $deal['firstname'];
  $surname= $deal['secondname'];
  $image= $deal['image'];
  $reg=$deal['Registration_no'];

}

?>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="navi_registra.php"><img src="img/kenya.png" width="30%">Ministry of Health</a>
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
      <span class="navbar-toggler-icon"></span>
  </button>
  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="healthhomepage.php">Menu</a>
    </li>
    

  </ul>
  <div class="logo">

  <img src ="<?php echo $image;?>" class="img"><br>
  <?php
  echo $fn."   ". $surname;echo "<br>";
  echo $reg; echo"<br>";
  echo '<a href="signout.php">Sign out</a>';

  ?>

  </div>
</nav>

<div class="container">
	<div class="row">
		<div class="col-lg-3">
		     <div class="list-group width">
              <a href="navi_registra.php" class="list-group-item list-group-item-action active">Dashboard</a>
              <a href="registrationnurse.php" class="list-group-item list-group-item-action">Registration</a>
              <a href="reglist.php" class="list-group-item list-group-item-action">List of nurses registered</a>
              <a href="generatetablecert.php" class="list-group-item list-group-item-action">Generate birth certificate</a>
              <a href="Deletechildmotherfatherinformant1.php" class="list-group-item list-group-item-action">Delete Registered child/parent details</a>
              <a href="listchildmotherfatherinformant.php" class="list-group-item list-group-item-action">List of child/parents details</a>
              
             
              
            </div> 
		</div>
	</div>	
	<div class="main">
   
   <div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/child.jpg" width="950px" height="600px" alt="Los Angeles">
    </div>
    <div class="carousel-item">
      <img src="img/elephant.jpg" width="950px" height="600px" alt="Chicago">
    </div>
    <div class="carousel-item">
      <img src="img/portrait.jpg" width="950px" height="600px" alt="New York">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>
</div>
	</body>
	</html>
	 <footer>
<div class="container-fluid padding">
     <div class="row text-center">
       
	   <div class="col-12">
	
	
	   <hr class="light">
	   <h5>&copy; timothy.com</h5>
	    

	  </div>
     </div>
  
   
   </div>

   </footer>