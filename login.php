<?php 

include 'koneksi.php';
$_POST = json_decode(file_get_contents("php://input"),true);

	$username = $_POST['uname'];
	$password = $_POST['pass'];

	$query = mysqli_query($db,"SELECT * FROM admin WHERE username = '$username' AND password = '$password' ");
	$row = mysqli_fetch_assoc($query);
	if (mysqli_num_rows($query) == 1) {
		echo json_encode(array('value'=>1,'message'=>$row));
	} else {
		echo json_encode(array('value'=>2,'message'=>'Gagal Login'));
	}


 ?>

