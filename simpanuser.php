<?php
include "koneksi.php";
//membuat variabel
//menangkap parameter dari form yang diisi oleh pengguna
//menyimpan parameter yang sudah ditangkap ke dalam variabel
$id = $_POST['id'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];


//membuat query untuk melakukan insert ke tabel user
$q = "insert into user values ('$id','$email','$username','$password')";

//menjalankan query
mysqli_query($koneksi,$q);

//menutup koneksi ke server database
mysqli_close($koneksi);

//meredirect ke halaman lain
header('location:login.php')
?>