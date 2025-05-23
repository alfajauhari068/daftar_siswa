<?php
include 'koneksi.php';

$id = $_GET['id'];

$query = "DELETE FROM data_siswa WHERE id = $id";

if (mysqli_query($koneksi, $query)) {
    header("Location: index.php");
} else {
    echo "Gagal menghapus data: " . mysqli_error($koneksi);
}
?>
