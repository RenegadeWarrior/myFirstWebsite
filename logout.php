<?php
/* Log out process, unsets and destroys session variables */
session_start();
session_unset();
session_destroy(); 
?>
<!DOCTYPE html>
<html>
<head>
  <title>Logout</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
    <nav class="navbar navbar-default navbar-fixed-top navtr">
		<div class="container">
		  	<div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand brand" href="home.html">EwOL</a>
		    </div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav navbar-right">
		        <li><a href="login.html"><h5>Login</h5></a></li>
		        <li class="active"><a href="register.html"><h5>Register</h5></a></li>
		      </ul>
		    </div>
		</div>
	</nav>
	<div style="margin-bottom: 200px;"></div>
		<div class="container login" >
		<br><br>
		<h1 style="text-align: center;" class="head">Thank you for visiting!</h1>
		<a href="home.html" class="btn btn-default" role="button" style="text-align: center;">Home</a>
	</div>
	<br>
	<br>
	<br>
	<!-- <img src="t1.png"> -->
	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script type="text/javascript" src="bootstrap.js"></script>
	<script type="text/javascript" src="login.js"></script>
</body>
</html>
