<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="tampilan.css">
</head>
<body>
<div class="barang">
	<h4 class="b">BARANG</h4>
	<?php 
	include "koneksi.php";
	$qry_barang=mysqli_query($conn, "select * from barang");
	while ($dt_barang=mysqli_fetch_array($qry_barang)) {
	?>
	<div class="kotak">
		<div class="brg">
			<h5 class="kode_barang"> <?=$dt_barang['kode_barang']?></h5>
			<img src="barang.png">
			<div class="ket">
				<h5 class="nama_barang"> <?=$dt_barang['nama_barang']?></h5>
				<h5 class="harga"><?=$dt_barang['harga']?></h5>
				<a href="beli_barang.php?idBarang=<?=$dt_barang['idBarang']?>" class="blue">Beli</a>
			</div>
		</div>
	</div>
	<?php 
		}
	?>
</div>
</body>
</html>
