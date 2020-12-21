<?php 

$baseUrl = 'http://localhost/projecttpe/';

$koneksi = mysqli_connect("localhost","root","","tpe");

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL". mysqli_connect_errno();
    exit();
}

?>