<?php
 $conn= mysqli_connect("localhost", "root", "","health" )or die (mysqli_error());
      

if (isset($_POST['package'])) {
    $qry=mysqli_query($conn,"select * from place_district where place='".$_POST['package']."'") or die (mysqli_error()); 
    if (mysqli_num_rows($qry)>0) {
        while ($resi = mysqli_fetch_array($qry)) {
            echo $resi['district'];
        }
    }
}
die();
?>