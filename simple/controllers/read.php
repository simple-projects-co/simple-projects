<?php
	require("database.php");
	
	$results = mysqli_query($conDB,"SELECT * FROM simple_data");
	
	while($row = $results->fetch_array()) {
		if($row['isDone'] == 1){
			$isDone = "Sudah";
		}else{
			$isDone = "Belum";
		}
		
		echo '<tr>
			<td align="center" valign="middle">'.$row['id'].'</td>
			<td align="center" valign="middle">'.$row['nama'].'</td>
			<td align="center" valign="middle">'.$row['tempat'].'</td>
			<td align="center" valign="middle">'.$row['tanggal'].'</td>
			<td align="center" valign="middle">'.$row['jam'].'</td>
			<td align="center" valign="middle">'.$row['jumlah'].'</td>
			<td align="center" valign="middle">'.$row['keterangan'].'</td>
			<td align="center" valign="middle">'.$isDone.'</td>
			<td align="center" valign="middle"><a href="home.php?ubah='.$row['id'].'" style="text-decoration: none;">Ubah</a> | <a href="controllers/delete.php?id='.$row['id'].'"  style="text-decoration: none;">Hapus</a></td>
		</tr>';
	}
?>