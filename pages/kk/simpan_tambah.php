<?php

include "../../lib/koneksi.php";

$nama_lengkap = $_POST['nama_lengkap'];
$nik = $_POST['nik'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$agama = $_POST['agama'];
$nama_orang_tua = $_POST['nama_orang_tua'];
$ndi = $_POST['ndi'];
$status_hubungan_keluarga = $_POST['status_hubungan_keluarga'];
$pekerjaan = $_POST['pekerjaan'];
$status_perkawinan = $_POST['status_perkawinan'];
$tgl_lahir = $_POST['tgl_lahir'];
$pendidikan = $_POST['pendidikan'];
$kwarganegaraan = $_POST['kwarganegaraan'];

mysqli_query($koneksi, "INSERT INTO tbl_kk (nama_lengkap, nik, jenis_kelamin, agama, nama_orang_tua, ndi, status_hubungan_keluarga, pekerjaan, status_perkawinan, tgl_lahir, pendidikan, kwarganegaraan) VALUES ('$nama_lengkap', '$nik','$jenis_kelamin','$agama','$nama_orang_tua','$ndi','$status_hubungan_keluarga','$pekerjaan','$status_perkawinan','$tgl_lahir','$pendidikan','$kwarganegaraan')");

header("location:main.php");

?>