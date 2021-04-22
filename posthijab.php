<?php 
	//koneksi data bae
	include "conection.php";
		
	//mendapatkan variabel post
	$id_hijab = isset($_POST['id_hijab']) ? $_POST['id_hijab'] : "";
	//echo $merk_sepatu;
	$merk_hijab= isset($_POST['merk_hijab']) ? $_POST['merk_hijab'] : "";
	//echo $ukuran;
	$warna = isset($_POST['warna']) ? $_POST['warna'] : "";
	//echo $id_sepatu;
	
	//query menambahkan data
	$sql = "INSERT INTO `hijab` (`warna`, `merk_hijab`) 
	VALUES ('".$warna."', '".$merk_hijab."');";
	//echo $sql;
	
	//runnig query
	$query = mysqli_query($conn, $sql);
	if($query) {
		$msg = "simpan data hijab berhasil";
	}else{
		$msg = "simpan data hijabtidak berhasil";
	}
	
	//echo $msg;
	//echo 'test';
	$response = array(
		'status'=>'OK',
		'tipe'=>$msg
	);
	
	echo json_encode($response);
?>