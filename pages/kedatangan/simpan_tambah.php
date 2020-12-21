<?php

include "../../lib/koneksi.php";

$nama_penduduk = $_POST['nama_penduduk'];
$alamat_asal = $_POST['alamat_asal'];
$alamat_tujuan = $_POST['alamat_tujuan'];

mysqli_query($koneksi, "INSERT INTO tbl_datang (nama_penduduk, alamat_asal, alamat_tujuan) VALUES ('$nama_penduduk', '$alamat_asal','$alamat_tujuan')");

header("location:main.php");

?>