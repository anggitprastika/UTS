<?php
error_reporting("E_ALL & ~E_NOTICE");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
  	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>UTS Pemrograman Web 2 - Anggit Prastika Setiany</title>
	<meta http-equiv="X-UA-Compatible" content="text/html" />
</head>
<style type="text/css">
	body {
    	background: #daeff2;
    	background-repeat: no-repeat;
    	font-family: "Calibri", sans-serif;
  	}
	legend {
        color: white;
        padding: 5px;
        background: #205479;
        border-color: #0293a4;
        border-radius: 5px;
    }
    fieldset {
        max-width: 600px;
        border-radius: 10px;
        border-color: #2481ba;
        background: #2d9adb;
    }
   input, select {
        border: none;
        border-radius: 5px;
        height: 20px;
    }
    input:hover {
    	background: #00ffff;
	}
	button {
        cursor: pointer;
        color: black;
        background: #f0ad4e;
        width: 100px;
        height: 25px;
        border-radius: 5px;
        border: none;
    }
    button:hover {
        background: #ffbe68;
    }
</style>
<body>
	<div align="center">
	<?php
		$nama = trim($_POST['nama']);
		$nim = trim($_POST['nim']);
		$nama_wilayah = trim($_POST['nama_wilayah']);
		$positif = trim($_POST['positif']);
		$rawat = trim($_POST['rawat']);
		$sembuh = trim($_POST['sembuh']);
		$meninggal = trim($_POST['meninggal']);
	?>
	<center><h3>UTS Pemrograman Web 2</h3></center>

	<form method="post" action="">
		<fieldset>
			<legend>Input Data Pasien:</legend>
			<table align="left">
				<tr>
					<td>Nama Wilayah</td>
					<td>:</td>
					<td>
						<select class="option" name="nama_wilayah">
						<option>Nama Wilayah</option>
						<option value="DKI Jakarta">DKI Jakarta</option>
						<option value="Jawa Barat">Jawa Barat</option>
						<option value="Banten">Banten</option>
						<option value="Jawa Tengah">Jawa Tengah</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Jumlah Positif</td>
					<td>:</td>
					<td><input type="text" name="positif" placeholder="Pasien Positif"></td>
				</tr>
				<tr>
					<td>Jumlah Dirawat</td>
					<td>:</td>
					<td><input type="text" name="rawat" placeholder="Pasien Dirawat"></td>
				</tr>
				<tr>
					<td>Jumlah Sembuh</td>
					<td>:</td>
					<td><input type="text" name="sembuh" placeholder="Pasien Sembuh"></td>
				</tr>
				<tr>
					<td>Jumlah Meninggal</td>
					<td>:</td>
					<td><input type="text" name="meninggal" placeholder="Pasien Meninggal"></td>
				</tr>
				<tr>
					<td>Nama Operator</td>
					<td>:</td>
					<td><input type="text" name="nama" placeholder="Nama Operator"></td>
				</tr>
				<tr>
					<td>NIM Mahasiswa</td>
					<td>:</td>
					<td><input type="text" name="nim" placeholder="NIM Mahasiswa"></td>
					<td><button type="submit" value="Simpan">Simpan Data</button></td>
				</tr>
			</table>
		</fieldset>
	</form>
	
	<hr>

	<form action="">
		<fieldset>
			<legend>Output Data Pasien:</legend>
			<center>
			<h3>Data Pemantaun Covid-19 Wilayah <?php echo $nama_wilayah?></h3>
			<?php 
				$waktuakses = date('d-F-Y h:i:s A');
				echo "<h3>Per $waktuakses</h3>";
			?>
			<h3><?php echo $nama ?> - <?php echo $nim ?></h3>
				<font color="#000000">
				<table border="1" align="center">
					<tr bgcolor="#AAEFF4">
						<td width="200px"><center><b>Positif</b></center></td>
						<td width="200px"><center><b>Dirawat</b></center></td>
						<td width="200px"><center><b>Sembuh</b></center></td>
						<td width="200px"><center><b>Meninggal</b></center></td>
					</tr>
					<tr bgcolor="#FFFFFF">
						<td><center><b><?php echo $positif ?></b></center></td>
						<td><center><b><?php echo $rawat ?></b></center></td>
						<td><center><b><?php echo $sembuh ?></b></center></td>
						<td><center><b><?php echo $meninggal ?></b></center></td>
					</tr>
				</table>
				</font>
			</center>
		</fieldset>
	</form>
	</div>
</body>
</html>