<?php
	require("database.php");
	
	$esid = mysqli_real_escape_string($conDB,$_POST['fid']);
	$esnama = mysqli_real_escape_string($conDB,$_POST['fnama']);
	$estempat = mysqli_real_escape_string($conDB,$_POST['ftempat']);
	$estanggal = mysqli_real_escape_string($conDB,$_POST['ftanggal']);
	$esjam = mysqli_real_escape_string($conDB,$_POST['fjam']);
	$esjumlah = mysqli_real_escape_string($conDB,$_POST['fjumlah']);
	$esketerangan = mysqli_real_escape_string($conDB,$_POST['fketerangan']);
	$esisDone = mysqli_real_escape_string($conDB,$_POST['fisDone']);
	
	$query = "UPDATE `simple_data` SET `nama`='$esnama',`tempat`='$estempat',`tanggal`='$estanggal',`jam`='$esjam',`jumlah`='$esjumlah',`keterangan`='$esketerangan',`isDone`='$esisDone' WHERE id = '$esid'";
	
	$results = mysqli_query($conDB,$query);
	
	if($results){
		header("location:../home.php?update=1");
	}else{
		header("location:../home.php?update=0");
	}
?>