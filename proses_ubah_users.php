<?php 
if ($_POST) {
	$idUsers=$_POST['idUsers'];
	$nama=$_POST['nama'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$tingkat=$_POST['tingkat'];
	if (empty($nama)) {
		echo "<script>alert('Nama tidak boleh kosong');location.href='ubah_users.php';</script>";
	}elseif (empty($username)) {
		echo "<script>alert('Username tidak boleh kosong');location.href='ubah_users.php';</script>";	
	}else{
		include "koneksi.php";
		if (empty($password)) {
			$update=mysqli_query($conn, "update users set nama='".$nama."',username='".$username." where idUsers='".$idUsers."'") or die(mysqli_error($conn));
			if ($update) {
				echo "<script>alert ('Sukses update');location.href='user.php';</script>";
			} else{
				 echo "<script>alert ('Gagal update');location.href='ubah_users.php?idUsers=".$idUsers."';</script>";
			}
		} else{
			$update=mysqli_query($conn, "update users set nama='".$nama."',username='".$username."',password='".$password."' where idUsers= '".$idUsers."'") or die(mysqli_error($conn));
			if ($update) {
				echo "<script>alert('Sukses update');location.href='user.php';</script>";	
			} else{
				echo "<script>alert('Gagal update');location.href='ubah_users.php?idUsers=".$idUsers."';</script>";
			}
		}
	}
}
?>