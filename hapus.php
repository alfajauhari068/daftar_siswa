<?php
$id = $_GET['id'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Konfirmasi Hapus</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h3>Apakah Anda yakin ingin menghapus data ini?</h3>
    <a href="proses_hapus.php?id=<?= $id ?>" class="btn btn-danger">Ya, Hapus</a>
    <a href="index.php" class="btn btn-secondary">Batal</a>
</div>
</body>
</html>
