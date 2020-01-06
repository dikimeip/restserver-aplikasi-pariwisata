<?php 

include 'koneksi.php';
//$_POST = json_decode(file_get_contents("php://input"),true);

$id_berita = $_POST['idb'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$isi = $_POST['isi'];
$tanggal = $_POST['tanggal'];

$query = mysqli_query($db,"INSERT INTO komentar VALUES (null,'$id_berita','$nama','$email','$isi','$tanggal')");
if ($query) {
	echo json_encode(array('id' => 1,'data' => 'Success komentar Data'));
} else {
	echo json_encode(array('id' => 404,'data' => 'komentar Failed'));
}

?>