<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="tampilan.css">
</head>
<body>
	<div class="box">
		<form action="proses_login.php" method="post">
			<h3 align="center">LOGIN</h3>
			<input type="text" name="username" value="" placeholder="username" class="input"><br>
			<input type="password" name="password" placeholder="password" class="input"><br>
			<input type="submit" name="login" class="green" value="LOGIN"><br>
			<p>Jika belum mendaftar silahkan  <a href="registrasi.php" class="reg">registrasi</a></p>
		</form>
	</div>
</body>
</html>