<?php 
	include "header_user.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Transaksi</title>
	<link rel="stylesheet" type="text/css" href="tampilan.css">
</head>
<body>
	<hr>
	<h5>TRANSAKSI</h5>
	<a href="home_user.php" class="green">Beli lagi</a>
	<table>
		<thead>
			<tr>
				<th>No</th>
				<th>Nama</th>
				<th>Harga</th>
				<th>Jumlah</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			include "koneksi.php";
			$qryBeli=mysqli_query($conn,"select * from beli join barang on barang.idBarang=beli.idBarang");
			$no=0;
			while ($data_beli=mysqli_fetch_array($qryBeli)) {
				$no++;?>
				<tr>
					<td><?=$no?></td>
					<td><?=$data_beli['nama_barang']?></td>
					<td><?=$data_beli['harga']?></td>
					<td><?=$data_beli['jumlah']?></td>
					<td><a href="batal_beli.php?idBeli=<?=$data_beli['idBeli']?>" class="red" onclick="return confirm('Apakah anda yakin membatalkan pembelian ini')">Batal</a> </td>
				</tr>
				<?php 
				}
				?>
		</tbody>
	</table>
</body>
</html>
<?php 
	include "footer.php";
?>