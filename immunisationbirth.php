<html>

<head>
<title></title>
</head>

<body>
<form action="" method ="POST">
     <h4>TYPE OF IMMUNISATION</h4>
       <h5> immunisation at birth</h5>
    BCG       <label>Date</label> <input type="date" name="bcg" required>
               <label>place</label> <input type="text" name="bcgbirth"placeholder="input a place" required><br><br>

    POLIO     	   <label>Date</label> <input type="date" name="bcgx" required>
                   <label>place</label> <input typE="text" name="bcgbirthx"placeholder="input a place" required>	   
		   
		     <input type="button" value="submit" name="submit">


</form>

<?php

$conn=mysqli_connect ('localhost','root','')or die(mysqli_error());
       mysqli_select_db($conn,'health')or die(mysqli_error());
      
	  if (isset($_POST['submit'])){
		  $bcg=$_POST['bcg'];
		  $bcgbirth=$_POST['bcgbirth'];
		  $bcgx=$_POST['bcgx'];
		  $bcgxbirthx=$_POST['bcgbirthx'];
		  
		  
		  $sql=mysqli_query("insert into disease_bcg (date,place)values('$bcg', '$bcgbirth' )")or die(mysqli_error());
		  $sql=mysqli_query("insert into disease_polio (date,place)values( '$bcg', '$bcgbirth' )")or die(mysqli_error());
		  
		  if ($conn,$sql){
			  
			  echo '<script>window.alert("successfully entered the information;")</script>';
			  
			  
		  }else{
			  
			  
			  echo '<script>window.alert(please try again)</script>';
		  }
	  }

?>



</body>


</html>