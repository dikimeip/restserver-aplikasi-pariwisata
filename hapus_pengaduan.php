<?php 
include "koneksi.php";

//if ($_SERVER['REQUEST_METHOD'] == "POST") {
	$nim = $_GET['id'];

	$query = mysqli_query($db,"DELETE FROM pengaduan WHERE id_pengaduan = '$nim' ");

	if ($query) {
		echo json_encode(array('value'=>1,'message'=>'SUCCES'));
	} else {
		echo json_encode(array('value'=>0,'message'=>'FAILDE'));
	}
// } else {
// 	echo json_encode(array('value'=>404,'message'=>'NotFound'));
// }

 ?>

