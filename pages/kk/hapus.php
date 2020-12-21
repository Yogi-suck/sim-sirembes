<?php
include "../../lib/koneksi.php";

$id_kk = $_GET['id_kk'];
mysqli_query($koneksi, "DELETE FROM tbl_kk WHERE id_kk='$id_kk'");

header("location:main.php");

?>