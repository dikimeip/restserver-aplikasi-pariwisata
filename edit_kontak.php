<?php 

include 'koneksi.php';
//$_POST = json_decode(file_get_contents("php://input"),true);

$map = $_POST['map'];
$ig = $_POST['ig'];
$fb = $_POST['fb'];
$phone = $_POST['phone'];

$query = mysqli_query($db,"UPDATE kontak SET map_kontak = '$map',ig = '$ig', fb='$fb',phone='$phone'  WHERE id_kontak = 1  ");
	if ($query) {
		echo json_encode(array('id' => 1,'data' => 'Success Upload Data'));
	} else {
		echo json_encode(array('id' => 404,'data' => 'Image Failed'));
	}


?> 