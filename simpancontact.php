<?php
include "koneksi.php";
//membuat variabel
//menangkap parameter dari form yang diisi oleh pengguna
//menyimpan parameter yang sudah ditangkap ke dalam variabel
$id = $_POST['id'];
$name = $_POST['nama'];
$email = $_POST['email'];
$judul = $_POST['judul'];
$pesan = $_POST['pesan'];


//membuat query untuk melakukan insert ke tabel mha
$q = "insert into contact values ('$id','$name','$email','$judul','$pesan')";

//menjalankan query
mysqli_query($koneksi,$q);

//menutup koneksi ke server database
mysqli_close($koneksi);

//meredirect ke halaman lain
header('location:contact.php')
?>