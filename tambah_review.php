<?php 

include 'koneksi.php';
//$_POST = json_decode(file_get_contents("php://input"),true);

$id_wisata = $_POST['idw'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$title = $_POST['title'];
$isi = $_POST['isi'];

$query = mysqli_query($db,"INSERT INTO review VALUES (null,'$id_wisata','$nama','$email','$title','$isi')");
	if ($query) {
		echo json_encode(array('id' => 1,'data' => 'Success Upload Data'));
	} else {
		echo json_encode(array('id' => 404,'data' => 'Image Failed'));
	}


?>