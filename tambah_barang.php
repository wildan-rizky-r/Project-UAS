<!DOCTYPE html>
<html>
<head>
	<title>tambah barang</title>
	<link rel="stylesheet" type="text/css" href="tampilan.css">
</head>
<body>
	<div class="box">
		<form action="proses_tambah_barang.php" method="post">
			<h3>Tambah Barang</h3>
			<input type="text" name="kode_barang" value="" placeholder="kode barang" class="input"><br>
			<input type="text" name="nama_barang" value="" placeholder="nama barang" class="input"><br>
			<input type="text" name="harga" value="" placeholder="harga" class="input"><br>
			<input type="submit" name="simpan" value="Simpan" class="green">	
		</form>
	</div>
</body>
</html>