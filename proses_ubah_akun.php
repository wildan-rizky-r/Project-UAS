<?php 
if ($_POST) {
	$idAkun=$_POST['idAkun'];
	$kode=$_POST['kode_akun'];
	$nama=$_POST['nama_akun'];
	$harga=$_POST['harga'];
	if (empty($kode)) {
		echo "<script>alert('Kode akun tidak boleh kosong');location.href='ubah_akun.php';</script>";
	}elseif (empty($nama)) {
		echo "<script>alert('Nama akun tidak boleh kosong');location.href='ubah_akun.php';</script>";
	}else{
		include "koneksi.php";
		if (empty($harga)) {
			$update=mysqli_query($conn, "update akun set kode_akun='".$kode."',nama_akun='".$nama."' where idAkun='".$idAkun."'") or die(mysqli_error($conn));
			if ($update) {
				echo "<script>alert ('Sukses update');location.href='penjualan_akun.php';</script>";
			} else{
				 echo "<script>alert ('Gagal update');location.href='ubah_akun.php?idAkun=".$idAkun."';</script>";
			}
		} else{
			$update=mysqli_query($conn, "update akun set kode_akun='".$kode."',nama_akun='".$nama."',harga='".$harga."' where idAkun='".$idAkun."'") or die(mysqli_error($conn)); 
			if ($update) {
				echo "<script>alert('Sukses update');location.href='penjualan_akun.php';</script>";	
			} else{
				echo "<script>alert('Gagal update');location.href='ubah_akun.php?idAkun=".$idAkun."';</script>";
			}
		}
	}
}
?>