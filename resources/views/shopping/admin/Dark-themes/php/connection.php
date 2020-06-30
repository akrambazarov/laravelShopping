<?php
$db = new mysqli('localhost','root','root','newshop') or die("error_log");
$query = '';
$output = array();
$query.= "SELECT * FROM sub";
if (isset($_POST['search']['value'])) {
	$query .= 'WHERE name LIKE "%'.$_POST["search"]["value"].'%" ';
	$query .= 'OR ISBN LIKE "%'.$_POST["search"]["value"].'%" ';
}
if (isset($_POST['order'])) {
	$query .= 'ORDER BY '. $_POST['order']['0']['column'].' '.$_POST['order']['0']['dir'].' ';
}
else{
	$query .= 'ORDER BY ISBN id DESC';
}
if ($_POST["length"] != -1) {
	$query .= 'LIMIT '. $_POST['start']. ','.$_POST['length'];
}
$statement = $connect-> prepare($query);
$statement -> execute();
$result = $statement ->fetchAll();
$data = array();
$filterd_rows = $statement->rowCount();
foreach ($result as $row ) {
	$image ='';
	if ($row) {
		
	}
}
?>