<?php
	session_start();
?>

<html>
	<head>
		<title>Simple Project</title>
		<link rel="icon" type="image/png" href="assets/img/icon.png">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
		<meta name="viewport" content="width=device-width" />
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/css/simple.css">
		<link href="assets/css/animate.min.css" rel="stylesheet"/>
		<link href="assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>
		
	</head>
	
	<body>
		<?php
			if(isset($_GET['success'])){
				if($_GET['success'] == 1){
					echo "<script>alert('Data berhasil ditambahkan.')</script>";
				}else{
					echo "<script>alert('Data gagal ditambahkan.')</script>";
				}
			}if(isset($_GET['delete'])){
				if($_GET['delete'] == 1){
					echo "<script>alert('Data berhasil dihapus.')</script>";
				}else{
					echo "<script>alert('Data gagal dihapus.')</script>";
				}
			}if(isset($_GET['update'])){
				if($_GET['update'] == 1){
					echo "<script>alert('Data berhasil diubah.')</script>";
				}else{
					echo "<script>alert('Data gagal diubah.')</script>";
				}
			}
		?>
		<div class="header-utama">
			<div class="project-name">
				<strong>Simple</strong>Project
				<a href="logout.php" class="logout">Logout</a>
			</div>
		</div>
		<div class="main-content">
			<div class="header-content">
				<a href="home.php?status=1"><strong>ADD DATA</strong></a>
				<p style="float: right; padding-right: 10px;"><strong>Welcome, <?php echo $_SESSION['nama']; ?></strong></p>
			</div>
			<div class="content-view">
				<?php
					if(isset($_GET['status'])){
				?>
					<strong>Form Tambah Data</strong>
					<form action="controllers/create.php" method="POST">
						<table style="font-size: 12px;">
							<tr>
								<td>Nama Kegiatan</td>
								<td> : </td>
								<td><input type="text" name="fnama" required style="margin-bottom: 3px; margin-left: 5px;"></td>
								<td> &nbsp; &nbsp; &nbsp; </td>
								<td>Jumlah Undangan</td>
								<td> : </td>
								<td><input type="number" name="fjumlah" min=1 max=99999 required style="margin-bottom: 3px; margin-left: 5px;"></td>
							</tr>
							<tr>
								<td>Tempat</td>
								<td> : </td>
								<td><input type="text" name="ftempat" required style="margin-bottom: 3px; margin-left: 5px;"></td>
								<td> &nbsp; &nbsp; &nbsp; </td>
								<td>Keterangan</td>
								<td> : </td>
								<td><input type="text" name="fketerangan" required style="margin-bottom: 3px; margin-left: 5px;"></td>
							</tr>
							<tr>
								<td>Tanggal</td>
								<td> : </td>
								<td><input type="text" name="ftanggal" placeholder="dd-mm-yyyy" maxlength="10" required style="margin-bottom: 3px; margin-left: 5px;"></td>
								<td> &nbsp; &nbsp; &nbsp; </td>
								<td>Selesai?</td>
								<td> : </td>
								<td><select name="fisDone" required style="margin-bottom: 3px; margin-left: 5px;">
									<option value="0">Belum</option>
									<option value="1">Sudah</option>
								</select></td>
							</tr>
							<tr>
								<td>Jam</td>
								<td> : </td>
								<td><input type="text" name="fjam" placeholder="hh:mm" maxlength="5" required style="margin-bottom: 3px; margin-left: 5px;"></td>
								<td> &nbsp; &nbsp; &nbsp; </td>
								<td></td>
								<td></td>
								<td valign="middle"><input type="submit" value="Tambah" style="background-color: rgba(40,57,101,.9); color: #fff;"></form> <a href="home.php">&nbsp; Batal</a></td>
							</tr>
						</table><br>				
				<?php
					}if(isset($_GET['ubah'])){
						include("controllers/readById.php");
					}
				?>
				<table width="100%" border="1px">
					<thead style="color: #fff; background-color: rgba(40,57,101,.9);">
						<td align="center" valign="middle">ID</td>
						<td align="center" valign="middle">NAMA</td>
						<td align="center" valign="middle">TEMPAT</td>
						<td align="center" valign="middle">TANGGAL</td>
						<td align="center" valign="middle">JAM</td>
						<td align="center" valign="middle">JUMLAH<br>UNDANGAN</td>
						<td align="center" valign="middle">KETERANGAN</td>
						<td align="center" valign="middle">SELESAI</td>
						<td align="center" valign="middle">ACTION</td>
					</thead>
					<tbody>
						<?php include("controllers/read.php"); ?>
					</tbody>
				</table>
			</div>
		</div>
	</body>
	<script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
</html>