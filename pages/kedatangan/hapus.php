<?php
include "../../lib/koneksi.php";

$id_datang = $_GET['id_datang'];
mysqli_query($koneksi, "DELETE FROM tbl_datang WHERE id_datang='$id_datang'");

header("location:main.php");

?>