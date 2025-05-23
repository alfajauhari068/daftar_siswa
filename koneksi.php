<?php
$host = 'localhost'; // sesuaikan dengan host MySQL Anda
$user = 'root'; // sesuaikan dengan username MySQL Anda
$pass = ''; // sesuaikan dengan password MySQL Anda
$dbname = 'siswa_baru'; // sesuaikan dengan nama database Anda

// Buat koneksi
$koneksi = new mysqli($host, $user, $pass, $dbname);

// Periksa koneksi
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}
?>
