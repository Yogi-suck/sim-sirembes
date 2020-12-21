<?php

include "../../lib/koneksi.php";

$id_kk = $_POST['id_kk'];
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

mysqli_query($koneksi, "UPDATE tbl_kk SET nama_lengkap='$nama_lengkap', nik='$nik', jenis_kelamin='$jenis_kelamin', agama='$agama', nama_orang_tua='$nama_orang_tua', ndi='$ndi', status_hubungan_keluarga='$status_hubungan_keluarga', pekerjaan='$pekerjaan', status_perkawinan='$status_perkawinan', tgl_lahir='$tgl_lahir', pendidikan='$pendidikan', kwarganegaraan='$kwarganegaraan'  WHERE id_kk='$id_kk'");

header("location:main.php");

?>