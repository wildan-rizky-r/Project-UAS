<?php 
	if($_GET['idAkun']) {
		include "koneksi.php";
		$hapus=mysqli_query($conn, "delete from akun where idAkun='".$_GET['idAkun']."'");
		if ($hapus) {
			echo "<script>alert('Sukses Hapus');location.href='penjualan_akun.php';</script>";
		}else{
			echo "<script>alert('Gagal Hapus');location.href='penjualan_akun.php';</script>";
		}
	}
?>