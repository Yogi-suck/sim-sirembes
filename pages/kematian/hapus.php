<?php
include "../../lib/koneksi.php";

$id_kematian = $_GET['id_kematian'];
mysqli_query($koneksi, "DELETE FROM tbl_kematian WHERE id_kematian='$id_kematian'");

header("location:main.php");

?>