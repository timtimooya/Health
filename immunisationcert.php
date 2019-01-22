<?php
if(isset($_GET['id'])) {
    $idcx = $_GET['id'];
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

$queryfetch=mysqli_query($conn,"select * from child where id='$idcx'") or die(mysqli_error());
$queryfetch1=mysqli_query($conn,"select * from immunisation where id='$idcx'") or die(mysqli_error());


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
}
 while($dati=mysqli_fetch_array($queryfetch1)){ 
		
		$dob1 = $dati['disease_bcg'];
	     $dob2= $dati['disease_polio_1'];
	     $polio2 = $dati['disease_polio_2'];
		 $polio3 = $dati['disease_polio_3']; 
		 $dpt1 = $dati['disease_dpt_1'];
         $dpt2 = $dati['disease_dpt_2'];
         $dpt3 = $dati['disease_dpt_3'];
		 $measles = $dati['disease_measles'];
		 
		 
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

<tr><td color="white">*****************************************<u color="black"><b>Ministry of Health</b></u>********************************************<br>***************************************<u color="black">immunisation card</u>***********************
</td></tr>
<tr>
<br><br><br>

<hr>
 <b>Clinic Name:</b> '.$station.' <br>
 
 <b>Clinic No:</b>...............................................<b>Child no</b> '.$serial_no.' <br>
 
 
<b>BCG</b><u color="white">***********</u><b>Date</b>   '.$dob1.'  <b>Place</b>  '. $placeofbirth  .'<br>
<hr>
<hr>
<b>polio</b><u color="white">*************</u><b>1st dose</b> <b>Date</b> '.$dob2.'  <b>Place</b> '. $station.'<br>
 <U color="white">********************</u><b>2nd dose</b> <b>Date</b> '.$polio2.'  <b>Place</b> '. $station.'<br>
	<u color="white">**********************</u><b>3rd dose</b> <b>Date</b> '.$polio3.'  <b>Place</b> '.$station.'<br>


<hr>
<hr>
<b>DPT</b><u color="white">*****************</u>  <b>1st dose</b> <b>Date</b>  '.$dpt1.'  <b>Place</b> '.$station.'<br>
  <u color="white">***********************</u><b>2nd dose</b> <b>Date</b>  '.$dpt2.'  <b>Place</b> '. $station.'<br>
	<u color="white">*************************</u><b>3rd dose</b> <b>Date</b>  '.$dpt3.'  <b>Place</b> '.$station.'<br>


<hr>

<hr>
<b>measles</b><u color="white">**************</u><b>Date</b>  '.$measles.'  <b>Place</b>  '. $station.'<br>
<hr>

 <td></td>

</tr>

</table>
</p>
</body>

</html>';

$pdf->writeHTML($html, true, false, true, false, '10','400');

$pdf->Output();	
		
		?>
		