<!DOCTYPE html>
<html lang="en">
<html>
    <head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>mother registration</title>
    </head>
	
	
	

    <body>
                <h1 align="center">REPUBLIC OF KENYA</h1>
				<h2 align="center">3E BIRTHS AND DEATHS REGISTRATION ACT</h2>
				<h3 align="center">(Cap. 149)</h3>
				<h4 align="center">REGISTER OF BIRTH</h4>
			<u><h5 align="left">mothers details</h5></u>
	<div class="container-fluid">
        <form action="" method="post" class="form-group">
		
		  <div>
		     <div class="row">
			  <div>
               <label>FirstName:</label> 
			      <input type="text" name="firstnamem" class="form-control" placeholder="Enter firstname" class="form-control" required/>
		     </div>
		
		     <div class="form-group">
			     <label>Middlename:</label>
			      <input type="text" name="middlename" class="form-control" placeholder="Enter secondname" class="form-control" required/>
		     </div>
		     <div class="form-group">
		      <label>Surname(fathers name or tribal):</label> 
		         <input type="text" name="surname" class="form-control" placeholder="Enter surname" class="form-control" required/>
		     </div>	
           </div>
		 </div>
		 <div class="form-group">
		    
		    <label>Age:</label>   
            <input type="int" name="age" placeholder="Age" class="form-control" required/>
		 </div>
		<div >
		  
		    <label >Is Mother married to Father:  <label>
			     <label class="checkbox-inline"><input type="radio" name="married" value="Yes" />yes</label>
				 <label class="checkbox-inline"> <input type="radio" name="married" value="No"  />No</label>
		 
		</div>
			
		<div class="form-group">	
		    <label>Residence:</label>
		        <input type="text" name="Residence"placeholder="Enter place of residence" class="form-control" required/>
		</div>
		
		<div class="form-group">
          <div class="option">		
			<label>District:</label> 
			<select class="form-control" name="District">
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
		
		<div class="form-group">
		<label>Previous birth to mother of :</label>
			                Number born alive:<input type="int" name="nobornalive" placeholder="Number born alive" class="form-control"required/>
							Number born dead:<input type="int" name="noborndead" placeholder="Number born dead" class="form-control"required/>
        </div>
		
        <input type="submit" name="submit" value="Save"/>
    </form>
	</div>
	<?php

  

 $conn= mysqli_connect("localhost", "root", "" )or die (mysqli_error());
              mysqli_select_db ($conn, "health" )or die(mysqli_error());
     

   


    if(isset($_POST['submit'])){
	     $firstnamem = $_POST['firstnamem'];
	     $middlename= $_POST['middlename'];
	     $surname = $_POST['surname'];
		 $age = $_POST['age']; 
		 $married = $_POST['married'];
         $residence = $_POST['Residence'];
         $district = $_POST['District'];
		 $nobornalive = $_POST['nobornalive'];
		 $noborndead = $_POST['noborndead'];
   if($firstnamem=''&&$middlename=''&& $surname=''&&$age=''&&$married=''&&$residence=''&&$district=''&&$nobornalive=''&&$noborndead=''){
	   echo '<script>window.alert("please fill the fields")</script>';
	   
	   
   }else if($district=='choose District'){
	   
	   echo'<script>window.alert("please choose apropriate hospital")</script>';
   }else{
    $sql = "INSERT INTO mother(Firstname, Middlename, Surname, Age, married, Sub_location, District, bornalive, borndead) values
	                     ('$firstnamem','$middlename','$surname','$age','$married','$residence', '$district','$nobornalive','$noborndead')" or die (mysql_error());
   //$sql= "INSERT INTO `child`(`serial_no`, `Firstname`, `Othername`, `Surname`, `Date_of_birth`, `phone`, `Sex`, `Type_of_birth`, `Nature_of_birth`, `place_of_birth(hospital)`, `District`) VALUES 
	//([$serial_no],[$firstname],[$othername],[$surname],[$dob],[$phone],[$sex],[$typeofbirt],[$natureofbirt],[$placeofbirth],[$district])" or die (mysql_error());
	if(mysqli_query( $conn, $sql)){
               
        echo '<script type="text/javascript">';
		echo 'window.alert("Records added successfully.");';
        echo 'window.location.href="fathers.php";';		
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