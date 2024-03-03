<?php
// Menghubungkan ke database
include 'koneksi.php';

if (isset($_POST['id_produk'])) {
    $id_produk = $_POST['id_produk'];

    // Lakukan operasi penghapusan data pesanan berdasarkan id_produk
    // Misalnya:
    $query = "DELETE FROM orders WHERE id_produk = '$id_produk'";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        header('location: keranjang.php');
    } else {
        header('location: keranjang.php');
    }
}
?>
