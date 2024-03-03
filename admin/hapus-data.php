<?php
	include ('../koneksi.php');
	$id	= $_GET["id"];
	$hapus_data 		= "DELETE FROM produk WHERE id_produk='$id'";
	$query  			= mysqli_query($koneksi, $hapus_data);
	echo "<meta http-equiv='refresh' content='0;url=data-produk.php'>";
?>