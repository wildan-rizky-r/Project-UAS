<?php 
	include "header_user.php";
	include "koneksi.php";
	$barang=mysqli_query($conn, "select * from beli join barang on barang.idBarang=beli.idBarang ");
	$data=mysqli_fetch_array($barang);
?>
<!DOCTYPE html>
<html>
<head>
	<title>beli</title>
</head>
<body>
	<h2>Beli Barang</h2>
	<div>
	<div>
		<img src="barang.png">
	</div>
	<div>
		<form action="proses_beli_barang.php" method="POST">
			<table class="beli_barang">
				<thead>
					<tr>
						<td>Barang</td><td><input type="text" name="idBarang"  readonly value="<?=$data['nama_barang']?>" class="input"></td>
					</tr>
					<tr>
						<td>Harga Barang</td><td><input type="text" name="harga"  readonly value="<?=$data['harga']?>" class="input"></td>
					</tr>
					<tr>
						<td>Jumlah</td><td><input type="number" name="jumlah" value="1" class="input"></td>
					</tr>
					<tr>
						<td colspan="2"><input type="submit" value="Beli" class="green"></input></td>
					</tr>
				</thead>
			</table>
		</form>
	</div>
</div>
</body>
</html>
<?php 
	include "footer.php";
?>