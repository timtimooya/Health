<html>
<head>
<title></title>
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
</head>


<body>
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

    <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Dropdown link
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Link 1</a>
        <a class="dropdown-item" href="#">Link 2</a>
        <a class="dropdown-item" href="#">Link 3</a>
      </div>
    </li>
  </ul>
  <div class="logo">


  

  </div>
</nav>
<div class="container">
	<div class="row">
		<div class="col-sm-4 ">
		     <div class="list-group width>
              <a href="#" class="list-group-item list-group-item-action active">Dashboard</a>
              <a href="registrationnurse.php" class="list-group-item list-group-item-action">Registration</a>
              <a href="reglist.php" class="list-group-item list-group-item-action">List of nurses registered</a>
              <a href="regdelete.php" class="list-group-item list-group-item-action">Update nurse information</a>
              <a href="generatetablecert.php" class="list-group-item list-group-item-action">Generate birth certificate</a>
              <a href="Deletechildmotherfatherinformant1.php" class="list-group-item list-group-item-action">Delete Registered child/parent details</a>
              <a href="listchildmotherfatherinformant.php" class="list-group-item list-group-item-action">List of child/parents details</a>
              <a href="registration.php" class="list-group-item list-group-item-action">registration of registra</a>
             
              
            </div> 
		</div>
	</div>	
	<div class="col-lg-4" padding-left="400px">
	<div class="row">
<form action="" method="POST" enctype="multipart/form-data">
   <div class="cointainer-fluid">
      <div class="form-group">
          <label>Location</label><br>
          <input type="text" name="location" placeholder="insert the current location" class="form-control" required/>
      </div>
	  <div class="form-group">
             <label>District</label><br>
             <input type="text" name="district" placeholder="place district" class="form-control" required/>
     </div>
	    <div class="form-group">
             <label>registration_no</label><br>
             <input type="text" name="reg" placeholder="enters officer registration number" class="form-control"required/>
        </div>
      <div class="form-group">
             <label>Firstname</label><br>
             <input type="text" name="firstname" placeholder="enter first name" class="form-control" required/>
      </div>
	  <div class="form-group">
            <label>secondname</label><br>
            <input type="text" name="secondname" placeholder="Enter second name" class="form-control"/>
      </div>
     <div class="form-group">
	        <label>surname</label><br>
	        <input type="text" name="surname" placeholder="Enter surname" class="form-control" required/>
	 </div>
	 <div class="form-group">
	        <label>username</label>
	        <input type="username" name="username" placeholder="enter username"class="form-control"required/>
	 
	 </div>
	 <div class="form-group">
	       <label>Password</label><br>
	       <input type="password" name="password" placeholder="please place a password" class="form-control" required/>
	 </div>
	 <div class="form-group">
	       <label>confirm password</label><br>
	       <input type="password" name="pass1" placeholder="please confirm password" class="form-control" required/>
	 </div>
	 
	  <div class="form-group">
	       <label>upload image<label>
	       <input type="file" name="img" class="form-control"required/>
	  </div>
	 
	  <div class="form-group">
	        <label>upload signature<label>
	        <input type="file" name="sig" class="form-control"required/>
	  </div>
	 
      <div>
	        <input type="submit" name="submit" value="Register"/>
	  </div>

	 </div>
</form>
</div>
</div>
<?php
   $date=date('D-M-Y');
    $conn= mysqli_connect('localhost','root','')or die(mysqli_error());
             mysqli_select_db($conn,'health')or die(mysqli_error());



   if(isset($_POST['submit'])){
	
	  $location=$_POST['location'];
	  $district=$_POST['district'];
	  $reg=$_POST['reg'];
	  $firstname=$_POST['firstname'];
	  $secondname=$_POST['secondname'];
	  $surname=$_POST['surname'];
	  $username=$_POST['username'];
	  $password=$_POST['password'];
	  $pass1=$_POST['pass1'];
	  
	  $uploadDir ='uploads/';
		    $fileName=$_FILES['img']['name'];
		    $tmpName=$_FILES['img']['tmp_name'];
		    $fileSize=$_FILES['img']['size'];
		    $fileType=$_FILES['img']['type'];
		    $filePath=$uploadDir.$fileName;
         $result=move_uploaded_file($tmpName,$filePath);
         
		// $uploadDir ='uploads/';
		    $fileName1=$_FILES['sig']['name'];
		    $tmpName1=$_FILES['sig']['tmp_name'];
		    $fileSize1=$_FILES['sig']['size'];
		    $fileType1=$_FILES['sig']['type'];
		    $filePath1=$uploadDir.$fileName;
         $result1=move_uploaded_file($tmpName1,$filePath1);
	
	if ($password== $pass1){
		
		$registra="INSERT INTO registra (Date,location, District, Registration_no, firstname, secondname, surname, username, password, confirmpassword,image,signature )values
		                                 ('$date','$location','$district','$reg','$firstname','$secondname','$surname','$username','$password','$pass1', '$filePath','$filePath1')" or die(mysqli_error());
		
		if(mysqli_query($conn, $registra)){
			
		echo '<script type="text/javascript">';
		
		echo 'window.alert("successfully registered.");';
		
		echo 'window.location.href="dashboardadmin.php";';
		
		
		echo '</script>';	
			
			
		}else{
			
			echo '<script>window.alert("please register again")</script>';
		}
	}else{
		
		
		echo '<script>window.alert("password should be the same ")</script>';
	}
	
	
	
}




?>


</body>


</html>