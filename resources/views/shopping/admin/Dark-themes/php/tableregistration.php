<?php
$db = new mysqli('localhost','root','root','newshop');

$result = $db->query("SELECT * FROM `tableregistration`");

$data = array();
while ($row = mysqli_fetch_assoc($result)) {
	$data[] = $row;
}



echo json_encode($data);
//header('Location: index.php');


?>
