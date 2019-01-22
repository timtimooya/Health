<?php
$conn = mysqli_connect("localhost","root","") or die (mysqli_error());
$db = mysqli_select_db($conn,"health")or die(mysqli_error()) ;

if(isset($_GET['id'])) {
    $id= $_GET['id'];
	
    $sql=mysqli_query($conn, "DELETE  FROM child WHERE id ='$id'") or die (mysqli_error($conn));
	$sql=mysqli_query($conn, "DELETE  FROM mother WHERE id ='$id'") or die (mysqli_error($conn));
	$sql=mysqli_query($conn, "DELETE  FROM father WHERE id ='$id'") or die (mysqli_error($conn));
    $ql=mysqli_query($conn, "DELETE FROM informant WHERE id='$id'") or die (mysqli_error($conn));
	$sql=mysqli_query($conn, "DELETE FROM certification where id ='$id'") or die (mysqli_error($conn));
	if($sql) {
        echo '<script type="text/javascript">';
		echo 'window.alert("record deleted successifully");';
		echo 'window.location="Deletechildmotherfatherinformant1.php";';
		
		echo '</script>';
    } else {
       echo '<script type="text/javascript">';
	   echo 'window.alert("record not deleted. Please try again");';
	   echo 'window.location="Deletechildmotherfatherinformant1.php";';
	   echo '</script>';
    } 
}
?>