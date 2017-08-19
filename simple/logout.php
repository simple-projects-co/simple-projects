<?php
	session_start();
	
	$_SESSION['username'] = '';
	$_SESSION['nama'] = '';
	$_SESSION['level'] = '';
	
	session_destroy();
	
	header("location: index.php");
?>