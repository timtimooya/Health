<html>
	<style>
		.info-message{
			color: blue;
		}
	
	</style>
<?php
    
    include('loginvalidation.php');
 ?>
    <head><title>Login Form</title>
<script src="dashboard/js/tinymce/tinymce.min.js"></script>
    <script src="dashboard/js/tinymce/script.js"></script>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/cms-home.css">
	<link rel="stylesheet" type="text/css" href="css/material-icons.css">
	<link rel="stylesheet" type="text/css" href="css/style.css" media="all" />
    <link rel="stylesheet" type="text/css" href="css/demo.css" media="all" />
    <link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
</head>
     <body style="background:ghostwhite">
	 <div class="container-fluid">

   <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><img src="img/kenya.png" width="30%">Ministry of Health</a>
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
      <span class="navbar-toggler-icon"></span>
  </button>
  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="healthhomepage.php">Menu</a>
    </li>
    

    </ul>
</nav>
<div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">

    <div class="login-box">
		<div class="panel">
        <img src="img/pic.jpeg" class="avatar" width="50px" >
           <h5 class="card-title text-center">Sign In</h5>
      </div>
        <form action="" method="post" class="form-signin" id="login">
		<div class="form-group">
		<form style="background:transparent">
			<p style=margin-left:180px> <label>Login as:</label>
             <select id = "myList" name="mykist" class="form-control">
               <option value = "1" class="val"><label>Admin</label></option>
               <option value = "2" class="val"><label>Nurse</label></option>
			   <option value = "3" class="val"><label>registra</label></option>
             </select></p><br>
			 <div class="form-group">
        <label>Username</label>
        <input type="text" name="username" class="form-control" placeholder="Enter username" required>
		</div>
            
			<div class="form-group">
			<label>Password</label>
            <input type="password" name="password" class="form-control"placeholder="Enter password" required><br>
           </div>
			 <button type="submit" name="submit" class="btn btn-primary">Login</button>
            <a href="#" >Forgot password?</a><br><br>
	
			
        </form>
		</div>
		</div>
    </div></body>
  


</html>