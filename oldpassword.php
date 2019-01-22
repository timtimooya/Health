
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
	 .pass_show{position: relative} 

       .pass_show .ptxt { 

           position: absolute; 

             top: 50%; 

                right: 10px; 

                  z-index: 1; 

                   color: #f36c01; 

                    margin-top: -10px; 

                      cursor: pointer; 

                         transition: .3s ease all; 

             } 

        .pass_show .ptxt:hover{color: #333333;} 
	 
	 
	 
	 </style>
<?php
include ('loginvalidation.php');
$query=mysqli_query($conn,"select * from registration where id='".$_SESSION['ad']."'") or die(mysqli_error());
while($data=mysqli_fetch_array($query)){
$fn=$data['firstname'];	
$md=$data['middlename'];	
$id=$data['id_no'];	
$nrse=$data['nurse_no'];
$path=$data['path'];
$pass=$data['password'];	
}

?>

<title></title>

</head>

<body>
<fieldset>
<div class="container">

  <form action="" method="POST">

   user:<?php echo $fn;?><br>
   <div class="col-sm-4">
     <div class="row">
       <div class="form-group pass_show">
        <input type="password" name="oldpassword" placeholder="old password" class="form-control"><br>
	   </div>
  
         <div class="form-group pass_show">  
          <input type="password" name="newpassword" placeholder="New password" class="form-control"><br>
		 </div>

        <div class="form-group pass_show"> 
          <input type="password" name="confirmpassword" placeholder="confirmpassword" class="form-control"></br></br></br>
        </div>
       <div class="form-group">
	    <button type="submit" name="update" class="btn btn-primary" value="update">update</button>
   
	  </div>
	  </div>
	 </div>
   </form>

</div>
<?php

    $conn=mysqli_connect('localhost','root','')or die(mysql_error());
            mysqli_select_db($conn,'health')or die(mysqli_error());
if (isset($_POST['update'])){
	$oldpassword=$_POST['oldpassword'];
	$newpassword=$_POST['newpassword'];
	$confirmpassword=$_POST['confirmpassword'];
			if ($pass=!$oldpassword){
				echo'<script type="text/javascript">';
				echo 'window.alert("please put the right password that the register gave you;");';
				echo 'windows.location.href="oldpassword.php";';
				echo '</script>';
				
			}else if($newpassword=!$confirmpassword){
				echo'<script>window.alert("password should match; ")</script>';
				
				
			}else{
			
		
		
		$nugu="update  registration set password='$confirmpassword', upd='1' where id = '".$_SESSION['ad']."'"or die(mysqli_error());
	
		if (mysqli_query($conn,$nugu)){
			
			echo'<script type="text/javascript">';
			   echo 'window.alert("successfully changed the password");';
				echo 'window.location.href="login.php";';
			  echo'</script>';
			
			
			
		}

			}
		
		}

			
			
			
?>
</fieldset>
</body>
</html>
<script>
$(document).ready(function(){
$('.pass_show').append('<span class="ptxt">Show</span>');  
});
  

$(document).on('click','.pass_show .ptxt', function(){ 

$(this).text($(this).text() == "Show" ? "Hide" : "Show"); 

$(this).prev().attr('type', function(index, attr){return attr == 'password' ? 'text' : 'password'; }); 

});  



</script>
