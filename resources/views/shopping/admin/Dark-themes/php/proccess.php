<?php

$mysqli = new mysqli('localhost', 'root', 'root', 'newshop') or die("Нет подключение к базе");

if (mysqli_connect_errno()) {
  echo json_encode(array('mysqli' => 'Failed to connect to MySQL: ' . mysqli_connect_error()));
  exit;
}
$page = isset($_GET['p']) ? $_GET['p'] : '';
if ($page == 'view') {
	$result = $mysqli->query("SELECT * FROM tableregistration WHERE deleted != '1'");
	while ($row = $result -> fetch_assoc()) {
		?>
		<tr>
			<td> <?php echo $row['id'] ?></td>
			<td> <?php echo $row['country'] ?></td>
			<td> <?php echo $row['phonenumber'] ?></td>
			<td> <?php echo $row['login'] ?></td>
			<td> <?php echo $row['password'] ?></td>
		</tr>
		<?php
	}
}
else{


// Basic example of PHP script to handle with jQuery-Tabledit plug-in.
// Note that is just an example. Should take precautions such as filtering the input data.

	header('Content-Type: application/json');

	$input = filter_input_array(INPUT_POST);



	if ($input['action'] == 'edit') {
	    $mysqli->query("UPDATE tableregistration SET name='" . $input['name'] . "', phonenumber='" . $input['phonenumber'] . "', country='" . $input['country'] . "', login='" . $input['login']. "', password='" . $input['password']."' WHERE ID='" . $input['ID'] . "'");
	} else if ($input['action'] == 'delete') {
	    $mysqli->query("UPDATE tableregistration SET deleted=1 WHERE ID='" . $input['ID'] . "'");
	} else if ($input['action'] == 'restore') {
	    $mysqli->query("UPDATE tableregistration SET deleted=0 WHERE ID='" . $input['ID'] . "'");
	}

	mysqli_close($mysqli);

	echo json_encode($input);
}
?>