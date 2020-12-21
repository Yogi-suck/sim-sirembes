<?php

include "../../lib/koneksi.php";

$id_penduduk = $_POST['id_penduduk'];
$nama_penduduk = $_POST['nama_penduduk'];
$alamat_penduduk = $_POST['alamat_penduduk'];
$nomer_hp = $_POST['nomer_hp'];

mysqli_query($koneksi, "UPDATE tbl_penduduk SET nama_penduduk='$nama_penduduk', alamat_penduduk='$alamat_penduduk', nomer_hp='$nomer_hp' WHERE id_penduduk='$id_penduduk'");

header("location:main.php");

?>