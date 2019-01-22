<!DOCTYPE html>
<html lang="en">
<html>
    <head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Registration page</title>
		
    <body>
	            <h1 align="center">REPUBLIC OF KENYA</h1>
				<h2 align="center">3E BIRTHS AND DEATHS REGISTRATION ACT</h2>
				<h3 align="center">(Cap. 149)</h3>
				<h4 align="center">REGISTER OF BIRTH</h4>
			<u><h5 align="left">REGISTER OF BIRTH</h5></u>
     <div class="container-fluid">
        
		<form action="" method="post">
		<div class="form-group">
		    <u>
			<label>Serial No: </label>  
			     <input type="text" name="serial_no" class="form-control" placeholder="Enter serial number" required/>
		</u>
		</div>
        <hr class="my-4">
		<div class="form-group">
		   <label> FirstName:</label> 
		          <input type="text" name="firstnamen" class="form-control" placeholder="Enter first name"required/>
		</div>
		<div class="form-group">
		    <label>Othername:</label>
			       <input type="text" name="othername" class="form-control" placeholder="Enter other name" required/>
		</div>
		
		<div class="form-group"> 
		    <label>Surname(fathers name or tribal)</label>: 
			       <input type="text" name="surname" class="form-control" placeholder="Enter surname" required/>
		</div>
		 
		 <div class="form-group">
		    <label>Date of Birth:</label> 
			       <input type="date" name="dob" class="form-control" required/>
		 </div>
			
			<div class="form-group">
			  <div class="radio">
			     <label>sex :</label>
			        <input type="radio" name="sex" value="Male"/>Male
			        <input type="radio" name="sex" value="Female" />Female
			  </div>
			</div>
			<div class="form-group">
			  <div class="radio">
			   <label>Type of birth:</label>
			            <input type="radio" name="typeofbirt" value="single" />single
			            <input type="radio" name="typeofbirt" value="twins" />twins
			 </div>
			</div>
			<div class="form-group">
			 <div class="radio">
			  <label>Nature of birth:</label>
			         <input type="radio" name="natureofbirt" value="Born alive"/>Born Alive
                     <input type="radio" name="natureofbirt" value="Born Dead"/>Born Dead
			 </div>
			</div>
			
			<div class="form-group">
			  <div class="option">
			     <label>Place of birth:</label>
				 <select name="place" class="form-control">
				 <option>choose hospital</option>
			     <option>kericho hospital</option>
			     <option> Nairobi hospital</option>
			     <option>Kisumu Hospital</option>
			     <option>Mombasa Hospital</option>
			     <option>Machakos Hospital</option>
			     <option>Maseno health centre</option>
			     </select>
			</div>
			</div>
			
			<div class="form-group">
			  <div class="option">
			    <label>District:</label> 
			       <select name="District" class="form-control">
				     <option>choose District</option>
			         <option>kericho</option>
			         <option>Nairobi</option>
			         <option>Kisumu</option>
			         <option>Mombasa</option>
			         <option>Machakos</option>
			         <option>Maseno</option>
			       </select>
             </div>
			</div>
			
			<div>
        <input type="submit" name="submit" value="Save"/>
		</div>
    </div>
	
	</form>
	</div>
	<?php

  

 $conn= mysqli_connect("localhost", "root", "" )or die (mysqli_error());
              mysqli_select_db ($conn, "health" )or die(mysqli_error());
     

   


    if(isset($_POST['submit'])){
$serial_no=$_POST['serial_no'];
	$firstnamen = $_POST['firstnamen'];
	 $othername= $_POST['othername'];
	  $surname = $_POST['surname'];
	   $dob = $_POST['dob'];
		 $sex = $_POST['sex']; 
		 $typeofbirt = $_POST['typeofbirt'];
		 $natureofbirt = $_POST['natureofbirt'];
         $placeofbirth = $_POST['place'];
         $district = $_POST['District'];
		 
		 
		 if($firstname='' && $othername='' && $surname='' && $dob='' && $sex='' && $typeofbirt='' && $natureofbirt='' && $place_of_birth='' && $district=''){
			 echo'<script>window.alert("Empty fields detected.")</script>';
		 }else if($placeofbirth=='choose hospital'){
			 echo'<script>window.alert("Please choose appropriate place of birth.")</script>';
			 
			 
		 }else if($district=='choose District'){
			 echo'<script>window.alert("Please choose appropriate district of birth.")</script>';
			 
			 
		 }
		 else{

    $sql = "INSERT INTO child (serial_no, Firstname, Othername, Surname, Date_of_birth, Sex, Type_of_birth, Nature_of_birth, place_of_birth, District) VALUES 
	                     ('$serial_no','$firstnamen','$othername','$surname','$dob','$sex','$typeofbirt','$natureofbirt','$placeofbirth', '$district')" or die (mysqli_error($conn));
   //$sql= "INSERT INTO `child`(`serial_no`, `Firstname`, `Othername`, `Surname`, `Date_of_birth`, `phone`, `Sex`, `Type_of_birth`, `Nature_of_birth`, `place_of_birth(hospital)`, `District`) VALUES 
	//([$serial_no],[$firstname],[$othername],[$surname],[$dob],[$phone],[$sex],[$typeofbirt],[$natureofbirt],[$placeofbirth],[$district])" or die (mysql_error());
	if(mysqli_query( $conn, $sql)){
    echo  '<script type="text/javascript">';
        echo 'window.alert("Records added successfully.");';
		//header('location.mother.php');
		echo'window.location.href="mother.php";';
		echo '</script>';

    } else{

        echo '<script>window.alert("ERROR: Could not able to execute $sql. ")</script>';

    }

	}
	}
	
    // close connection

    mysqli_close($conn);

    ?>
</body>
</html>