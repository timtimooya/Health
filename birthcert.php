<?php
if(isset($_GET['id'])) {
    $idc = $_GET['id'];
}
$dates=date('d-M-Y');
require_once('tcpdf/tcpdf.php');	
include ('loginvalidation.php');
$conn=mysqli_connect('localhost','root','','health')	or die(mysqli_error());
$query=mysqli_query($conn,"select * from registra where id='".$_SESSION['ad']."'") or die(mysqli_error());
while($data=mysqli_fetch_array($query)){
$fn=$data['firstname'];	
$surname1=$data['surname'];		
$reg=$data['Registration_no'];
$path=$data['signature'];
$location=$data['location'];	
}
$queryfetch=mysqli_query($conn,"select * from child where id='$idc'") or die(mysqli_error());
$queryfetch1=mysqli_query($conn,"select * from mother where id='$idc'") or die(mysqli_error());
$queryfetch2=mysqli_query($conn,"select * from father where id='$idc'") or die(mysqli_error());
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

<tr><td><u color="white">*****************************************</u><u><b>Republic OF KENYA</b></u> <u color="white">**************************************<br>******************************</u><u>CERTIFICATE OF BIRTH</u> <u color="white">***********************</u>
</td></tr>
<tr>
<br><br><br>
Birth in the <u color="white">*************</u> '.$district.' <u color="white">*************</u>District in the..........................province<br>
<hr>
 <b>Entry no:</b>'.$serial_no.' |<b>where born</b> '.$placeofbirth.' <b>name</b> '.$firstname.' '.$othername.' '.$surname.' <br>
 <hr>
<b>Date of birth:</b>'.$dob.'   <b>sex</b> '.$sex.'  <b>Name and surname of father</b>   '.$firstname_f.'  '.$othername_f.'  '.$surname_f.'<br>
<hr>
<b>Name and maiden/mother:</b>'.$firstname_m.'  '.$middlename_m.'  '.$surname_m.'<br>
<hr>
<b>Name and discription of informant:</b> sgt.Mother<br>
<hr>
<b>Name of Registering officer</b> '.$fn.'  '.$surname1.'    <b>Date of registration</b>  '.$dates.' <br><br>
I  <b>'.$fn.'    '.$surname1.'</b>   District/assistnt Registrar for '.$location.' District, hereby certify that this certificate is compiled from an entry/return of births in the District<br><br>
        SIGNATURE: <img src="'.$path.'" class="img" width="50" height="20"><br>
		
Given under the seal of the Director of civil registration on the '.$dates.'<br><br>
<hr>

Note:A Certificate of Births is not Proof of Kenyan citizenship<br><br>
 <td></td>

</tr>

</table>
</p>
</body>

</html>';

$pdf->writeHTML($html, true, false, true, false, '10','400');

$pdf->Output();	
		
		?>
		