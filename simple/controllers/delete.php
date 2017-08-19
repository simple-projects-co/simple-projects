<?php
	require("database.php");
	
	$esid = mysqli_real_escape_string($conDB,$_GET['id']);
	
	$results = mysqli_query($conDB,"DELETE FROM `simple_data` WHERE id='$esid'");
	
	if($results){
		header("location:../home.php?delete=1");
	}else{
		header("location:../home.php?delete=0");
	}
?>