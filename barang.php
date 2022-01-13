<?php 
	include "header.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Barang</title>
	<link rel="stylesheet" type="text/css" href="tampilan.css">
</head>
<body>
	<hr>
	<h5>BARANG</h5>
	<a href="tambah_barang.php" class="green">Tambah</a>
	<table>
		<thead>
			<tr>
				<th>No</th>
				<th>Kode</th>
				<th>Nama</th>
				<th>Harga</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			include "koneksi.php";
			$qry_barang=mysqli_query($conn,"select * from barang");
			$no=0;
			while ($data_barang=mysqli_fetch_array($qry_barang)) {
				$no++;?>
				<tr>
					<td><?=$no?></td>
					<td><?=$data_barang['kode_barang']?></td>
					<td><?=$data_barang['nama_barang']?></td>
					<td><?=$data_barang['harga']?></td>
					<td><a href="ubah_barang.php?idBarang=<?=$data_barang['idBarang']?>" class="blue">Ubah</a> | <a href="hapus_barang.php?idBarang=<?=$data_barang['idBarang']?>" class="red" onclick="return confirm('Apakah anda yakin menghapus barang ini')">Hapus</a> </td>
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