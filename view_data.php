<?php
include('koneksi.php');

// Query untuk menampilkan data dari tabel
$query = "SELECT * FROM perpustakaan";
$result = mysqli_query($koneksi, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
         body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 1em 0;
        }

        nav {
            background-color: #444;
            padding: 0.5em 0;
        }

        nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
            text-align: center;
        }

        nav ul li {
            display: inline;
            margin-right: 20px;
        }

        nav ul li a {
            text-decoration: none;
            color: #fff;
            font-weight: bold;
        }

        main {
            max-width: 800px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #007BFF;
            color: #fff;
        }

        tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        a.button {
            display: inline-block;
            padding: 10px 20px;
            text-decoration: none;
            background-color: #28a745;
            color: #fff;
            border-radius: 5px;
        }

        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 1em 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <header>
        <h1>Perpustakaan Online</h1>
    </header>

    <nav>
        <ul>
            <li><a href="view_data.php">Lihat Data</a></li>
            <li><a href="input_data.php">Isi Data</a></li>
        </ul>
    </nav>

    <main>
        <section>
            <!-- Tampilan hasil data -->
            <table border="1">
                <thead>
                    <tr>
                        <th>Kode Buku</th>
                        <th>Judul Buku</th>
                        <th>Nama Peminjam</th>
                        <th>Kelas</th>
                        <th>Jurusan</th>
                        <th>Jumlah Buku</th>
                        <th>Tanggal Peminjaman</th>
                        <th>Tanggal Pengembalian</th>
                        <!-- Tambahkan kolom lainnya sesuai dengan struktur tabel Anda -->
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $row['kode_buku'] . "</td>";
                        echo "<td>" . $row['judul_buku'] . "</td>";
                        echo "<td>" . $row['nama_peminjam'] . "</td>";
                        echo "<td>" . $row['kelas'] . "</td>";
                        echo "<td>" . $row['jurusan'] . "</td>";
                        echo "<td>" . $row['jumlah_buku'] . "</td>";
                        echo "<td>" . $row['tanggal_peminjaman'] . "</td>";
                        echo "<td>" . $row['tanggal_pengembalian'] . "</td>";
                        // Tambahkan kolom lainnya sesuai dengan struktur tabel Anda
                        echo "<td><a href='edit_data.php?kode_buku=" . $row['kode_buku'] . "'>Edit</a> | <a href='hapus_data.php?kode_buku=" . $row['kode_buku'] . "'>Hapus</a></td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>

            <!-- Tombol untuk mengisi data baru -->
            <a href="input_data.php">Isi Data Baru</a>
        </section>
    </main>

    <footer>
        &copy; 2024 Perpustakaan Online
    </footer>
</body>
</html>