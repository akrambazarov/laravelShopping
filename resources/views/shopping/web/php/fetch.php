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
					<thead>
						<tr>
							<th>Товар</th>
							
							<th></th>
							<th></th>
							<th></th>
							
							<th>Описание Товара</th>
							<th></th>	
							
							<th>Цена</th>
						</tr>
						</thead>';
	while($row = mysqli_fetch_array($result))
	{
		$output .= '
			<tbody >
			<tr>
				
				<td class ="b-bottom">
				<a href=" '.$row["id"].'.ht">
				<img width="64" height="64" src="img/product/'.$row["image_link"].'">
				</a>
				</td>

				<td class ="b-bottom">
				<a href =" '.$row["id"].'.html'.' ">'.$row["name"].'</a></td>
				<td></td>
				<td></td>
				<td class="b-bottom">'.$row["descreption"].'</td>

				<td></td>
				<td class="b-bottom" >'.$row["price"].'c </td>
			</tr>

			</tbody>
		';
	}
	echo $output;
}
else
{
	echo '';
}
?>