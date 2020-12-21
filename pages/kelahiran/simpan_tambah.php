<?php

include "../../lib/koneksi.php";

$nama_penduduk = $_POST['nama_penduduk'];
$tgl_lahir = $_POST['tgl_lahir'];

mysqli_query($koneksi, "INSERT INTO tbl_kelahiran (nama_penduduk, tgl_lahir) VALUES ('$nama_penduduk', '$tgl_lahir')");

header("location:main.php");

?>