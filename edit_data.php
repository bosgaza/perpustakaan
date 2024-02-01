<?php
include('koneksi.php');

// Ambil kode buku dari parameter URL
$kode_buku = $_GET['kode_buku'];

// Jika formulir disubmit
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Tangkap data dari form
    $judul_buku = $_POST['judul_buku'];
    $nama_peminjam = $_POST['nama_peminjam'];
    $kelas = $_POST['kelas'];
    $jurusan = $_POST['jurusan'];
    $jumlah_buku = $_POST['jumlah_buku'];
    $tanggal_peminjaman = $_POST['tanggal_peminjaman'];
    $tanggal_pengembalian = $_POST['tanggal_pengembalian'];

    // Query untuk melakukan update data
    $update_query = "UPDATE perpustakaan SET judul_buku = '$judul_buku', nama_peminjam = '$nama_peminjam', kelas = '$kelas', jurusan = '$jurusan', jumlah_buku = $jumlah_buku, tanggal_peminjaman = '$tanggal_peminjaman', tanggal_pengembalian = '$tanggal_pengembalian' WHERE kode_buku = '$kode_buku'";
    $update_result = mysqli_query($koneksi, $update_query);

    if ($update_result) {
        echo "Data berhasil diupdate.";
    } else {
        echo "Gagal update data: " . mysqli_error($koneksi);
    }
}

// Ambil data buku berdasarkan kode buku
$query = "SELECT * FROM perpustakaan WHERE kode_buku = '$kode_buku'";
$result = mysqli_query($koneksi, $query);
$data = mysqli_fetch_assoc($result);
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
                <h2>Edit Data Buku</h2>

                <label for="kode_buku">Kode Buku:</label>
                <input type="text" name="kode_buku" value="<?php echo $data['kode_buku']; ?>" required readonly>

                <label for="judul_buku">Judul Buku:</label>
                <input type="text" name="judul_buku" value="<?php echo $data['judul_buku']; ?>" required>

                <label for="nama_peminjam">Nama Peminjam:</label>
                <input type="text" name="nama_peminjam" value="<?php echo $data['nama_peminjam']; ?>" required>

                <label for="kelas">Kelas:</label>
                <input type="text" name="kelas" value="<?php echo $data['kelas']; ?>" required>

                <label for="jurusan">Jurusan:</label>
                <input type="text" name="jurusan" value="<?php echo $data['jurusan']; ?>" required>

                <label for="jumlah_buku">Jumlah Buku:</label>
                <input type="number" name="jumlah_buku" value="<?php echo $data['jumlah_buku']; ?>" required>

                <label for="tanggal_peminjaman">Tanggal Peminjaman:</label>
                <input type="date" name="tanggal_peminjaman" value="<?php echo $data['tanggal_peminjaman']; ?>" required>

                <label for="tanggal_pengembalian">Tanggal Pengembalian:</label>
                <input type="date" name="tanggal_pengembalian" value="<?php echo $data['tanggal_pengembalian']; ?>" required>

                <button type="submit">Update Data</button>
            </form>
        </section>
    </main>

    <footer>
        &copy; 2024 Perpustakaan Online
    </footer>
</body>
</html>