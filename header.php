<?php 
	session_start();
	if($_SESSION['status']!=true){
		header('location: login.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="tampilan.css">
</head>
<body>
	<h2>WILDAN BLACK MARKET</h2>
	<nav>
		<ul>
			<li><a href="home_admin.php">Home</a></li>
			<li><a href="user.php">User</a></li>
			<li><a href="barang.php">Barang</a></li>
			<li><a href="penjualan_akun.php">Penjualan Akun</a></li>
			<li><a href="logout.php">Logout</a></li>
		</ul>
	</nav>
</body>
</html>