<?php
include 'koneksi.php';

$id_jadkul = $_POST['id_jadkul'];
$id_matkul = $_POST['id_matkul'];
$tanggal_jadkul = $_POST['tanggal_jadkul'];
$kelas = $_POST['kelas'];
$hari = $_POST['hari'];

 $input = mysql_query("UPDATE jadwal_kuliah SET id_jadkul='$id_jadkul', id_matkul='$id_matkul',
											tanggal_jadkul='$tanggal_jadkul',
											kelas='$kelas',hari='$hari' WHERE id_jadkul='$id_jadkul'
											");
 
if ($input) {
	echo "<script> alert('Data berhasil Di Update') </script>";
	echo "<meta http-equiv='refresh' content='0; url=jadwal_kuliah.php'>";	
}
else {
	echo "<script> alert('Data Gagal Di Update') </script>";
	echo "<meta http-equiv='refresh' content='0; url=jadwal_kuliah.php'>";
}

?>
