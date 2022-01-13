<?php 
	if($_GET['idBeli']) {
		include "koneksi.php";
		$qry_hapus=mysqli_query($conn, "delete from beli where idBeli='".$_GET['idBeli']."'");
		if ($qry_hapus) {
			echo "<script>alert('Anda telah membatalkan pembelian');location.href='transaksi.php';</script>";
		}else{
			echo "<script>alert('Gagal');location.href='transaksi.php';</script>";
		}
	}
?>