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
	 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<style>
body {
    font-family: "Lato", sans-serif;
	<!--background:url(img/orphan.jpg);-->
	background-size:cover;
	background-position:center;
	background-margin-left:50%;
}

.sidenav {
    width: 200px;
    position: fixed;
    z-index: 1;
    top: 150px;
    left: 10px;
    background: #eee;
    overflow-x: hidden;
    padding: 8px 0;
}

.sidenav a {
    padding: 6px 8px 6px 16px;
    text-decoration: none;
    font-size: 20px;
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

@media screen and (max-height:) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 18px;}
}
.img{
	width:60px;
	height:60px;
	border-radius:80px;
	
}
.logo{
	margin-left:750px;
	
}
</style>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="healthhomepage.php"><img src="img/kenya.png" width="30%">Ministry of Health</a>
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
echo $id; echo "<br>";
echo '<a href="signout.php">Sign out</a>';

?>

</div>

</nav>
  
</div>
<div class="sidenav">
  <a href="dashboard.php">Dashboard</a>
  <a href="birth.php">REGISTRATION</a>
  <a href="generatetable.php">Generate Pdf</a>
  <a href="immunisationtable.php">Generate immunisation card</a>
  <a href="#contact">Contact</a>
</div>

<div class="main">
  <head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Registration page</title>
		
    <body  >
	            <h4 align="center">REPUBLIC OF KENYA</h4>
				<h5 align="center">3E BIRTHS AND DEATHS REGISTRATION ACT</h5>
				<h6 align="center">(Cap. 149)</h6>
				<h6 align="center">REGISTER OF BIRTH</h6>
			<u><h6 align="left">REGISTER OF BIRTH</h6></u>
     <div class="container-fluid">
        
		
		<form action="" method="post" onsubmit="return(timo())" enctype="multipart/form-data">
		<div class="form-group">
		    <u>
			<label>Serial No: </label>  
			     <input type="text" name="serial_no" class="form-control" placeholder="Enter serial number" required/>
		</u>
		</div>
        <hr class="my-4">
		<div class="col-sm-12">
		  <div class="row">
		    <div class="form-group col-sm-3">
		
		    <label> FirstName:</label> 
		          <input type="text" name="firstname_c" class="form-control" placeholder="Enter first name" id="fname"required/>
		   </div>
		  <div class="form-group col-sm-3">
		    <label>Othername:</label>
			       <input type="text" name="othername" class="form-control" placeholder="Enter other name" id="oname" required/>
		  </div>
		
         <div class="form-group col-sm-3"> 
		    <label>Surname(tribal name)</label>: 
			       <input type="text" name="surname" class="form-control" placeholder="Enter surname" required/>
		</div>	 
		 <div class="form-group col-sm-3">
		    <label>Date of Birth:</label> 
			       <input type="date" name="dob" class="form-control" required/>
		 </div>
		</div>	
		</div>
		
		<div class="col-sm-12">
		<div class="row">
			<div class="form-group col-sm-3">
			  <div class="radio">
			     <label>sex :</label>
			        <input type="radio" name="sex" value="Male"/>Male
			        <input type="radio" name="sex" value="Female" />Female
			  </div>
			</div>
		
			
			
			<div class="form-group col-sm-3">
			  <div class="radio">
			   <label>Type of birth:</label>
			            <input type="radio" name="typeofbirt" value="single" />single
			            <input type="radio" name="typeofbirt" value="twins" />twins
			 </div>
			</div>
	
			
			
			   <div class="form-group col-sm-3">
			      <div class="radio">
			      <label class="radio-inline">Nature of birth:</label>
			        <label class="radio-inline"> <input type="radio" name="natureofbirt" value="Born alive"/>Born Alive</label>
                     <label class="radio-inline"><input type="radio" name="natureofbirt" value="Born Dead"/>Born Dead</label>
			 </div>
			</div>
			
			<div class="form-group col-sm-3">
			  <div class="option">
			     <label>Place of birth:</label>
				 <!--<select name="place" class="form-control"id="place" onclick="selectoption()">
				 <option>choose hospital</option>
			     <option>kericho hospital</option>
			     <option> Nairobi hospital</option>
			     <option>Kisumu Hospital</option>
			     <option>Mombasa Hospital</option>
			     <option>Machakos Hospital</option>
			     <option>Maseno health centre</option>
			     </select> -->
				 <script src="js/js.js" type="text/javascript"></script>
				  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
				 <form action="" name="sammmmd" id="sad">
                <select id="sammy" class="form-control" name="place">
                <option value="">choose hospital</option>
                <?php
               
                $qryd = mysqli_query($conn, "select * from place_district ");
                if( mysqli_num_rows($qryd) > 0)
                {
                    while($res = mysqli_fetch_array($qryd))
                    {
                       	echo"<option>".$res['place']."</option>";
						
					
						
                    }
                } 
                ?> 
            </select>
			
			<script>
$('#sammy').change(function(){
var package = $(this).val();
$.ajax({
   type:'POST',
   data:{package:package},
   url:'getdistrict.php',
   success:function(data){
       $('#districtx').val(data);
   } 

});

}); </script>

</div>
</div>
</div>

<div class="form-group ">
			  <div class="option">
			    <label>District:</label> 
				<input type="text" name="District" class="form-control" id="districtx">
			      <!--- <select name="District" class="form-control" id="district" >
				     <option>choose District</option>
			         <option>kericho</option>
			         <option>Nairobi</option>
			         <option>Kisumu</option>
			         <option>Mombasa</option>
			         <option>Machakos</option>
			         <option>Maseno</option>
			       </select> -->
             </div>
			</div>
			</form>

		
			
			
			<div>
			
			<!--mothers deatails-->
<strong><hr></strong>
<u><h5 align="center">mothers details</h5></u>  
<strong><hr></strong>    

		 <div class="col-sm-12">
		     <div class="row">
			  <div class="form-group col-sm-3">
               <label>FirstName:</label> 
			      <input type="text" name="firstname_m" class="form-control" placeholder="Enter firstname" class="form-control"required/>
		     </div>
		
		     <div class="form-group col-sm-3">
			     <label>Middlename:</label>
			      <input type="text" name="middlename_m" class="form-control" placeholder="Enter secondname" class="form-control" required/>
		     </div>
		     <div class="form-group col-sm-3" >
		      <label>Surname(tribal name):</label> 
		         <input type="text" name="surname_m" class="form-control" placeholder="Enter surname" class="form-control" required/>
		     </div>	
		  <div class="form-group col-sm-3">
		    
		    <label>Age:</label>   
            <input type="int" name="age_m" placeholder="Age" class="form-control" id="age_m" maxlength="2"required/>
		   </div>
		 </div>
		</div>
		 <div class="col-sm-12">
		    <div class="row">
		     <div class="form-group col-sm-3">
		  
		    <label >Is Mother married to Father:  <label>
			     <label class="checkbox-inline"><input type="radio" name="married_m" value="Yes" />yes</label>
				 <label class="checkbox-inline"> <input type="radio" name="married_m" value="No"  />No</label>
		 
		  </div>
		  <div class="form-group col-sm-3">	
		    <label>Residence:</label>
		        <input type="text" name="Residence_m"placeholder="Enter place of residence" class="form-control"required/>
		</div>
		
		<div class="form-group form-col-sm-3  >
        <div class="option">		
			 <label>District:</label> 
			  <select class="form-control" name="District_m">
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
		  <div class="col-sm-12">
		  <div class="row">
		            <div class="form-col-sm-3 form-group">
			               <label> Number born alive:</label><input type="int" name="nobornalive_m" placeholder="Number born alive" class="form-control" id="nobornalive_m" maxlength="2"required/>
					</div>
  			<div class="form-col-sm-3 form-group">
			<label>Number born dead:</label><input type="int" name="noborndead_m" placeholder="Number born dead" class="form-control" id="noborndead_m" maxlength="2"required/>
          </div>
		
		</div>
		</div>
		
		<!--fathers details--->
		 <hr>
		 <u><h5 align="center">Father's details</h5></u>
		 <hr>
		 <div class="col-sm-12">
		<div class="row">
		  <div class="form-group col-sm-3"> 
		   <label>FirstName:</label> 
		        <input type="text" name="firstname_f" placeholder="Enter first name" class="form-control" required/><br/>
		   </div>
			
			<div class="form-group col-sm-3">
			<label>Othername:</label>
			    <input type="text" name="othername_f" placeholder="Enter othername" class="form-control" required/><br/>
			</div>
		    
			<div class="form-group col-sm-3">
		    <label>Surname(tribal name):</label>
		         <input type="text" name="surname_f" placeholder="Enter surname(fathers name or tribal)" class="form-control"required/>
			</div>
		</div>

		<hr>
		 <u><h5 align="center">informant</h5></u>
		 </hr>
		 
		 <div class="col-sm-12">
		 <div class="row">
		<div class="form-group col-sm 4">
             <label>capacity of informant</label><br/>
              <label class="radio-inline"><input type="radio" name="lit" value="Parent"/>Parent</label>
              <label class="radio-inline"><input type="radio" name="lit" value="T.B.A"/>T.B.A</label>
              <label class="radio-inline"><input type="radio" name="lit" value="Midwife"/>Midwife</label>
             <label class="radio-inline"> <input type="radio" name="lit" value="Medical attendant"/>Medical attendant</label>
             <label class="radio-line"><input type="radio" name="lit" value="others"/>others</label>
  
        </div>
		
		<div class="form-group col-sm-4">
		Nurse signature upload: <input type="file" name="tim"  required/>
             
	    </div>
		</div>
       
	   <div>
	   <input type="submit" name="submitx" value="Save"/>
		</div>
    </div>
	
	</form>
	</div>
	</div>
	<?php
$dates=date('d-M-Y');
  

 $conn= mysqli_connect("localhost", "root", "" )or die (mysqli_error());
              mysqli_select_db ($conn, "health" )or die(mysqli_error());
     

   


    if(isset($_POST['submitx'])){
		// childs details
$serial_no=$_POST['serial_no'];
	$firstname_c = $_POST['firstname_c'];
	 $othername= $_POST['othername'];
	  $surname = $_POST['surname'];
	   $dob = $_POST['dob'];
		 $sex = $_POST['sex']; 
		 $typeofbirt = $_POST['typeofbirt'];
		 $natureofbirt = $_POST['natureofbirt'];
         $placeofbirth = $_POST['place'];
         $district = $_POST['District'];
		 
		 //mothers details
		 
		 $firstname_m = $_POST['firstname_m'];
	     $middlename_m= $_POST['middlename_m'];
	     $surname_m = $_POST['surname_m'];
		 $age_m = $_POST['age_m']; 
		 $married_m = $_POST['married_m'];
         $residence_m = $_POST['Residence_m'];
         $district_m = $_POST['District_m'];
		 $nobornalive_m = $_POST['nobornalive_m'];
		 $noborndead_m = $_POST['noborndead_m'];
		 
		 
		 //fathers details
		 $firstname_f = $_POST['firstname_f'];
	    $othername_f= $_POST['othername_f'];
	    $surname_f = $_POST['surname_f'];
		
		//informant details
	   $job=$_POST['lit'];
		 
		 //signature
		 $uploadDir ='uploads/';
		    $fileName=$_FILES['tim']['name'];
		    $tmpName=$_FILES['tim']['tmp_name'];
		    $fileSize=$_FILES['tim']['size'];
		    $fileType=$_FILES['tim']['type'];
		    $filePath=$uploadDir.$fileName;
         $result=move_uploaded_file($tmpName,$filePath);
		 
		 if( $sex =='' && $typeofbirt =='' && $natureofbirt =='' && $married_m =='' && $job ==''){
			 echo'<script>window.alert("Empty fields detected.")</script>';
		 }else if($placeofbirth=='choose hospital'){
			 echo'<script>window.alert("Please choose appropriate place of birth.")</script>';
			 
			 
		 }else if($district=='choose District'){
			 echo'<script>window.alert("Please choose appropriate district of birth.")</script>';
			 
			 
		 }else if(($district_m=='choose District')){
			 
			echo'<script>window.alert("Please choose appropriate district of birth.")</script>'; 
			 
			 
		 }else{
		 

		 
    $sqlz = mysqli_query($conn, "INSERT INTO child (serial_no, Firstname, Othername, Surname, Date_of_birth, Sex, Type_of_birth, Nature_of_birth, place_of_birth, District) VALUES 
	                     ('$serial_no','$firstname_c','$othername','$surname','$dob','$sex','$typeofbirt','$natureofbirt','$placeofbirth', '$district')") or die (mysqli_error($conn));
  
		 
 $sql1 = mysqli_query($conn, "INSERT INTO mother ( Firstname, Middlename, Surname, Age, married, Sub_location, District,bornalive,borndead) VALUES 
	              ('$firstname_m','$middlename_m','$surname_m','$age_m','$married_m','$residence_m', '$district_m','$nobornalive_m','$noborndead_m')") or die (mysql_error($conn));
		
  $sql2= mysqli_query( $conn, "INSERT INTO father (Firstname, othername, surname) VALUES ('$firstname_f','$othername_f','$surname_f')") or die (mysql_error($conn));
  $tim=mysqli_query($conn, "INSERT INTO informant(informant)VALUES('$job')")or die(mysqli_error());
  $rowx=mysqli_query($conn, "insert into certification (date,signature) values('$dates', '$filePath')")or (mysqli_error());
  //imunnisation 
  $polio2=date('Y-m-d',strtotime($dob. '+ 42 days '));
    $dpt1=date('Y-m-d',strtotime($dob. '+ 42 days '));
	$polio3=date('Y-m-d',strtotime($dob. '+ 70 days '));
    $dpt2=date('Y-m-d',strtotime($dob. '+ 70 days '));
	  $dpt3=date('Y-m-d',strtotime($dob. '+ 98 days '));
	  $measles=date('Y-m-d',strtotime($dob. '+ 252 days '));
  
  
  $immu = mysqli_query($conn, "INSERT INTO immunisation( disease_bcg, disease_polio_1, disease_polio_2, disease_polio_3, disease_dpt_1, disease_dpt_2, disease_dpt_3, disease_measles) VALUES 
	                     ('$dob','$dob','$polio2','$polio3','$dpt1','$dpt2','$dpt3','$measles')") or die (mysqli_error($conn));
  
  //$sql= "INSERT INTO `child`(`serial_no`, `Firstname`, `Othername`, `Surname`, `Date_of_birth`, `phone`, `Sex`, `Type_of_birth`, `Nature_of_birth`, `place_of_birth(hospital)`, `District`) VALUES 
	//([$serial_no],[$firstname],[$othername],[$surname],[$d{ob],[$phone],[$sex],[$typeofbirt],[$natureofbirt],[$placeofbirth],[$district])" or die (mysql_error());
	
	
		 if($sqlz && $sql1 &&$sql2 && $tim && $rowx && $immu){
			 
	
         echo '<script type="text/javascript">';
        echo 'window.alert("Records added successfully.");';
		//header('location.mother.php');
		echo'window.location.href="dashboard.php";';
		echo '</script>';

    
		
		
		
	      }else{

        echo '<script>window.alert("ERROR: Could not able to execute $sql. ")</script>';

    }

	} 
	
		 }

	
	
    // close connection

    mysqli_close($conn);

    ?>
</body>
</html>


<script>
	function timo(){
		
		var age=document.getElementById('age_m');
		var nobornalive_m=document.getElementById('nobornalive_m');
		var noborndead_m=document.getElementById('noborndead_m');
		var fname=document.getElementById('fname');
		
		var test1=/^[0-9]+$/;
		
		
		if(!test1.test(age.value)){
			alert('please put numbers only');
			age.focus;
			return false;
					
		}else if(!test1.test(nobornalive_m.value)){
			alert('please put the appropriate number born alive');
			nobornalive_m.focus;
			return false;
				
		}else if(!test1.test(noborndead_m.value)){
			alert('please put the appropriate number born dead');
			noborndead_m.focus;
			return false;
			
		}else if(!nobornalive_m.value.length >= 1 && nobornalive_m.value.length <= 3){
			alert('put the correct number of born alive');
			nobornalive_m.focus;
			return false;
		}else if (!fname.value.length >= 3){
			alert('please input the correct first name');
			fname.focus;
			return false;
			
	}else if(!oname.value.length >= 2){
		alert('please put the correct other name');
		oname.focus;
		return false;
			
		}
	}
	
	
	function selectoption(){
	var place = document.getElementById('place');
	var district = document.getElementById('district');
		if(place.value=="kericho hospital"){
			onclick.district="kericho";
		}else if(place){
			
			
		}
		}
	</script>

</body>
</html> 
 <footer>
<div class="container-fluid padding">
     <div class="row text-center">
       
	   <div class="col-12">
	
	   <hr class="light">
	   <h5>&copy; timothy.com</h5>
	  
	   
	   <a href="dashboard.php" button type="button" class="btn btn-default">Back</button>
	 
	  </div>
     
   </div>
   
   </div>

   </footer>
    