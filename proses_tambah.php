<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    $umur = $_POST['umur'];
    $alamat = $_POST['alamat'];

    // Query untuk menyimpan data ke database
    $query = "INSERT INTO data_siswa (nama, umur, alamat) VALUES ('$nama', '$umur', '$alamat')";

    if (mysqli_query($koneksi, $query)) {
        // Redirect kembali ke halaman utama jika berhasil
        header('Location: index.php');
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }
}
?>