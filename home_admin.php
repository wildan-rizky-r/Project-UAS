<!DOCTYPE html>
<html>
<head>
	<title>admin</title>
</head>
<body>
	<?php 
		include "header.php";
		include "proses_login.php";
	 ?>
	<p style="background-color: darkgreen; width: 100%; color: ghostwhite; padding: 10px;">Halo <?=$_SESSION['username']?></p>
	<h4>Anda login sebagai admin, anda bisa menambahkan user maupun admin, serta bisa melakukan proses CRUD dari tiap user, anda juga bisa melakukan proses CRUD untuk barang, sehingga barang akan dipasarkan pada user</h4>
</body>
</html>