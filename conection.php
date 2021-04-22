
<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$databasename = "utswebtata";
	
	$conn = mysqli_connect($servername, $username, $password, $databasename);
	if(!$conn){
		die("koneksi gagal");
	}
?>