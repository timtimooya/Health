<style>
.logo{
	margin-left:700px;
	
	
}
.img{
	width:75px;
	height:75px;
	border-radius:100px;
	
}
</style>



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

<script src="dashboard/js/tinymce/tinymce.min.js"></script>
    <script src="dashboard/js/tinymce/script.js"></script>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/cms-home.css">
	<link rel="stylesheet" type="text/css" href="css/material-icons.css">
	<link rel="stylesheet" type="text/css" href="css/style.css" media="all" />
    <link rel="stylesheet" type="text/css" href="css/demo.css" media="all" />
    <link rel="stylesheet" type="text/css" href="css/jquery-ui.css">

    <link rel="stylesheet" href="css/loginstyle.css">
	<link href="dashboard/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


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
    

    
    </li>
  </ul>
   <div class="logo">
    
    <img src="<?php echo $image?>" class="img"> <br>
	<?php
    echo $fn." ".$surname; echo"<br>";
    echo $reg; echo "<br>";
    echo '<a href="signout.php">Sign out</a>';	
    ?>
   </div>
</nav>

<form action="search.reglist.php" method="post" class="form-inline my-2 my-lg-0"class="navbar-right">
    <input type="search" name="id" size="35" placeholder="use id to search" ariel-label="search"><br></br>
   <br><button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="search">Search</button></br>
        </form>


<?php
$conn=mysqli_connect("localhost","root","")or die(mysqli_error());
     mysqli_select_db($conn,"health")or die (mysqli_error());
	 


$result = mysqli_query($conn,"SELECT username, password, firstname,middlename,surname,id_no,nurse_no FROM registration") or die (mysqli_error($conn));

echo "<table border='1' class='table table-stripped'>
<tr>
<th>username</th>
<th>password</th>
<th>firstname</th>
<th>middlename</th>
<th>surname</th>
<th>id_no</th>
<th>nurse_no</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['username'] . "</td>";
echo "<td>" . $row['password'] . "</td>";
echo "<td>" . $row['firstname'] . "</td>";
echo "<td>" . $row['middlename'] . "</td>";
echo "<td>" . $row['surname'] . "</td>";
echo "<td>" . $row['id_no'] . "</td>";
echo "<td>" . $row['nurse_no'] . "</td>";

echo "</tr>";
}
echo "</table>";

mysqli_close($conn);
?>
<footer>
<div class="container-fluid padding">
     <div class="row text-center">
       
	   <div class="col-12">
	
	   <hr class="light">
	   <h5>&copy; timothy.com</h5>
	  
	   
	   <a href="navi_registra.php" button type="button" class="btn btn-default">Back</button>
	 
	  </div>
     
   </div>
   
   </div>

   </footer>