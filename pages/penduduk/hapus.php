<?php
include "../../lib/koneksi.php";

$id_penduduk = $_GET['id_penduduk'];
mysqli_query($koneksi, "DELETE FROM tbl_penduduk WHERE id_penduduk='$id_penduduk'");

header("location:main.php");

?>