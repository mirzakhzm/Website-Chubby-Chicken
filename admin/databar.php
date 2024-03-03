<?php
include('../koneksi.php');

$sql = "SELECT * FROM sales";
$result = mysqli_query($koneksi, $sql);
$nama_produk = array();
$sales = array();
$tahun = array(); // Perbaikan: Inisialisasi array $tahun
while ($row = mysqli_fetch_array($result)) {
    $nama_produk[] = $row['nama_produk'];
    $sales[] = $row['total_penjualan'];
    if(isset($row['tahun'])){ // Perbaikan: Periksa apakah kunci 'tahun' ada sebelum mengaksesnya
        $tahun[] = $row['tahun'];
    }
}
?>