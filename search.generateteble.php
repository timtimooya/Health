<html>
    <style>
        #ser{ margin-top:100px;
        margin-left:350px;
        }
    </style>
	<style>
body {
    font-family: "Lato", sans-serif;
}

.sidenav {
    width: 300px;
    position: fixed;
    z-index: 1;
    top: 140px;
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
    margin-left: 100px; /* Same width as the sidebar + left position in px */
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
	width:76px;
	height:76px;
	border-radius:100px;
}
</style>
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
<img src ="<?php echo $path;?>" class="img"><br>
<?php
echo $fn."   ". $md;echo "<br>";
echo $id; echo"<br>";
echo '<a href="signout.php">Sign out</a>';
?>

</div>

</nav>
	<meta charset="utf-8">
  <script src="dashboard/js/tinymce/tinymce.min.js"></script>
    <script src="dashboard/js/tinymce/script.js"></script>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/cms-home.css">
	<link rel="stylesheet" type="text/css" href="css/material-icons.css">
	<link rel="stylesheet" type="text/css" href="css/style.css" media="all" />
    <link rel="stylesheet" type="text/css" href="css/demo.css" media="all" />
    <link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
    <div id="ser">
   
       
        </div>
    <html>
	<form action="" method="post" class="form-inline my-2 my-lg-0"class="navbar-right">
    <input type="search" name="id" size="35" placeholder="use firstname to search" ariel-label="search"><br></br>
   <br><button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="search">Search</button></br>
        </form>
	<?php
	


    $conn=mysqli_connect("localhost","root","")or die(mysqli_error());
            mysqli_select_db($conn,"health")or die (mysqli_error());
	 	
		if(isset($_POST['search'])){
		$id=$_POST['id'];


$result = mysqli_query($conn,"SELECT * FROM child where Firstname='$id'") or die (mysqli_error($conn));
			
echo "<table border='1' class='table'>
<tr>
<th>serial no</th>
<th>First name</th>
<th>othername</th>
<th>surname</th>
<th>dob</th>
<th>sex</th>
<th>type of birth</th>
<th>nature of birth</th>
<th>place of birth</th>
<th>district</th>
<th>generate pdf</th>

</tr>";
   
   $row=mysqli_num_rows($result);
   
	   if($row==1){
   
   while($row = mysqli_fetch_array($result)){
	   
echo "<tr>";
echo "<td>" . $row['serial_no'] . "</td>";
echo "<td>" . $row['Firstname'] . "</td>";
echo "<td>" . $row['Othername'] . "</td>";
echo "<td>" . $row['Surname'] . "</td>";
echo "<td>" . $row['Date_of_birth'] . "</td>";
echo "<td>" . $row['sex'] . "</td>";
echo "<td>" . $row['Type_of_birth'] . "</td>";
echo "<td>" . $row['Nature_of_birth'] . "</td>";
echo "<td>" . $row['place_of_birth'] . "</td>";
echo "<td>" . $row['District'] . "</td>";
echo "<td><a href='notificationpdf.php?id=".$row['id']."'>generate</a></td>";
echo "</tr>";

echo "</table>";

   }
	}
	  else{
		
		echo '<script>window.alert("no records found")</script>';
		
		
		
       }
    }
mysqli_close($conn);



?>
<footer>
<div class="container-fluid padding">
     <div class="row text-center">
       
	   <div class="col-12">
	
	
	   <hr class="light">
	   <h5>&copy; timothy.com</h5>
	     <a href="generatetable.php" button type="button" class="btn btn-default">Back</button>

	  </div>
     </div>
  
   
   </div>

   </footer>