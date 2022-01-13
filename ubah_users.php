<?php 
	include "header.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Ubah users</title>
	<link rel="stylesheet" type="text/css" href="tampilan.css">
</head>
<body>
	<?php 
	include "koneksi.php";
	$query_users=mysqli_query($conn, "select * from users where 
	idUsers = '".$_GET['idUsers']."'");
	$data_users=mysqli_fetch_array($query_users);
	?>
	<form action="proses_ubah_users.php" method="post" class="box2">
		<h3>Ubah Users</h3>
		<input type="hidden" name="idUsers" value="<?=$data_users['idUsers']?>" class="input" ><br>
		<input type="text" name="nama" value="<?=$data_users['nama']?>" class="input" placeholder="nama"><br>
		<input type="text" name="username" value="<?=$data_users['username']?>" class="input" placeholder="username"><br>
		<input type="password" name="password" value="" class="input" placeholder="password"><br>
		<input type="text" name="tingkat" readonly value="<?=$data_users['tingkat']?>" class="input">
		<input type="submit" name="simpan" value="Ubah" class="blue">
	</form>
</body>
</html>
<?php  
	include "footer.php";
?>