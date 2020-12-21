<?php

include "../../lib/koneksi.php";

$id_pindah = $_POST['id_pindah'];
$nama_penduduk = $_POST['nama_penduduk'];
$alamat_asal = $_POST['alamat_asal'];
$alamat_tujuan = $_POST['alamat_tujuan'];

mysqli_query($koneksi, "UPDATE tbl_pindah SET nama_penduduk='$nama_penduduk', alamat_asal='$alamat_asal', alamat_tujuan='$alamat_tujuan' WHERE id_pindah='$id_pindah'");

header("location:main.php");

?>