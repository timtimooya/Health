<!DOCTYPE html>
<html lang="en">
<html>
    <head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Registration page</title>
		<style type="text/css">
		form-group{ width:30%;
			
		}
		</style>
	</head>
	<div class="row">
	<div class="col-sm-3">
		     <div class="list-group width">
              <a href="navi_registra.php" class="list-group-item list-group-item-action active">Dashboard</a>
              <a href="registrationnurse.php" class="list-group-item list-group-item-action">Registration</a>
              <a href="reglist.php" class="list-group-item list-group-item-action">List of nurses registered</a>
              <a href="generatetablecert.php" class="list-group-item list-group-item-action">Generate birth certificate</a>
               <a href="generatetablecert.php" class="list-group-item list-group-item-action">Generate birth certificate</a>
               <a href="signout.php" class="list-group-item list-group-item-action">sign out</a>
              
            </div> 
		</div>
	
		<div class="col-lg-9">	
    <body>
	
	            <h4 align="center">REPUBLIC OF KENYA</h4>
				<h4 align="center">3E  BIRTHS AND DEATHS REGISTRATION ACT</h2>
				<h5 align="center">(Cap. 149)</h5>
				<h6 align="center">Nurse REGISTRATION FORM</h6>
			
     <div class="container-fluid" id="registration-form">
      
		<form action="" method="post" name="myform" onsubmit="return(timo())" enctype="multipart/form-data">
		
		<div class="col-sm-12">
		<div class="row">
		
		
		<div class="col-sm-3">
		  <div class="form-group">
			   <label>Username: </label>  
			      <input type="text" name="username" class="form-control" placeholder="Enter username" id="user"required/>
		     </div>
         </div>
		 
		   <div class="col-sm-3">
		     <div class="form-group">
		      
		        <label> Password:</label>
		          <input type="password" name="password" class="form-control" placeholder="password" id="pass"required/>
		      
		     </div>
		   </div>
		   
		   
		   <div class="col-sm-3">
		    <div class="form-group">
		     
		      <label>confirm password:</label>
			       <input type="password" name="confirmpassword" class="form-control" placeholder="confirm password" id="pass1"
				   required/>
		       </div>
		     </div>
		   
		   
		   <div class="col-sm-3">
		   <div class="form-group"> 
		     <label>FirstName:</label>: 
			       <input type="text" name="firstname" class="form-control" placeholder="Enter firstname" required/>
		  </div>
		 </div>
		 </div>
		 
		 
		 <div class="col-sm-12">
		    <div class="row">
			
			<div class="col-sm-3">
		       <div class="form-group">
		         <label>Middlename:</label> 
			       <input type="text" name="Middlename" class="form-control" placeholder="Enter middlename" required/>
		      </div>
			</div>
			
			
			
			<div class="col-sm-3">
			    <div class="form-group">
			  
			     <label>Surname:</label>
				   <input type="text" name="surname" class="form-control" placeholder="Enter surname" required/>
			        
			    </div>
			</div>
			
			  <div class="col-sm-3">
			    <div class="form-group">
			  
			     <label>station:</label>
				   <select name="station" class="form-control">
				 <option>choose station</option>
			     <option>kericho hospital</option>
			     <option> Nairobi hospital</option>
			     <option>Kisumu Hospital</option>
			     <option>Mombasa Hospital</option>
			     <option>Machakos Hospital</option>
			     <option>Maseno health centre</option>
			     </select>
			        
			     </div>
			  </div>
			
			  <div class="col-sm-3">
			   <div class="form-group">
			  
			     <label>id no:</label>
				   <input type="int" name="id_no" class="form-control" placeholder="Enter identification number" maxlength="8" min="8" id="idno"  required/>
			        
			    </div>
			  </div>
			
			</div>
		</div>
			
			
			<div class="col-sm-12">
			  <div class="row">
			  <div class="col-sm-6">
			    <div class="form-group">
			  
			     <label>nurse no:</label>
				   <input type="text" name="nurse_no" class="form-control" placeholder="Enter nurse number " required/>
			        
			   </div>
			</div>
			
			<div class="col-sm-6">
			  <div class="form-group">
			      <label>upload image</label>
			            <input type="file" name="img" class="form-control" required/><br/>
			
			  </div>
			</div>
			
			 </div>
			</div>
			
			<div>
        <input type="submit" name="submit" value="Register"/>
		</div>
      
	
	
	         </form>
	    </div>
	  </div>
	</div>
</div>

	<?php

  

 $conn= mysqli_connect("localhost", "root", "" )or die (mysqli_error());
              mysqli_select_db ($conn, "health" )or die(mysqli_error());
     

   


    if(isset($_POST['submit'])){
$username=$_POST['username'];
	$password = $_POST['password'];
	 $confirmpassword= $_POST['confirmpassword'];
	  $firstname = $_POST['firstname'];
	   $middlename = $_POST['Middlename'];
		 $surname = $_POST['surname']; 
		 $station=$_POST['station'];
		 $id_no = $_POST['id_no'];
		 $nurse = $_POST['nurse_no'];
		 
		 
	$restrictuser =mysqli_query($conn, "SELECT * FROM registration WHERE username='$username'") or die(mysqli_error($conn));
$rowu=mysqli_num_rows($restrictuser);
$restrictpass =mysqli_query($conn, "SELECT * FROM registration WHERE password='$password'") or die(mysqli_error($conn));
$rowp=mysqli_num_rows($restrictpass);
if($rowu>0){
	echo '<script type="text/javascript">';
	echo 'window.alert("Please choose another username ");';
	echo 'window.location.href="registrationnurse.php";';
	echo '</script>';
}elseif($rowp>0){
	echo '<script type="text/javascript">';
	echo 'window.alert("Please choose another password ");';
	echo 'window.location.href="registrationnurse.php";';
	echo '</script>';
}else{
		 
		 
		 $uploadDir ='uploads/';
		    $fileName=$_FILES['img']['name'];
		    $tmpName=$_FILES['img']['tmp_name'];
		    $fileSize=$_FILES['img']['size'];
		    $fileType=$_FILES['img']['type'];
		    $filePath=$uploadDir.$fileName;
         $result=move_uploaded_file($tmpName,$filePath);
         
              
    $sql = "INSERT INTO registration(username, password, firstname, middlename, surname, station,id_no, nurse_no,path) value
	                                 ('$username','$password','$firstname','$middlename','$surname','$station','$id_no','$nurse','$filePath')" or die (mysqli_error($conn));
   //$sql= "INSERT INTO `child`(`serial_no`, `Firstname`, `Othername`, `Surname`, `Date_of_birth`, `phone`, `Sex`, `Type_of_birth`, `Nature_of_birth`, `place_of_birth(hospital)`, `District`) VALUES 
	//([$serial_no],[$firstname],[$othername],[$surname],[$dob],[$phone],[$sex],[$typeofbirt],[$natureofbirt],[$placeofbirth],[$district])" or die (mysql_error());
	if ($password!= $confirmpassword){
		
		echo '<script type="text/javascript">';
		echo 'window.alert("password do not match ");';
		 echo 'window.location.href="registrationnurse.php";';
	     echo '</script>';
		
		   
	}else if($station =='choose station'){
		       echo'<script type="text/javascript">';
			   echo'window.alert("Please choose the right hospital station");';
			   echo 'window.location.href="registrationnurse.php";';
			   echo '</script>';
		}else{
	if(mysqli_query( $conn, $sql,$result)){
 
        echo '<script> window.alert("Records added successfully.")  </script>';

    } else{

        echo '<script>window.alert("ERROR: Could not able to execute $sql. ")</script>';

    }
		}
		
	}
	}
    // close connection

	
	
    mysqli_close($conn);

    ?>
	
	<script>
	
	function timo(){
		
		var pas1=document.getElementById('pass');
		var pas2=document.getElementById('pass1');
		var user2=document.getElementById('user');
		var idnoh=document.getElementById('idno');
		var test1=/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}$/;
		var testuser= /^[a-zA-Z0-9_]+$/;
			var idnox= /^\([0-9]{8})$/;
		
		if(!test1.test(pas1.value)){
			alert(' at least one number, one lowercase and one uppercase letter and at least six characters that are letters, numbers or the underscore');
			pass.focus;
			return false;
			
			
		}else if(!idnox.test(idnoh.value))
			alert('id number must be in numbers');
			idno.focus;
			return false;
			
			
		}
	}
	
	
	</script>
</body>
</div>
</html>
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