<?php 
if ($_POST) {
	$nama=$_POST['nama'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$tingkat=$_POST['tingkat'];
	if (empty($nama)) {
		echo "<script>alert('Nama Tidak Boleh Kosong');location.href='registrasi.php';</script>";
	}elseif (empty($username)) {
		echo "<script>alert('Usename Tidak Boleh Kosong');location.href='registrasi.php';</script>";
	}elseif (empty($password)) {
		echo "<script>alert('Password Tidak Boleh Kosong');location.href='registrasi.php';</script>";
	}elseif (empty($tingkat)) {
		echo "<script>alert('Tingkat Tidak Boleh Kosong');location.href='registrasi.php';</script>";
	}else {
		include "koneksi.php";
		$insert=mysqli_query($conn,"insert into users (nama, username, password, tingkat) value ('".$nama."','".$username."','".$password."','".$tingkat."')") or die(mysqli_error($conn));

		if ($insert) {
			echo "<script>alert('Sukses Registrasi Silahkan Langsung Login');location.href='login.php';</script>";
		}else{
			echo "<script>alert('Gagal Registrasi');location.href='registrasi.php';</script>";
		}
	}
}
?>