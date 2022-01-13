<?php 
if ($_POST) {
	$idBarang=$_POST['idBarang'];
	$kode=$_POST['kode_barang'];
	$nama=$_POST['nama_barang'];
	$harga=$_POST['harga'];
	if (empty($kode)) {
		echo "<script>alert('Kode barang tidak boleh kosong');location.href='ubah_barang.php';</script>";
	}elseif (empty($nama)) {
		echo "<script>alert('Nama barang tidak boleh kosong');location.href='ubah_barang.php';</script>";
	}else{
		include "koneksi.php";
		if (empty($harga)) {
			$update=mysqli_query($conn, "update barang set kode_barang='".$kode."',nama_barang='".$nama."' where idBarang='".$idBarang."'") or die(mysqli_error($conn));
			if ($update) {
				echo "<script>alert ('Sukses update');location.href='barang.php';</script>";
			} else{
				 echo "<script>alert ('Gagal update');location.href='ubah_barang.php?idBarang=".$idBarang."';</script>";
			}
		} else{
			$update=mysqli_query($conn, "update barang set kode_barang='".$kode."',nama_barang='".$nama."',harga='".$harga."' where idBarang='".$idBarang."'") or die(mysqli_error($conn)); 
			if ($update) {
				echo "<script>alert('Sukses update');location.href='barang.php';</script>";	
			} else{
				echo "<script>alert('Gagal update');location.href='ubah_barang.php?idBarang=".$idBarang."';</script>";
			}
		}
	}
}
?>