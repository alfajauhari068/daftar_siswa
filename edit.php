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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <!-- Page Header -->
    <header class="header bg-primary text-white py-3">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h1 class="h3">Aplikasi Daftar Siswa</h1>
                    <p class="mb-0">Kelola data siswa dengan mudah dan efisien</p>
                </div>
                <div>
                    <a href="tambah.php" class="btn btn-light btn-sm"><i class="fas fa-plus"></i> Tambah Siswa</a>
                    <a href="#" class="btn btn-light btn-sm"><i class="fas fa-info-circle"></i> Bantuan</a>
                </div>
            </div>
        </div>
    </header>

    <!-- Sidebar -->
    <?php include 'sidebar.php'; ?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6 mt-5">
            <div class="card mt-5">
                <div class="card-header bg-primary text-white text-center">
                    <h3>Edit Data Siswa</h3>
                </div>
                <div class="card-body">
                    <form action="proses_edit.php" method="POST">
                        <input type="hidden" name="id" value="<?= $data['id']; ?>">
                        <div class="form-group">
                            <label for="nama">Nama:</label>
                            <input type="text" id="nama" name="nama" class="form-control" value="<?= $data['nama']; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="umur">Umur:</label>
                            <input type="number" id="umur" name="umur" class="form-control" value="<?= $data['umur']; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat:</label>
                            <textarea id="alamat" name="alamat" class="form-control" rows="3" required><?= $data['alamat']; ?></textarea>
                        </div>
                        <div class="d-flex justify-content-between">
                            <button type="submit" class="btn btn-success">Simpan Perubahan</button>
                            <a href="index.php" class="btn btn-secondary">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
