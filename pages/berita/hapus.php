<?php
include "../../lib/koneksi.php";

$id_berita = $_GET['id_berita'];
mysqli_query($koneksi, "DELETE FROM tbl_berita WHERE id_berita='$id_berita'");

header("location:main.php");

?>