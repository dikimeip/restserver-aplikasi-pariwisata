<?php  

include 'koneksi.php';

$gambar = $_FILES['foto']['name'];
if (!$gambar == "") {
	$tmp = $_FILES['foto']['tmp_name'];
	$lok = './img/';
	move_uploaded_file($tmp,$lok.$gambar);
	echo json_encode(array('id'=>1,'val'=>'Ok'));
} else {
	echo json_encode(array('id'=>0,'val'=>'Not Found'));
}