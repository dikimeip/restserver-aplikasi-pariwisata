<?php 

include 'koneksi.php';
//$_POST = json_decode(file_get_contents("php://input"),true);

$tanggal = $_POST['tanggal'];
$author = $_POST['author'];
$judul = $_POST['judul'];
$isi = $_POST['isi'];
$foto = $_FILES['foto']['name'];

if ($foto == "") {
	echo json_encode(array('id' => 0,'data' => 'Image Not Found'));
} else {
	$query = mysqli_query($db,"INSERT INTO berita VALUES (null,'$tanggal','$author','$judul','$isi','$foto')");
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