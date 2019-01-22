<html>
<head>
<title>certification</title>
</head>
<body>

<form action="" method="POST" enctype="multipart/form-data">
signature:
            <input type="file" name="tim"  required/>
             <input type="submit" name="submit" value="submit">



</form>



<?php
$dates=date('d-M-Y');
   $conn=mysqli_connect('localhost','root','') or die (mysqli_error());
         mysqli_Select_db($conn, "health");
		 
		 if(isset($_POST['submit'])){
           $uploadDir ='uploads/';
		    $fileName=$_FILES['tim']['name'];
		    $tmpName=$_FILES['tim']['tmp_name'];
		    $fileSize=$_FILES['tim']['size'];
		    $fileType=$_FILES['tim']['type'];
		    $filePath=$uploadDir.$fileName;
         $result=move_uploaded_file($tmpName,$filePath);
		 
			 
  $row="insert into certification (date,signature) values('$dates', '$filePath')"or (mysqli_error());
  
     if(mysqli_query($conn,$row)){
	  echo '<script>window.alert("uploaded successfuly")</script>';
	  
	  
	  
	  
  }else{
	  
	  echo'<script>window.alert("upload signature")</script>';
  }
		 }
		 

		 ?>

</body>


</html>