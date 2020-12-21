<?php

include "../../lib/koneksi.php";

$id_kelahiran = $_POST['id_kelahiran'];
$nama_penduduk = $_POST['nama_penduduk'];
$tgl_lahir = $_POST['tgl_lahir'];

mysqli_query($koneksi, "UPDATE tbl_kelahiran SET nama_penduduk='$nama_penduduk', tgl_lahir='$tgl_lahir' WHERE id_kelahiran='$id_kelahiran'");

header("location:main.php");

?>