<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bimbel_db";

// Membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Mengecek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
