<!DOCTYPE html>
<html lang="en">
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css"
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>fathers registration</title>
    </head>
    <body>
	            <h1 align="center">REPUBLIC OF KENYA</h1>
				<h2 align="center">3E BIRTHS AND DEATHS REGISTRATION ACT</h2>
				<h3 align="center">(Cap. 149)</h3>
				<h4 align="center">REGISTER OF BIRTH</h4>
				<u><h5 align="left">Father's details</h5></u>
		<div class="container-fluid">		
        <form action="" method="post">
		
           <div class="form-group"> 
		   <label>FirstName:</label> 
		        <input type="text" name="firstname" placeholder="Enter first name" class="form-control" required/><br/>
		   </div>
			
			<div class="form-group">
			<label>Othername:</label>
			    <input type="text" name="othername" placeholder="Enter othername" class="form-control" required/><br/>
			</div>
		    
			<div class="form-group">
		    <label>Surname(fathers name or tribal):</label>
		         <input type="text" name="surname" placeholder="Enter surname(fathers name or tribal)" class="form-control"required/>
			</div>
         
            
        <input type="submit" name="submit" value="Save" class="btn-secondary:hover"/>
    </form>
	</div>
	<?php

  

 $conn= mysqli_connect("localhost", "root", "" )or die (mysqli_error());
              mysqli_select_db ($conn, "health" )or die(mysqli_error());
     

   


    if(isset($_POST['submit'])){

	$firstname = $_POST['firstname'];
	 $othername= $_POST['othername'];
	  $surname = $_POST['surname'];
	   

    $sql = "INSERT INTO father (FirstName, othername, surname) VALUES ('$firstname','$othername','$surname')" or die (mysql_error());
   //$sql= "INSERT INTO `child`(`serial_no`, `Firstname`, `Othername`, `Surname`, `Date_of_birth`, `phone`, `Sex`, `Type_of_birth`, `Nature_of_birth`, `place_of_birth(hospital)`, `District`) VALUES 
	//([$serial_no],[$firstname],[$othername],[$surname],[$dob],[$phone],[$sex],[$typeofbirt],[$natureofbirt],[$placeofbirth],[$district])" or die (mysql_error());
	if(mysqli_query( $conn, $sql)){
 
        echo '<script> window.alert("Records added successfully.")  </script>';

    } else{

        echo '<script>window.alert("ERROR: Could not able to execute $sql. ")</script>';

    }

	}

    // close connection

    mysqli_close($conn);

    ?>
</body>
</html>