<?php
include "../../lib/koneksi.php";

$id_kelahiran = $_GET['id_kelahiran'];
mysqli_query($koneksi, "DELETE FROM tbl_kelahiran WHERE id_kelahiran='$id_kelahiran'");

header("location:main.php");

?>