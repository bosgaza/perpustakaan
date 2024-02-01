<?php
include('koneksi.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Tangkap data dari form
    $kode_buku = $_POST['kode_buku'];
    $judul_buku = $_POST['judul_buku'];
    $nama_peminjam = $_POST['nama_peminjam'];
    $kelas = $_POST['kelas'];
    $jurusan = $_POST['jurusan'];
    $jumlah_buku = $_POST['jumlah_buku'];
    $tanggal_peminjaman = $_POST['tanggal_peminjaman'];
    $tanggal_pengembalian = $_POST['tanggal_pengembalian'];

    // Query untuk melakukan insert data
    $query = "INSERT INTO perpustakaan (kode_buku, judul_buku, nama_peminjam, kelas, jurusan, jumlah_buku, tanggal_peminjaman, tanggal_pengembalian) VALUES ('$kode_buku', '$judul_buku', '$nama_peminjam', '$kelas', '$jurusan', $jumlah_buku, '$tanggal_peminjaman', '$tanggal_pengembalian')";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        echo "Data berhasil disimpan.";
    } else {
        echo "Gagal menyimpan data: " . mysqli_error($koneksi);
    }
}
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

        form {
            display: grid;
            gap: 10px;
        }

        label {
            font-weight: bold;
        }

        input,
        button {
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            background-color: #007BFF;
            color: #fff;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
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
            <form method="POST" action="">
                <h2>Isi Data Buku</h2>

                <label for="kode_buku">Kode Buku:</label>
                <input type="text" name="kode_buku" required>

                <label for="judul_buku">Judul Buku:</label>
                <input type="text" name="judul_buku" required>

                <label for="nama_peminjam">Nama Peminjam:</label>
                <input type="text" name="nama_peminjam" required>

                <label for="kelas">Kelas:</label>
                <input type="text" name="kelas" required>

                <label for="jurusan">Jurusan:</label>
                <input type="text" name="jurusan" required>

                <label for="jumlah_buku">Jumlah Buku:</label>
                <input type="number" name="jumlah_buku" required>

                <label for="tanggal_peminjaman">Tanggal Peminjaman:</label>
                <input type="date" name="tanggal_peminjaman" required>

                <label for="tanggal_pengembalian">Tanggal Pengembalian:</label>
                <input type="date" name="tanggal_pengembalian" required>

                <button type="submit">Simpan Data</button>
            </form>
        </section>
    </main>

    <footer>
        &copy; 2024 Perpustakaan Online
    </footer>
</body>
</html>
