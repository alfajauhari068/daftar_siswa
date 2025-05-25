<?php
include 'koneksi.php'; // Pastikan file koneksi.php sudah benar
?>
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Siswa Baru</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <!-- Page Header -->
    <header class="header bg-primary text-white py-3 mb-5">
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
                        <h3>Tambah Siswa Baru</h3>
                    </div>
                    <div class="card-body">
                        <form action="proses_tambah.php" method="POST">
                            <div class="form-group">
                                <label for="nama">Nama:</label>
                                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama siswa" required>
                            </div>
                            <div class="form-group">
                                <label for="umur">Umur:</label>
                                <input type="number" class="form-control" id="umur" name="umur" placeholder="Masukkan umur siswa" required>
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat:</label>
                                <textarea class="form-control" id="alamat" name="alamat" rows="3" placeholder="Masukkan alamat siswa" required></textarea>
                            </div>
                            <div class="d-flex justify-content-between">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                <a href="index.php" class="btn btn-secondary">Batal</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
