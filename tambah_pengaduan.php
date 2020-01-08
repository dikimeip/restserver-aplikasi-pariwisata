<?php 

include 'koneksi.php';
$_POST = json_decode(file_get_contents("php://input"),true);

$nama = $_POST['nama'];
$email = $_POST['email'];
$isi = $_POST['isi'];
$tanggal = date('Y-m-d');

$query = mysqli_query($db,"INSERT INTO pengaduan VALUES (null,'$nama','$email','$isi','$tanggal')");
if ($query) {
	echo json_encode(array('id' => 1,'data' => 'Success komentar Data'));
} else {
	echo json_encode(array('id' => 404,'data' => 'komentar Failed'));
}

?>