<?php

include "../../lib/koneksi.php";

$kategori_berita = $_POST['kategori_berita'];
$isi_berita = $_POST['isi_berita'];
$gambar = $_POST['gambar'];

mysqli_query($koneksi, "INSERT INTO tbl_berita (kategori_berita, isi_berita, gambar) VALUES ('$kategori_berita', '$isi_berita','$gambar')");

header("location:main.php");

?>