<?php
	session_start();
	
	require("database.php");
	
	if(!$conDB){
		die("Tidak terhubung dengan database");
	}
	
	$results = mysqli_query($conDB, "SELECT * FROM simple_akun WHERE username = '".$_POST['username']."' AND password = '".MD5($_POST['password'])."' LIMIT 0,1");
	
	while($row = $results->fetch_array()) {
		$_SESSION['username'] = $row["username"];
		$_SESSION['nama'] = $row["nama"];
		$_SESSION['level'] = $row["level"];
	}
	
	if(isset($_SESSION['username'])){
		header('location: ../home.php');
	}else{
		header('location: ../login.php?err=1');
	}
?>