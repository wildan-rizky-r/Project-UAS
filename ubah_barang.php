<?php 
	include "header.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Ubah Barang</title>
	<link rel="stylesheet" type="text/css" href="tampilan.css">
</head>
<body>
	<?php 
	include "koneksi.php";
	$query_barang=mysqli_query($conn, "select * from barang where 
	idBarang = '".$_GET['idBarang']."'");
	$data_barang=mysqli_fetch_array($query_barang);
	?>
	<form action="proses_ubah_barang.php" method="post" class="box2">
		<h3>Ubah Barang</h3>
		<input type="hidden" name="idBarang" value="<?=$data_barang['idBarang']?>" class="input" ><br>
		<input type="text" name="kode_barang" readonly value="<?=$data_barang['kode_barang']?>" class="input"><br>
		<input type="text" name="nama_barang" value="<?=$data_barang['nama_barang']?>" class="input"><br>
		<input type="number" name="harga" value="<?=$data_barang['harga']?>" class="input" placeholder="harga"><br>
		<input type="submit" name="simpan" value="Ubah" class="blue">
	</form>
</body>
</html>