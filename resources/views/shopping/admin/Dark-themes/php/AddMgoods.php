<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form class="form-horizaltal men-form" action="addMgoods.php" method="POST">
	<input type="file" name="MenFile" class="selectFile"style="width: 30%">
	<input type="submit" name="sendFile">
</body>
</html>
<?php
$db = new mysqli('localhost','root','root','newshop') or die("error_log");
if (isset($_POST['sendFile'])) {

$query = $_POST['MenFile'];
echo $query;
}
?>