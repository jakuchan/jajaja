<?php
require 'koneksi.php';

$nis = $_POST['nis'];
$nama = $_POST['nama'];
$tgl = $_POST['tgl'];
$kelas = $_POST['kelas'];
$jurusan = $_POST['jurusan'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];

mysqli_query($koneksi, "insert into data_siswa values('', '$nis', '$nama', '$tgl', '$kelas', '$jurusan', '$email', '$alamat')");

header("location:list.php");
?>  