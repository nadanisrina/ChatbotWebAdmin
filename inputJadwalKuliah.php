<!DOCTYPE html>
<html>
<head>
	<title>Membuat CRUD Dengan PHP Dan MySQL - Menampilkan data dari database</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="judul">		
		<h1>Membuat CRUD Dengan PHP Dan MySQL</h1>
		<h2>Menampilkan data dari database</h2>
		<h3>www.malasngoding.com</h3>
	</div>
	
	<br/>

	<a href="jadwal_kuliah.php">Lihat Semua Data</a>

	<br/>
	<h3>Input data baru</h3>
	<form action="input-aksi.php" method="post">		
		<table>
		<tr>
				<td>Id Matkul</td>
				<td><input type="text" name="id_matkul"></td>					
			</tr>
			<tr>
				<td>Tanggal jadwal kuliah</td>
				<td><input type="text" name="tanggal_jadkul"></td>					
			</tr>	
			<tr>
				<td>Hari</td>
				<td><input type="text" name="hari"></td>					
			</tr>	
			<tr>
				<td>Kelas</td>
				<td><input type="text" name="kelas"></td>					
			</tr>	
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>					
			</tr>				
		</table>
	</form>
</body>
</html>