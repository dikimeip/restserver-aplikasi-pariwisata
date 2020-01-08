<?php 

include 'koneksi.php';
$_POST = json_decode(file_get_contents("php://input"),true);

$tanggal = date('Y-m-d');
$author = $_POST['author'];
$judul = $_POST['judul'];
$isi = $_POST['isi'];
$foto = $_POST['foto'];

if ($foto == "") {
	echo json_encode(array('id' => 0,'data' => 'Image Not Found'));
} else {
	$query = mysqli_query($db,"INSERT INTO berita VALUES (null,'$tanggal','$author','$judul','$isi','$foto')");
	if ($query) {
		echo json_encode(array('id' => 1,'data' => 'Success Upload Data'));
	} else {
		echo json_encode(array('id' => 404,'data' => 'Image Failed'));
	}

}

?>