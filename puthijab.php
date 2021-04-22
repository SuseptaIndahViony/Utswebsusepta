<?php
	//include koneksi ke database
	include "conection.php";
	//echo "update celana";
	
	//menangkap variabel parameter get_browser
	$id= $_GET['id'];
	//echo $id;
	
	//bagian ini yang akan ingin diubah
	$warna = $_POST['warna'];
	$merk_hijab = $_POST['merk_hijab'];
	
	$sql = "UPDATE `hijab` SET `merk_hijab` = '".$merk_hijab."', `warna` = '".$warna."'
	WHERE `hijab`.`id_hijab` = ".$id.";";
	//echo $sql;
	
	//runnig query
	$query = mysqli_query($conn, $sql);
	if($query) {
		$msg = "update data hijab berhasil";
	}else{
		$msg = "update data hijab tidak berhasil";
	}
	
		$response = array(
		'status'=>'OK',
		'tipe'=>$msg
	);
	
	echo json_encode($response);
?>