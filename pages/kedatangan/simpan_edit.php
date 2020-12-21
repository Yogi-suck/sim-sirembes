<?php

include "../../lib/koneksi.php";

$id_datang = $_POST['id_datang'];
$nama_penduduk = $_POST['nama_penduduk'];
$alamat_asal = $_POST['alamat_asal'];
$alamat_tujuan = $_POST['alamat_tujuan'];

mysqli_query($koneksi, "UPDATE tbl_datang SET nama_penduduk='$nama_penduduk', alamat_asal='$alamat_asal', alamat_tujuan='$alamat_tujuan' WHERE id_datang='$id_datang'");

header("location:main.php");

?>