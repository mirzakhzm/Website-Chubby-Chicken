<?php
include('../koneksi.php');

// Memeriksa apakah ada nilai id_produk yang dikirim melalui metode POST
if (isset($_POST["id_produk"])) {
    $id_produk = $_POST["id_produk"];
    $nama_produk = $_POST["nama_produk"];
    $harga_produk = $_POST["harga_produk"];
    $gambar = $_FILES['gambar']['name'];
    $ukuran_file = $_FILES['gambar']['size'];
    $tipe_file = $_FILES['gambar']['type'];
    $lokasi_ambil_file = $_FILES['gambar']['tmp_name'];
    $lokasi_simpan_file = "../img/" . $nama_file_baru;

    move_uploaded_file($lokasi_ambil_file, $lokasi_simpan_file);

    // Membuat pernyataan UPDATE dengan klausa WHERE berdasarkan id_produk
    $update = "UPDATE produk SET nama_produk = '$nama_produk', harga = '$harga_produk', gambar ='$gambar' WHERE id_produk = '$id_produk'";
    $query = mysqli_query($koneksi, $update);

    if ($query) {
        // Perbarui berhasil
        header('location: data-produk.php');
    } else {
        // Perbarui gagal
        echo "Terjadi kesalahan saat memperbarui data.";
    }
} else {
    // Jika id_produk tidak tersedia dalam metode POST
    echo "ID Produk tidak ditemukan.";
}
?>