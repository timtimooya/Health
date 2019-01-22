<?php
$conn = mysqli_connect("localhost","root","") or die (mysqli_error());
$db = mysqli_select_db($conn,"health") ;

if(isset($_GET['serial_no'])) {
    $first = $_GET['serial_no'];
    $sql=mysqli_query($conn, "DELETE  FROM child WHERE serial_no ='$first'") or die (mysqli_error());
    
	if($sql) {
        echo '<script>window.alert("record deleted successifully")</script>';
		echo '<script>window.location="delete1.php"</script>';
    } else {
       echo '<script>window.alert("record not deleted. Please try again")</script>';
	   echo '<script>window.location="delete1.php"</script>';
    } 
}

?>