<html>
<head>

<title></title>
</head>
<body>


<form action="" method="POST">
<input type="radio" name="lit" value="Parent"/>Parent
<input type="radio" name="lit" value="T.B.A"/>T.B.A
<input type="radio" name="lit" value="Midwife"/>Midwife
<input type="radio"name="lit" value="Medical attendant"/>Medical attendant
<input type="radio" name="lit" value="others"/>others
<input type="submit" name="submit" value="submit"></button>
<form>
<?php
$conn=mysqli_connect("localhost","root","") or die(mysqli_error());
       mysqli_select_db($conn,"health")or die(mysqli_error()); 
	   
	   
if (isset($_POST['submit'])){
	
     $job=$_POST['lit'];



if($job==''){
	
	echo '<script>window.alert("choose correct one")</script>';
	
	}else {
		
	$tim="insert into informant(informant)VALUES('$job')"or die(mysqli_error());
	
	if(mysqli_query($conn,$tim)){
		
	echo '<script>window.alert("insertation successfull")</script>';
	
      }else{
	
	echo '<script>window.alert("insert not successfull")</script>';
	
}
}
	  
}

mysqli_close($conn);

 

?>
</body>


</html>