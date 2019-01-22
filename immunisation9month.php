<html>

<head>
<title></title>
</head>

<body>
<form action="" method ="POST">
<h4>TYPE OF IMMUNISATION</h4>
<h5> immunisation on the 9th month of birth</h5>
Measles   <label>Date</label> <input type="date" name="bcg" required>
           <label>place</label> <input type="text" name="measles"placeholder="input a place" required><br><br>

	   <input type="button " value="submit" name="submit">
		   


</form>
<?php

$conn= mysqli_connect('localhost','root','')or die(mysqli_error($conn))
         mysqli_select_db($conn,health) or die(mysqli_error());

		 if (isset($_POST['submit'])){
	        $bcg=$_POST['bcg'];
	         $measles=$_POST['measles'];
	
	mysqli_query("insert into immunisation()values()")
	
	
	
	
	
	
	
}

?>
</body>


</html>