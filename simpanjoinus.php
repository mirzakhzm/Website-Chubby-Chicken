<?php
include "koneksi.php";
//membuat variabel
//menangkap parameter dari form yang diisi oleh pengguna
//menyimpan parameter yang sudah ditangkap ke dalam variabel
$id = $_POST['id'];
$nama = $_POST['nama'];
$domisili =  $_POST['domisili']; 
$email = $_POST['email'];
$lokasi = $_POST['lokasi'];
$nomorhp = $_POST['nomorhp']; 
$pesan = $_POST['pesan'];


//membuat query untuk melakukan insert ke tabel mha
$q = "insert into joinus values ('$id','$nama','$domisili','$email','$lokasi','$nomorhp','$pesan')";

//menjalankan query
mysqli_query($koneksi,$q);

//menutup koneksi ke server database
mysqli_close($koneksi);

//meredirect ke halaman lain
header('location:join.php')
?>