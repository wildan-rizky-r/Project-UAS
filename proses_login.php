<?php 
	if ($_POST) {
		$username = $_POST['username'];
		$password = $_POST['password'];
		if (empty($username)) {
			echo "<script>alert('Username Tidak Boleh Kosong');location.href='login.php';</script>";
		}else{
			include 'koneksi.php';
			$login = mysqli_query($conn,"select * from users where username='$username' and password='$password'");
			$cek = mysqli_num_rows($login);
			session_start();
			if($cek > 0){
				$data = mysqli_fetch_assoc($login);
				if($data['tingkat']=="admin"){
					$_SESSION['username'] = $username;
					$_SESSION['tingkat'] = "admin";
					$_SESSION['status']=true;
					header("location:home_admin.php");
				}else if($data['tingkat']=="user"){
					$_SESSION['username'] = $username;
					$_SESSION['tingkat'] = "user";
					$_SESSION['statuss']=true;
					header("location:home_user.php"); 
				}else{
					header("location:login.php?pesan=gagal");
				}	
			}else{
				echo "<script>alert('Username dan Password Tidak Benar');location.href='login.php?pesan=gagal';</script>";
			}	
		}	
	} 
?>
