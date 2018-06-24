<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$matkul = $_POST['matkul'];
$tanggal_jadkul = $_POST['tanggal_jadkul'];
$kelas = $_POST['kelas'];
$hari = $_POST['hari'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into matkul values('','$matkul')");
mysqli_query($koneksi,"insert into jadwal_kuliah values('','','$tanggal_jadkul','$kelas','$hari')");
 
// mengalihkan halaman kembali ke index.php
header("location:index2.php");
 
?>
