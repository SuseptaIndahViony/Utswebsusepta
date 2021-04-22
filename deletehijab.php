<?php
	//include koneksi ke database
	include "conection.php";
	
	//echo "update hijab";
	
	//menangkap variabel parameter get_browser
	$id = $_GET ['id'];
	//echo $id;
	
	$sql = "DELETE FROM `hijab` WHERE `id_hijab` = ".$id.";";
	//echo $sql;
	
	//runnig query
	$query = mysqli_query($conn, $sql);
	if($query) {
		$msg = "delete data hijab berhasil";
	}else{
		$msg = "delete data hijab tidak berhasil";
	}
	
		$response = array(
		'status'=>'OK',
		'pesan'=>$msg
	);
	
	echo json_encode($response);
?>