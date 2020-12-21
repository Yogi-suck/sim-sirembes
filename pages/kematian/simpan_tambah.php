<?php

include "../../lib/koneksi.php";

$nama_penduduk = $_POST['nama_penduduk'];
$tgl_kematian = $_POST['tgl_kematian'];

mysqli_query($koneksi, "INSERT INTO tbl_kematian (nama_penduduk, tgl_kematian) VALUES ('$nama_penduduk', '$tgl_kematian')");

header("location:main.php");

?>