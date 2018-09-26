<?php 
	$username='root';
	$password='';
	$database='project';
	$database=new mysqli('localhost',$username,$password,$database) or die("unable to connect");
	echo "HELLOOOOO";
 ?>