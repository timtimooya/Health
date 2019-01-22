<!DOCTYPE html>
<html lang="en">
<html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
  <script src="dashboard/js/tinymce/tinymce.min.js"></script>
    <script src="dashboard/js/tinymce/script.js"></script>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/cms-home.css">
	<link rel="stylesheet" type="text/css" href="css/material-icons.css">
	<link rel="stylesheet" type="text/css" href="css/style.css" media="all" />
    <link rel="stylesheet" type="text/css" href="css/demo.css" media="all" />
    <link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
<style>
body {
    font-family: "Lato", sans-serif;
}

.sidenav {
    width: 300px;
    position: fixed;
    z-index: 1;
    top: 158px;
    left: 10px;
    background: #eee;
    overflow-x: hidden;
    padding: 8px 0;
}

.sidenav a {
    padding: 6px 8px 6px 16px;
    text-decoration: none;
    font-size: 16px;
    color: #2196F3;
    display: block;
}

.sidenav a:hover {
    color: #064579;
}

.main {
    margin-left: 300px; /* Same width as the sidebar + left position in px */
    font-size: 16px; /* Increased text to enable scrolling */
    padding: 0px 10px;
}

@media screen and (max-height: 1200px) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 18px;}
}
.logo{
	margin-left:600px;
	margin-top:-50px;
	
	
	
}
.img{
	width:75px;
	height:75px;
	border-radius:100px;
	margin-top:45px
}
</style>



 
<?php

//include ('loginvalidation.php');




//$query=mysqli_query($conn,"select * from registration where id='".$_SESSION['ad']."'") or die(mysqli_error());
//while($data=mysqli_fetch_array($query)){
//$fn=$data['firstname'];	
//$md=$data['middlename'];	
//$id=$data['id_no'];	
//$nrse=$data['nurse_no'];
//$path=$data['path'];	


?>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light " >
  <a class="navbar-brand" href="#"><img src="img/kenya.png" width="30%">Ministry of Health</a>
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
      <span class="navbar-toggler-icon"></span>
  </button>
  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="healthhomepage.php">HOME</a>
    </li>
    
    
	
  </ul>
  
  <div class="logo">

<?php
include ('loginvalidation.php');
$query=mysqli_query($conn,"select * from registration where id='".$_SESSION['ad']."'") or die(mysqli_error());
while($data=mysqli_fetch_array($query)){
$fn=$data['firstname'];	
$md=$data['middlename'];	
$id=$data['id_no'];	
$nrse=$data['nurse_no'];
$path=$data['path'];	
}
?>
<img src ="<?php echo $path;?>" class="img" padding-top:"20px";><br>
<?php
echo $fn."   ". $md;echo "<br>";
echo $id; echo "<br>";
echo '<a href="signout.php" >Sign out</a>';

?>

</div>

</nav>

<div class="sidenav">
  <a href="#">Dashboard</a>
  <a href="birth.php">REGISTRATION</a>
  <a href="generatetable.php">Generate Pdf</a>
  <a href="immunisationtable.php">generate immunisation pdf</a>
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
      <img src="img/child.jpg" width="1350px" height="600px" >
    </div>
    <div class="carousel-item">
      <img src="img/elephant.jpg" width="1000px" height="600px" >
    </div>
    <div class="carousel-item">
      <img src="img/portrait.jpg" width="1000px" height="600px">
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
   
   
   
   
   
   <div>
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