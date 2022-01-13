<?php 
	include "header.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>User</title>
	<link rel="stylesheet" type="text/css" href="tampilan.css">
</head>
<body>
	<hr>
	<h5>DATA USER</h5>
	<a href="tambah_users.php" class="green">Tambah</a>
	<table>
		<thead>
			<tr>
				<th>No</th>
				<th>Nama</th>
				<th>Username</th>
				<th>Password</th>
				<th>Tingkat</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			include "koneksi.php";
			$qry_users=mysqli_query($conn,"select * from users");
			$no=0;
			while ($data_users=mysqli_fetch_array($qry_users)) {
				$no++;?>
				<tr>
					<td><?=$no?></td>
					<td><?=$data_users['nama']?></td>
					<td><?=$data_users['username']?></td>
					<td><?=$data_users['password']?></td>
					<td><?=$data_users['tingkat']?></td>
					<td><a href="ubah_users.php?idUsers=<?=$data_users['idUsers']?>" class="blue">Ubah</a> | <a href="hapus_users.php?idUsers=<?=$data_users['idUsers']?>" class="red" onclick="return confirm('Apakah anda yakin menghapus data ini')">Hapus</a> </td>
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