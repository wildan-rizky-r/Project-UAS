<!DOCTYPE html>
<html>
<head>
	<title>Registrasi</title>
	<link rel="stylesheet" type="text/css" href="tampilan.css">
</head>
<body>
	<div class="box2">
		<h3>Registrasi</h3>
		<form action="proses_registrasi.php" method="post">
		<input type="text" name="nama" value="" placeholder="Nama" class="input"><br>
		<input type="text" name="username" value="" placeholder="Username" class="input"><br>
		<input type="password" name="password" value="" placeholder="Password" class="input"><br>
		<input type="text" name="tingkat" readonly value="user" class="input"><br>			
		<input type="submit" name="simpan" value="Daftar" class="green">
		<p>Jika sudah memiliki akun silahkan langsung <a href="login.php" class="reg">login</a></p>
	</form>	
	</div>
	
</body>
</html>
