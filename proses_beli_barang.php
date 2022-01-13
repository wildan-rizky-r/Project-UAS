<?php 
if ($_POST) {
	$idBarang=$_POST['idBarang'];
	$harga=$_POST['harga'];
	$jumlah=$_POST['jumlah'];
	if (empty($jumlah)) {
		echo "<script>alert('Jumlah Beli Tidak Boleh Kosong');location.href='beli_barang.php';</script>";
	}else {
		include "koneksi.php";
		$insert=mysqli_query($conn,"insert into beli (idBarang, harga, jumlah) values ('".$idBarang."','".$harga."','".$jumlah."')") or die(mysqli_error($conn));
		if ($insert) {
			echo "<script>alert('Sukses membeli barang, dan tunggu barang sampai ditempat tujuan');location.href='transaksi.php';</script>";
		}else{
			echo "<script>alert('Gagal membeli barang');location.href='beli_barang.php';</script>";
		}
	}
}
?>