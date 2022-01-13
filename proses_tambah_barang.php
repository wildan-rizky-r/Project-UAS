<?php 
if ($_POST) {
	$kode=$_POST['kode_barang'];
	$nama=$_POST['nama_barang'];
	$harga=$_POST['harga'];
	if (empty($kode)) {
		echo "<script>alert('Kode Barang Tidak Boleh Kosong');location.href='tambah_barang.php';</script>";
	}elseif (empty($nama)) {
		echo "<script>alert('Nama Barang Tidak Boleh Kosong');location.href='tambah_barang.php';</script>";
	}elseif (empty($harga)) {
		echo "<script>alert('Harga Tidak Boleh Kosong');location.href='tambah_barang.php';</script>";
	}else {
		include "koneksi.php";
		$insert=mysqli_query($conn,"insert into barang (kode_barang, nama_barang, harga) value ('".$kode."','".$nama."','".$harga."')") or die(mysqli_error($conn));
		if ($insert) {
			echo "<script>alert('Sukses menambahkan barang');location.href='barang.php';</script>";
		}else{
			echo "<script>alert('Gagal menambahkan barang');location.href='tambah_barang.php';</script>";
		}
	}
}
?>