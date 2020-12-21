<?php

include "../../lib/koneksi.php";

$id_berita = $_POST['id_berita'];
$kategori_berita = $_POST['kategori_berita'];
$isi_berita = $_POST['isi_berita'];
$gambar = $_POST['gambar'];

mysqli_query($koneksi, "UPDATE tbl_berita SET kategori_berita='$kategori_berita', isi_berita='$isi_berita', gambar='$gambar' WHERE id_berita='$id_berita'");

header("location:main.php");

?>