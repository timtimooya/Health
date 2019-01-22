<html>
<head>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
    font-family: "Lato", sans-serif;
}

.sidenav {
    width: 130px;
    position: fixed;
    z-index: 1;
    top: 20px;
    left: 10px;
    background: #eee;
    overflow-x: hidden;
    padding: 8px 0;
}

.sidenav a {
    padding: 6px 8px 6px 16px;
    text-decoration: none;
    font-size: 25px;
    color: #2196F3;
    display: block;
}

.sidenav a:hover {
    color: #064579;
}

.main {
    margin-left: 140px; /* Same width as the sidebar + left position in px */
    font-size: 28px; /* Increased text to enable scrolling */
    padding: 0px 10px;
}

@media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 18px;}
}
</style>
</head>
<body>

<div class="sidenav">
  <a href="#about">About</a>
  <a href="#services">Services</a>
  <a href="#clients">Clients</a>
  <a href="#contact">Contact</a>
  <a href="#contact">Contact</a>
</div>

<div class="main">
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
<title>
</title>
<!---<link href="css/bootstrap.min.css" rel="stylesheet">--->
<link href="css/bootstrap.css" rel="stylesheet">
</head>
<body>
<img src="<?php echo $path;?>" width="6%" padding="left"><br>
Name:<?php echo $fn.$md;?><br>
id:<?php echo $id;?>


<div class="container" width="10%">
	<div class="row">
		<div class="col-md-3 ">
		     <div class="list-group ">
              <a href="#" class="list-group-item list-group-item-action active">Dashboard</a>
              <a href="child.php" class="list-group-item list-group-item-action">Registration</a>
              <a href="generatetable.php" class="list-group-item list-group-item-action">Generate pdf</a>
              <a href="#" class="list-group-item list-group-item-action">Enquiry</a>
              <a href="#" class="list-group-item list-group-item-action">Dealer</a>
              <a href="#" class="list-group-item list-group-item-action">Media</a>
              <a href="#" class="list-group-item list-group-item-action">Post</a>
              <a href="#" class="list-group-item list-group-item-action">Category</a>
              <a href="#" class="list-group-item list-group-item-action">New</a>
              <a href="#" class="list-group-item list-group-item-action">Comments</a>
              <a href="#" class="list-group-item list-group-item-action">Appearance</a>
              <a href="#" class="list-group-item list-group-item-action">Reports</a>
              <a href="#" class="list-group-item list-group-item-action">Settings</a>
              
              
            </div> 
		</div>
	</div>
</div>	
	
	</body>
	</html>

</body>
</html> 

