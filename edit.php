<?php
include 'koneksi.php';

$id = $_GET['id'];
$query = "SELECT * FROM data_siswa WHERE id = $id";
$result = mysqli_query($koneksi, $query);
$data = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Siswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-4">
    <h2>Edit Siswa</h2>
    <form action="proses_edit.php" method="POST">
        <input type="hidden" name="id" value="<?= $data['id']; ?>">
        <div class="form-group">
            <label>Nama:</label>
            <input type="text" name="nama" class="form-control" value="<?= $data['nama']; ?>" required>
        </div>
        <div class="form-group">
            <label>Umur:</label>
            <input type="number" name="umur" class="form-control" value="<?= $data['umur']; ?>" required>
        </div>
        <div class="form-group">
            <label>Alamat:</label>
            <textarea name="alamat" class="form-control" required><?= $data['alamat']; ?></textarea>
        </div>
        <button type="submit" class="btn btn-success">Simpan Perubahan</button>
        <a href="index.php" class="btn btn-secondary">Kembali</a>
    </form>
</div>
</body>
</html>
