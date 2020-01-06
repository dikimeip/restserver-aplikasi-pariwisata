<?php 

include 'koneksi.php';
//$_POST = json_decode(file_get_contents("php://input"),true);

$nama = $_POST['nama'];
$tanggal = $_POST['tanggal'];
$tarik = $_POST['tarik'];
$fasilitas = $_POST['fasilitas'];
$akses = $_POST['akses'];
$map = $_POST['map'];
$foto = $_FILES['foto']['name'];

if ($foto == "") {
	echo json_encode(array('id' => 0,'data' => 'Image Not Found'));
} else {
	$query = mysqli_query($db,"INSERT INTO wisata VALUES (null,'$nama','$tanggal','$tarik','$fasilitas','$akses','$map','$foto')");
	if ($query) {
		$sorce = $_FILES['foto']['tmp_name'];
		$lokasi = './img/';
		move_uploaded_file($sorce, $lokasi.$foto);

		echo json_encode(array('id' => 1,'data' => 'Success Upload Data'));
	} else {
		echo json_encode(array('id' => 404,'data' => 'Image Failed'));
	}

}

?>