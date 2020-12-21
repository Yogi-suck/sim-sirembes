<?php
include "lib/koneksi.php";

$username = $_POST['username'];
$password = $_POST['password'];

$sql = mysqli_query($koneksi, "SELECT * FROM tbl_user WHERE username = '$username' AND password = '$password'");

$data = mysqli_fetch_array($sql);

$jumlah = mysqli_num_rows($sql);

if ($jumlah==1){
	session_start();
	$_SESSION['username'] = $data['username'];
	$_SESSION['level'] = $data['level'];

	header('location:dashboard.php');
}else{
	header('location:index.php');
}