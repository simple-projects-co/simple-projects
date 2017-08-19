<?php
	$host = "localhost";
	$user = "root";
	$password = "";
	$database = "simple";
	
	$conDB = mysqli_connect($host,$user,$password,$database);
	
	if(!$conDB){
		die("Tidak terhubung dengan database");
	}
?>