<?php 

include 'koneksi.php';

$_POST = json_decode(file_get_contents("php://input"),true);

$id = $_GET['id'];
$query = mysqli_query($db,"SELECT * FROM berita WHERE id_berita = '$id' ");
$data = mysqli_fetch_assoc($query);
if ($query) {
	echo json_encode(array('id' => 1,'data' => $data));
} else {
	echo json_encode(array('id' => 0,'data' => 'id not found' ));
}

 ?>