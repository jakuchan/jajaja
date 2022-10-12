<?php
include 'koneksi.php';

$id     = $_POST['id'];
$nis    = $_POST['nis']; 
$nama   = $_POST['nama'];
$tgl    = $_POST['tgl'];
$kelas  = $_POST['kelas'];
$jurusan= $_POST['jurusan'];
$alamat = $_POST['alamat'];
$email  = $_POST['email'];

mysqli_query($koneksi, "update data_siswa set nis='$nis', nama_lengkap='$nama', tgl_lahir='$tgl', kelas='$kelas', jurusan='$jurusan', alamat='$alamat', email='$email' where id='$id'");

header("location: list.php");

?>