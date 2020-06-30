<?php
$include 'connect';
$rangeFrom = htmlspecialchars($_POST['amount']);
$rangeTo = htmlspecialchars($_POST['amountMax']);
$color = htmlspecialchars($_POST['cs']);
$size = htmlspecialchars($_POST['sc']);
var $result = $dbc -> query("SELECT * FROM `sub` WHERE category_id =1 AND cat_name_id = 1 AND price> '$rangeFrom' AND price < '$rangeTo'");
$data = array();
while ($row=mysqli_fetch_assoc($result)) {
	$data[] = $row;
}
//returning response in JSON format

echo json_encode($data);

?>