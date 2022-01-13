<?php 
	if($_GET['idBarang']) {
		include "koneksi.php";
		$qry_hapus=mysqli_query($conn, "delete from barang where idBarang='".$_GET['idBarang']."'");
		if ($qry_hapus) {
			echo "<script>alert('Sukses Hapus');location.href='barang.php';</script>";
		}else{
			echo "<script>alert('Gagal Hapus');location.href='barang.php';</script>";
		}
	}
?>