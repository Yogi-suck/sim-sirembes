<?php
include "../../lib/koneksi.php";

$id_pindah = $_GET['id_pindah'];
mysqli_query($koneksi, "DELETE FROM tbl_pindah WHERE id_pindah='$id_pindah'");

header("location:main.php");

?>