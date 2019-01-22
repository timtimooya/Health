
<style>
.logo{
	margin-left:750px;
	
	
}
.img{
	height:75px;
	width:75px;
	border-radius:100px;
	
	
	
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

    <link rel="stylesheet" href="css/loginstyle.css">
	<link href="dashboard/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
	<div class=form-group">
	<div id="ser">
	
<nav>
 
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
     <div class="logo" >

        <img src ="<?php echo $image;?>" class="img"><br>
     <?php
       echo $fn."   ". $surname;echo "<br>";
        echo $reg; echo "<br>";
        echo '<a href="signout.php">Sign out</a>';
  ?>

   </div>
</nav>
	
	
	<div>
   
         <form action="" method="post" class="form-inline my-2 my-lg-0"class="navbar-right">
           <input type="search" name="id" size="35" placeholder="use id to search" ariel-label="search"><br></br>
           <br><button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="search">Search</button></br>
         </form>
        
  
      </div>
	  
	  
    <html>
<h1 style="font-size:30;color:#00FF00;"></h1>
<head>
<style>
table
{
border-style:solid;
border-width:2px;
border-color:pink;
}
</style>

  <?php
    if(isset($_POST['search'])){
        $conn=mysqli_connect("localhost","root","") or die(mysql_error());
        $db=mysqli_select_db( $conn,"health") or die(mysql_error());
        
    $id=$_POST['id'];
 
$result = mysqli_query($conn, "SELECT * FROM child join mother on child.id = mother.id join father on child.id = father.id where child.id='$id'");
 
echo "<table border='1'class='table'>

<tr>
<th>id</th>
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


<th>Mother-firstname</th>
<th>M-middlename</th>
<th>M-surname</th>
<th>M-Age</th>
<th>M-married</th>
<th>M-sub location</th>
<th>M-District</th>
<th>M-born alive</th>
<th>M-born dead</th>

<th>Father-firstname</th>
<th>F-othername</th>
<th>F-surname</th>
<th>DELETE</th>


</tr>";
  $row=mysqli_num_rows($result);
        if($row==1){
while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";

  //<!------childs details------>
echo "<td>" . $row['id'] . "</td>";
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

     //<--mothers details--> 
echo "<td>" . $row['Firstname'] . "</td>";
echo "<td>" . $row['Middlename'] . "</td>";
echo "<td>" . $row['Surname'] . "</td>";
echo "<td>" . $row['Age'] . "</td>";
echo "<td>" . $row['married'] . "</td>";
echo "<td>" . $row['Sub_location'] . "</td>";
echo "<td>" . $row['District'] . "</td>";
echo "<td>" . $row['bornalive'] . "</td>";
echo "<td>" . $row['borndead'] . "</td>";

    //<---fathers details-->
echo "<td>" . $row['Firstname'] . "</td>";
echo "<td>" . $row['othername'] . "</td>";
echo "<td>" . $row['surname'] . "</td>";
echo "<td><a href='deletechildmotherfatherinformant.php?id=".$row['id']."'>delete</a></td>";
      
  echo "</tr>";
  }
        }else{
            echo '<script> window.alert("no records found")</script>';
        }}
    
echo "</table>";
    
 

?>
</html>
<footer>
<div class="container-fluid padding">
     <div class="row text-center">
       
	   <div class="col-12">
	
	   <hr class="light">
	   <h5>&copy; timothy.com</h5>
	  
	   
	   <a href="Deletechildmotherfatherinformant1.php" button type="button" class="btn btn-default">Back</button>
	 
	  </div>
     
   </div>
   
   </div>

   </footer>