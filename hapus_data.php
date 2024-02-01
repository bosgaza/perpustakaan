<?php
include('koneksi.php');

// Ambil kode buku dari parameter URL
$kode_buku = $_GET['kode_buku'];

// Query untuk menghapus data
$query = "DELETE FROM perpustakaan WHERE kode_buku = '$kode_buku'";
$result = mysqli_query($koneksi, $query);

if ($result) {
    echo "Data berhasil dihapus. Klik <a href='view_data.php'>di sini</a> untuk kembali.";
} else {
    die('Gagal menghapus data: ' . mysqli_error($koneksi));
}
?>