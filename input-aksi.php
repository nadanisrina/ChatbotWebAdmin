<?php 
include 'koneksi.php';
//$id_jadkul = $_POST['id_jadkul'];
$id_matkul = $_POST['id_matkul'];
$tanggal_jadkul = $_POST['tanggal_jadkul'];
$hari = $_POST['hari'];
$kelas = $_POST['kelas'];
 
$input=mysql_query("INSERT INTO jadwal_kuliah VALUES('','$id_matkul',$tanggal_jadkul','$kelas','$hari')");
echo $input;
return;
//header("location:jadwal_kuliah.php?pesan=input");
//pesan=input;
 if ($input) {
	echo "<script> alert('Data berhasil Di Tambah') </script>";
	echo "<meta http-equiv='refresh' content='0; url=jadwal_kuliah.php'>";	
}
else {
	echo "<script> alert('Data Gagal Di Tambah') </script>";
	echo "<meta http-equiv='refresh' content='0; url=jadwal_kuliah.php'>";
}
?>

