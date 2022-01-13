<!DOCTYPE html>
<html>
<head>
	<title>user</title>
</head>
<body>
	<?php 
		include "header_user.php";
		include "proses_login.php";
	?>
	<p style="background-color: darkgreen; width: 100%; color: ghostwhite; padding: 10px;">Halo <?=$_SESSION['username']?></p>
	<h4>Anda login sebagai user, anda bisa melakukan transaksi pembelian barang</h4>
	<?php
		include "market.php";
	?>
</body>
</html>