<?php
include 'koneksi.php'; // Pastikan file koneksi.php sudah benar
?>
<!DOCTYPE html>
<html>
<head>
    <title>Daftar Siswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <div class="row">
            <div class="col">
                <h2>Daftar Siswa</h2>
                <a href="tambah.php" class="btn btn-primary mb-3">Tambah Siswa</a>
                <table class="table">
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
                            echo "<tr><td colspan='5' class='text-center'>Tidak ada data siswa</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
