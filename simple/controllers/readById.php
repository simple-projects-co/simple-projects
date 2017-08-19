<?php
	require("database.php");
	
	$aid = mysqli_real_escape_string($conDB,$_GET['ubah']);
	
	$results = mysqli_query($conDB,"SELECT * FROM simple_data WHERE id='$aid' LIMIT 0,1");
	
	while($row = $results->fetch_array()) {
		$isdone = $row['isDone'];
?>
	<strong>Form Ubah Data</strong>
	<form action="controllers/update.php" method="POST">
		<table style="font-size: 12px;">
			<input type="hidden" name="fid" value="<?php echo $aid; ?>">
			<tr>
				<td>Nama Kegiatan</td>
				<td> : </td>
				<td><input type="text" name="fnama" style="margin-bottom: 3px; margin-left: 5px;" required value="<?php echo $row['nama']; ?>"></td>
				<td> &nbsp; &nbsp; &nbsp; </td>
				<td>Jumlah Undangan</td>
				<td> : </td>
				<td><input type="number" name="fjumlah" min=1 max=99999 style="margin-bottom: 3px; margin-left: 5px;" required value="<?php echo $row['jumlah']; ?>"></td>
			</tr>
			<tr>
				<td>Tempat</td>
				<td> : </td>
				<td><input type="text" name="ftempat" style="margin-bottom: 3px; margin-left: 5px;" required value="<?php echo $row['tempat']; ?>"></td>
				<td> &nbsp; &nbsp; &nbsp; </td>
				<td>Keterangan</td>
				<td> : </td>
				<td><input type="text" name="fketerangan" style="margin-bottom: 3px; margin-left: 5px;" required value="<?php echo $row['keterangan']; ?>"></td>
			</tr>
			<tr>
				<td>Tanggal</td>
				<td> : </td>
				<td><input type="text" name="ftanggal" placeholder="dd-mm-yyyy" maxlength="10" style="margin-bottom: 3px; margin-left: 5px;" required value="<?php echo $row['tanggal']; ?>"></td>
				<td> &nbsp; &nbsp; &nbsp; </td>
				<td>Selesai?</td>
				<td> : </td>
				<td><select name="fisDone" style="margin-bottom: 3px; margin-left: 5px;" required>
					<option value="0" <?php if($isdone == 0){ echo "selected"; }?>>Belum</option>
					<option value="1" <?php if($isdone == 1){ echo "selected"; }?>>Sudah</option>
				</select></td>
			</tr>
			<tr>
				<td>Jam</td>
				<td> : </td>
				<td><input type="text" name="fjam" placeholder="hh:mm" maxlength="5" style="margin-bottom: 3px; margin-left: 5px;" required value="<?php echo $row['jam']; ?>"></td>
				<td> &nbsp; &nbsp; &nbsp; </td>
				<td></td>
				<td></td>
				<td valign="middle"><input type="submit" value="Ubah" style="background-color: rgba(40,57,101,.9); color: #fff;"></form> <a href="home.php"><button style="margin-bottom: 5px;" disabled>Batal</a></button></td>
			</tr>
		</table><br>					
<?php
	}
?>