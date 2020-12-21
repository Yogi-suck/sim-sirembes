<?php

include "../../lib/koneksi.php";

$nama_penduduk = $_POST['nama_penduduk'];
$alamat_penduduk = $_POST['alamat_penduduk'];
$nomer_hp = $_POST['nomer_hp'];

mysqli_query($koneksi, "INSERT INTO tbl_penduduk (nama_penduduk, alamat_penduduk, nomer_hp) VALUES ('$nama_penduduk', '$alamat_penduduk', '$nomer_hp')");

header("location:main.php");

?>