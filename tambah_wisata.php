<?php 

include 'koneksi.php';
$_POST = json_decode(file_get_contents("php://input"),true);

$nama = $_POST['nama'];
$tanggal = date('Y-m-d');
$tarik = $_POST['tarik'];
$fasilitas = $_POST['fasilitas'];
$akses = $_POST['akses'];
$map = $_POST['map'];
$foto = $_POST['foto'];
$ket = $_POST['ket'];

if ($foto == "") {
	echo json_encode(array('id' => 0,'data' => 'Image Not Found'));
} else {
	$query = mysqli_query($db,"INSERT INTO wisata VALUES (null,'$nama','$tanggal','$tarik','$fasilitas','$akses','$map','$foto','$ket')");
	if ($query) {
		echo json_encode(array('id' => 1,'data' => 'Success Upload Data'));
	} else {
		echo json_encode(array('id' => 404,'data' => 'Image Failed'));
	}

}

?> 