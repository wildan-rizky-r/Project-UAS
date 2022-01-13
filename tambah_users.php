<?php 
	session_start();
	if($_SESSION['status']!=true){
		header('location: login.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Tambah Users</title>
	<link rel="stylesheet" type="text/css" href="tampilan.css">
</head>
<body>
	<div class="box2">
		<h3>Tambah Users</h3>
		<form action="proses_tambah_users.php" method="post">
		<input type="text" name="nama" value="" placeholder="Nama" class="input"><br>
		<input type="text" name="username" value="" placeholder="Username" class="input"><br>
		<input type="password" name="password" value="" placeholder="Password" class="input"><br>
		<input type="text" name="tingkat" value="" placeholder="admin atau user" class="input"><br>		
		<input type="submit" name="simpan" value="Tambah" class="green">
	</form>	
	</div>
	
</body>
</html>
