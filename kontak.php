<?php 

include 'koneksi.php';
$res = array();
$db = mysqli_query($db,"SELECT * FROM kontak WHERE id_kontak = 1 ");
while ($row = mysqli_fetch_assoc($db)) {
	$res[] = $row;
}

if ($db) {
	echo json_encode(array('id' => 1,'data' => $res));
} else {
	echo json_encode(array('id' => 0,'data' => 'not found'));
}

 ?> 