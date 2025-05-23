<?php
include 'koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$umur = $_POST['umur'];
$alamat = $_POST['alamat'];

$query = "UPDATE data_siswa SET nama='$nama', umur=$umur, alamat='$alamat' WHERE id=$id";

if (mysqli_query($koneksi, $query)) {
    header("Location: index.php");
} else {
    echo "Gagal update data: " . mysqli_error($koneksi);
}
?>
