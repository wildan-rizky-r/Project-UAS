<?php 
	$conn=mysqli_connect('localhost','root','','wildan_bm');
	if (mysqli_connect_error()) {
		printf("Connect Failed: %s\n", mysqli_connect_error());
		exit();
	}
?>