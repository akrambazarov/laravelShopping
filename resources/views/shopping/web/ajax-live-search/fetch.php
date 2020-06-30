<?php
$connect = mysqli_connect("localhost", "root", "root", "newshop");
$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($connect, $_POST["query"]);
	$query = "
	SELECT * FROM sub 
	WHERE name LIKE '%".$search."%'
	OR image_link LIKE '%".$search."%' 
	OR descreption LIKE '%".$search."%' 
	OR price LIKE '%".$search."%' 
	OR ISBN LIKE '%".$search."%'
	";
}
else
{
	$query = "
	SELECT * FROM sub ORDER BY id";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
	$output .= '<div class="table-responsive">
					<table class="table table bordered">
						<tr>
							<th>Customer Name</th>
							<th>Address</th>
							<th>City</th>
							<th>Postal Code</th>
							<th>Country</th>
						</tr>';
	while($row = mysqli_fetch_array($result))
	{
		$output .= '
			<tr>
				<td>'.$row["name"].'</td>
				<td><img src/'.$row["image_link"].'></td>
				<td>'.$row["descreption"].'</td>
				<td>'.$row["price"].'</td>
				<td>'.$row["ISBN"].'</td>
			</tr>
		';
	}
	echo $output;
}
else
{
	echo 'Data Not Found';
}
?>