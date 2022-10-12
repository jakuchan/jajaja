<?php

$koneksi = mysqli_connect("localhost", "root", "", "biodata_meong.com");

if (!$koneksi){
    die ("Gagal Terhubung ke database :". mysqli_connect_error());
}

?>