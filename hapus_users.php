<?php 
	if($_GET['idUsers']) {
		include "koneksi.php";
		$qry_hapus=mysqli_query($conn, "delete from users where idUsers='".$_GET['idUsers']."'");
		if ($qry_hapus) {
			echo "<script>alert('Sukses Hapus');location.href='user.php';</script>";
		}else{
			echo "<script>alert('Gagal Hapus');location.href='user.php';</script>";
		}
	}
?>