<?php
session_start();
$conn=mysqli_connect("localhost","root","","health") or die(mysqli_error());
$querycreate=mysqli_query($conn,"create table if not exists admin(userid int(255) auto_increment primary key,username varchar(255) not null, password varchar(255) not null)") or die(mysqli_error($conn));
$quert=mysqli_query($conn,"select * from admin") or die(mysqli_error());
$roq=mysqli_num_rows($quert);
if($roq>0){

if(isset($_POST['submit'])){
	$drop=$_POST['mykist'];
	if($drop=='1'){
	$user=$_POST['username'];
	$pass=$_POST['password'];
	$queryadmin=mysqli_query($conn,"select * from admin where username='$user' and password='$pass'") or die(mysqli_error());
	$rowad=mysqli_num_rows($queryadmin);
	if($rowad>0){
		while($data=mysqli_fetch_array($queryadmin)){
			$_SESSION['ad']=$data['userid'];
			header('location:dashboardadmin.php');
		}
		
	}else{
		echo'<script>window.alert("Wrong username or password")</script>';
		
	}
	
	}elseif($drop=='2'){
		$usera=$_POST['username'];
	    $passa=$_POST['password'];
	$queryuser=mysqli_query($conn,"select * from registration where username='$usera' and password='$passa'") or die(mysqli_error());
	$rowrx=mysqli_num_rows($queryuser);
	if($rowrx>0){
		while($datad=mysqli_fetch_array($queryuser)){
			$_SESSION['ad']=$datad['id'];
			$upds=$datad['upd'];
			if ($upds!=1){
				
				
				header('location:oldpassword.php');
			}else{
			header('location:dashboard.php');
		}
		}
	}else{
		echo'<script>window.alert("Wrong username or password")</script>';
		
	}
		
		
	}else if ($drop=='3'){ 
	$userr=$_POST['username'];
	$passr=$_POST['password'];
	$queryregistra=mysqli_query($conn,"select * from registra where username='$userr' and password='$passr'") or die(mysqli_error());
	$rowr=mysqli_num_rows($queryregistra);
	if($rowr>0){
		while($registra=mysqli_fetch_array($queryregistra)){
			$_SESSION['ad']=$registra['id'];
			header('location:navi_registra.php');
			}
	
	
	
}


}
}
}else{
	  $queryins=mysqli_query($conn,"insert into admin(username,password) values('admin','admin2018')") or die(mysqli_error($conn));
}
?>