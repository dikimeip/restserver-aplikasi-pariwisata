<?php 

include 'koneksi.php';

$_POST = json_decode(file_get_contents("php://input"),true);


$id = $_GET['id'];
//echo json_encode($id);
$data = array();
$query = mysqli_query($db,"SELECT * FROM wisata WHERE ket = '$id' ");
while ($row=mysqli_fetch_assoc($query)) {
	$data[] = $row;
}
if ($query) {
	echo json_encode(array('id' => 1,'data' => $data));
} else {
	echo json_encode(array('id' => 0,'data' => 'id not found' ));
}

 ?>