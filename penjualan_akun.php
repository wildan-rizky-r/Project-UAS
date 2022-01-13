<?php 
	include "header.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>penjualan akun</title>
	<link rel="stylesheet" type="text/css" href="tampilan.css">
</head>
<body>
	<hr>
	<h5>Penjualan Akun</h5>
	<a href="tambah_akun.php" class="green">Tambah</a>
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
			$akun=mysqli_query($conn,"select * from akun");
			$no=0;
			while ($data=mysqli_fetch_array($akun)) {
				$no++;?>
				<tr>
					<td><?=$no?></td>
					<td><?=$data['kode_akun']?></td>
					<td><?=$data['nama_akun']?></td>
					<td><?=$data['harga']?></td>
					<td><a href="ubah_akun.php?idAkun=<?=$data['idAkun']?>" class="blue">Ubah</a> | <a href="hapus_akun.php?idAkun=<?=$data['idAkun']?>" class="red" onclick="return confirm('Apakah anda yakin menghapus ini')">Hapus</a> </td>
				</tr>
				<?php 
				}
				?>
		</tbody>
	</table>
	<hr>
	<h4>Untuk akun hanya sebagai proses CRUD saja belum dijual kepada user</h4>
</body>
</html>
<?php 
	include "footer.php";
?>