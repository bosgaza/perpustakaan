<?php
$host = "127.0.0.1";
$username = "root";
$password = "";
$database = "jb4perpustakaan"; // Ganti dengan nama database Anda

$koneksi = mysqli_connect($host, $username, $password, $database);

// Check koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>