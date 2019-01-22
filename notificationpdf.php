<?php
if(isset($_GET['id'])) {
    $idc = $_GET['id'];
}
$dates=date('d-M-Y');
require_once('tcpdf/tcpdf.php');	
include ('loginvalidation.php');
$conn=mysqli_connect('localhost','root','','health')	or die(mysqli_error());
$query=mysqli_query($conn,"select * from registration where id='".$_SESSION['ad']."'") or die(mysqli_error());
while($data=mysqli_fetch_array($query)){
$fn=$data['firstname'];	
$md=$data['middlename'];	
$id=$data['id_no'];	
$nrse=$data['nurse_no'];
$path=$data['path'];
$station=$data['station'];	
}
$queryfetch=mysqli_query($conn,"select * from child where id='$idc'") or die(mysqli_error());
$queryfetch1=mysqli_query($conn,"select * from mother where id='$idc'") or die(mysqli_error());
$queryfetch2=mysqli_query($conn,"select * from father where id='$idc'") or die(mysqli_error());
$queryfetch3=mysqli_query($conn,"select * from certification where id='$idc'") or die(mysqli_error());
while($date=mysqli_fetch_array($queryfetch)){
	$serial_no=$date['serial_no'];
 $firstname=$date['Firstname'] ;
 $othername=$date['Othername']; 
 $surname=$date['Surname'] ;
 $dob=$date['Date_of_birth']; 
 $sex=$date['sex'];
 $typeofbirth=$date['Type_of_birth']; 
 $natureofbirth=$date['Nature_of_birth']; 
 $placeofbirth=$date['place_of_birth'] ;
 $district=$date['District'] ;
 $checker=$date['checker'];
 

}
 while($data=mysqli_fetch_array($queryfetch1)){ 
		
		$firstname_m = $data['Firstname'];
	     $middlename_m= $data['Middlename'];
	     $surname_m = $data['Surname'];
		 $age_m = $data['Age']; 
		 $married_m = $data['married'];
         $residence_m = $data['Sub_location'];
         $district_m = $data['District'];
		 $nobornalive_m = $data['bornalive'];
		 $noborndead_m = $data['borndead'];
 }
	while($row=mysqli_fetch_array($queryfetch2)){ 	 
   $firstname_f = $row['Firstname'];
   $othername_f= $row['othername'];
   $surname_f = $row['surname'];
	    
}
while($cert=mysqli_fetch_array($queryfetch3)){
	$sig=$cert['signature'];
}
		if($checker==1){
			
			
			echo'<script type="text/javascript">';
			echo 'window.alert("contact database administrator");';
			echo 'window.location.href="generatetable.php";';
			echo '</script>';
		}

$pdf = new TCPDF();

$pdf->AddPage('P', 'A4');
$html = '<html>
<style>
table{
font-size:12px;
font-family:sans-serif;
color:black;
 background-image:"court.png";
 background-size: cover;

margin-left:150;
margin-top:50;

border-radius:80;
}
fieldset{
width:20;
}
p{


margin-left:150;
}
</style>
<head></head>

<p>
<body><table border="">

<tr><td><u color="white">-----------------------------------------------------------</u><img src="img/kenya.png" class="img" width="70" height="70" margin-left="20"><u color="white">-------------------------------------------------------</u><br><u color="white">*****************************************</u><u><b>GOVERNMENT OF KENYA</b></u><u color="white">**************************************<br>******************************</u><u>ACKNOWLEDGEMENT OF BIRTH NOTIFICATION</u><u color="white">***********************</u>
</td></tr>
<tr>
<br><br><br>
 Date: '.$dates.'<br>
 Serial No: '.$serial_no.'<br>
<td color="black"><hr><br><b>NAME OF CHILD: </b>     <u>'.$firstname.'</u>  <u>'.$othername.'</u>        <u> '.$surname.'</u><br><b>DATE OF BIRTH:</b>'.$dob.'<br><b>SEX:</b>'.$sex.'<br><b>NATURE OF BIRTH:</b>'.$natureofbirth.' <br><b>NAME OF MOTHER:</b>      <u>'.$firstname_m.'</u>      <u>'.$middlename_m.'</u>        <u> '.$surname_m.'</u><br><br><i>I certify that the above information has been notified and recorded</i><br><br> <b>REGISTRATION ASSISTANT FOR:</b>'.$station.'  <b>NAME:</b>'. $fn.'    '.$md .'<br><br>SIGNATURE: <img src="'.$sig.'" class="img" width="50" height="20">
<br><br>

<p>
Note-To obtain a birth certificate,present this notificaton to the District Registrar of Births where this birth occured.



</p>



</td>

</tr>

</table>
</p>
</body>

</html>';

$pdf->writeHTML($html, true, false, true, false, '10','400');

$pdf->Output();	
		$update=mysqli_query($conn, "update child set checker='1' where id=$idc") or die(mysqli_error($conn));
		?>
		