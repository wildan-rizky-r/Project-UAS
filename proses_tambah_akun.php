<?php 
if ($_POST) {
	$kode=$_POST['kode_akun'];
	$nama=$_POST['nama_akun'];
	$harga=$_POST['harga'];
	if (empty($kode)) {
		echo "<script>alert('Kode Akun Tidak Boleh Kosong');location.href='tambah_akun.php';</script>";
	}elseif (empty($nama)) {
		echo "<script>alert('Nama Akun Tidak Boleh Kosong');location.href='tambah_akun.php';</script>";
	}elseif (empty($harga)) {
		echo "<script>alert('Harga Tidak Boleh Kosong');location.href='tambah_akun.php';</script>";
	}else {
		include "koneksi.php";
		$insert=mysqli_query($conn,"insert into akun (kode_akun, nama_akun, harga) value ('".$kode."','".$nama."','".$harga."')") or die(mysqli_error($conn));
		if ($insert) {
			echo "<script>alert('Sukses menambahkan akun');location.href='penjualan_akun.php';</script>";
		}else{
			echo "<script>alert('Gagal menambahkan akun');location.href='tambah_akun.php';</script>";
		}
	}
}
?>