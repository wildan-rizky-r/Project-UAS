<?php 
	include "header.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Ubah akun</title>
	<link rel="stylesheet" type="text/css" href="tampilan.css">
</head>
<body>
	<?php 
	include "koneksi.php";
	$akun=mysqli_query($conn, "select * from akun where 
	idAkun = '".$_GET['idAkun']."'");
	$data=mysqli_fetch_array($akun);
	?>
	<form action="proses_ubah_akun.php" method="post" class="box">
		<h3>Ubah Akun</h3>
		<input type="hidden" name="idAkun" value="<?=$data['idAkun']?>" class="input" ><br>
		<input type="text" name="kode_akun" readonly value="<?=$data['kode_akun']?>" class="input"><br>
		<input type="text" name="nama_akun" value="<?=$data['nama_akun']?>" class="input"><br>
		<input type="number" name="harga" value="<?=$data['harga']?>" class="input"><br>
		<input type="submit" name="ubah" value="Ubah" class="blue">
	</form>
</body>
</html>