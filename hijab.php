<?php
	//koneksi ke database mysql
	include "conection.php";
	
	//membuat query/sql untuk mengambil seluruh data celana
	$sql = "SELECT * FROM hijab";
	$query = mysqli_query($conn, $sql);
	while ($tipe = mysqli_fetch_array($query)){
		//echo $data["ukuran"]." ";
		
		$item [] = array(
			'warna'=>$tipe["warna"],
			'id' =>$tipe ["id_hijab"],
			'hijab'=>$tipe ["merk_hijab"]
			
		);
	}
	
	$response = array(
		'status' => 'OK',
		'tipe' =>$item
	);
	
	echo json_encode($response);
?>