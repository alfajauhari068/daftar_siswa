<?php
include 'koneksi.php'; // Pastikan file koneksi.php sudah benar
?>
<!DOCTYPE html>
<html>
<head>
    <title>Daftar Siswa</title>
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

    <!-- Content -->
    <div class="content">
        <div class="container mt-4">
            <div class="row">
                <div class="col text-center">
                    <h1 class="header-title">Daftar Siswa</h1>
                    <p class="text-muted">Kelola data siswa dengan mudah menggunakan aplikasi ini.</p>
                    <a href="tambah.php" class="btn btn-primary mb-4">Tambah Siswa</a>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama</th>
                                <th>Umur</th>
                                <th>Alamat</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            // Query untuk mengambil data siswa dari database
                            $query = "SELECT * FROM data_siswa";
                            $result = mysqli_query($koneksi, $query); // Gunakan $conn sebagai variabel koneksi

                            // Periksa apakah ada data
                            if (mysqli_num_rows($result) > 0) {
                                // Loop untuk menampilkan setiap baris data
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<tr>";
                                    echo "<td>" . $row['id'] . "</td>";
                                    echo "<td>" . $row['nama'] . "</td>";
                                    echo "<td>" . $row['umur'] . "</td>";
                                    echo "<td>" . $row['alamat'] . "</td>";
                                    echo "<td>
                                            <a href='edit.php?id=" . $row['id'] . "' class='btn btn-warning btn-sm'>Edit</a>
                                            <a href='hapus.php?id=" . $row['id'] . "' class='btn btn-danger btn-sm' onclick='return confirm(\"Yakin ingin menghapus data ini?\")'>Hapus</a>
                                          </td>";
                                    echo "</tr>";
                                }
                            } else {
                                // Jika tidak ada data
                                echo "<tr><td colspan='5' class='text-center text-muted'>Tidak ada data siswa</td></tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
