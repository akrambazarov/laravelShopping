<?php
include_once "../header.php";
//getting data from database
//Получение данных из базы данных
$dbconnect= mysqli_connect("Localhost","root","root","newshop");
//getting data from employee table
//Получение данных из ячейки таблицы
$result = mysqli_query($dbconnect,"SELECT * FROM `sub`	 WHERE `category_id`=1 AND `cat_name_id`=1");

//storing in array
$data = array();
while ($row=mysqli_fetch_assoc($result)) {
	$data[] = $row;
}
//returning response in JSON format

echo json_encode($data);
?>