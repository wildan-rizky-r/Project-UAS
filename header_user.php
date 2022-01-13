<?php 
	session_start();
	if($_SESSION['statuss']!=true){
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
			<li><a href="home_user.php">Home</a></li>
			<li><a href="transaksi.php">Transaksi</a></li>
			<li><a href="logout.php">Logout</a></li>
		</ul>
	</nav>
</body>
</html>