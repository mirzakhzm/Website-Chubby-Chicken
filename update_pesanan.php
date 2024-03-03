<?php
// Menghubungkan ke database
include 'koneksi.php';

if (isset($_POST['status'])) {
    $status = $_POST['status'];

    // Lakukan operasi pembaruan data pesanan berdasarkan id_produk
    // Misalnya:
    $query = "UPDATE orders SET status = 'Dalam Proses' WHERE status = '$status'";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        header('location: data-keranjang.php');
    } else {
        header('location: data-keranjang.php');
    }
}

?>
