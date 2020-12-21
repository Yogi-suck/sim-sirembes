<?php

include "../../lib/koneksi.php";

$id_kematian = $_POST['id_kematian'];
$nama_penduduk = $_POST['nama_penduduk'];
$tgl_kematian = $_POST['tgl_kematian'];

mysqli_query($koneksi, "UPDATE tbl_kematian SET nama_penduduk='$nama_penduduk', tgl_kematian='$tgl_kematian' WHERE id_kematian='$id_kematian'");

header("location:main.php");

?>