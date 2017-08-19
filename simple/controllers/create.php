<?php
	require("database.php");
	
	$esnama = mysqli_real_escape_string($conDB,$_POST['fnama']);
	$estempat = mysqli_real_escape_string($conDB,$_POST['ftempat']);
	$estanggal = mysqli_real_escape_string($conDB,$_POST['ftanggal']);
	$esjam = mysqli_real_escape_string($conDB,$_POST['fjam']);
	$esjumlah = mysqli_real_escape_string($conDB,$_POST['fjumlah']);
	$esketerangan = mysqli_real_escape_string($conDB,$_POST['fketerangan']);
	$esisDone = mysqli_real_escape_string($conDB,$_POST['fisDone']);
	
	$query = "INSERT INTO simple_data(nama,tempat,tanggal,jam,jumlah,keterangan,isDone) VALUES ('$esnama','$estempat','$estanggal','$esjam','$esjumlah','$esketerangan','$esisDone')";
	
	$results = mysqli_query($conDB,$query);
	
	if($results){
		header("location:../home.php?success=1");
	}else{
		header("location:../home.php?success=0");
	}
?>