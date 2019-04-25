
<?php
include 'config.php';
include 'index.php';
?>
<!DOCTYPE html>
<html>

<head>
	<center>
		<h3>Tambah Data Pelatih</h3>	
		<link rel="stylesheet" type="text/css" href="table.css">
</head>
<body>	
	
	<form action="pelatih_tambah_proses.php" method="post">
		<table cellpadding="3" cellspacing="0">
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama" required></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td><input type="text" name="alamat" required></td>
			</tr>
			<tr>
				<td>Tempat Lahir</td>
				<td>:</td>
				<td><input type="text" name="tempat_lahir" required></td>
			</tr>
			<tr>
				<td>Tanggal Lahir</td>
				<td>:</td>
				<td><input type="date" name="tanggal_lahir" required></td>
			</tr>
			<tr>
				<td>Pendidikan</td>
				<td>:</td>
				<td>
					<select name="kelas" required>
						<option value="">Pendidikan Terakhir</option>
						<option value="SD">SD</option>
						<option value="SMP">SMP</option>
						<option value="SMA">SMA</option>
						<option value="D3">D3</option>
						<option value="S1">S1</option>
						<option value="S2">S2</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>No. Hp</td>
				<td>:</td>
				<td><input type="int" name="no_hp" required></td>
			</tr>
			
			<tr>
				<td>&nbsp;</td>
				<td></td>
				<td><input type="submit" name="tambah" value="Tambah"></td>
			</tr>
		</table>
	</form>
	</center>
</body>
</html>