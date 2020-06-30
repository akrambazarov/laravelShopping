<?php
session_start();
$dbconnect= mysqli_connect('localhost','root','root','newshop') or die("error connect to database");
if (isset($_POST['add_to_cart'])) {
	if (isset($_SESSION['shopping_cart'])) {
		$item_array_id=array_column($_SESSION['shopping_cart'], "item_id");
		if (!in_array($_GET["id"], $item_array_id)) {
			$count=count($_SESSION['shopping_cart']);
			$item_array=array(
		'item_id'		=> $_GET['id'],
		'item_name'		=>$_POST['hidden_name'],
		'item_price'	=>$_POST['hidden_price'],
		'item_image' 	=>$_POST['hidden_img'],
		'item_quantity' =>$_POST['quantity']
	);
			$_SESSION['shopping_cart'][$count]=$item_array; 
		}else{
			// echo '<script>alert("Item Already Added")</script>';
			echo '<script>window.location="shoppingcart.php"</script>';
		}
	}

else{
	$item_array=array(
'item_id'		=> $_GET['id'],
'item_name'		=>$_POST['hidden_name'],
'item_price'	=>$_POST['hidden_price'],
'item_image' 	=>$_POST['hidden_img'],
'item_quantity' =>$_POST['quantity']
	);
	$_SESSION['shopping_cart'][0]=$item_array;
}
}
if (isset($_GET["action"])) {
	if ($_GET["action"]=="delete") {
		foreach ($_SESSION["shopping_cart"] as $key => $value) {
			if ($value["item_id"]==$_GET["id"]) {
				unset($_SESSION["shopping_cart"][$key]);
				// echo '<script>alert("Item Removed")</script>';
				echo "<script>window.location='shoppingcart.php'</script>";
			}
		}
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Мужские новинки</title>
	<link rel="stylesheet" type="text/css" href="Css/style_2.css">
	<link rel="stylesheet" type="text/css" href="../css/styleIndex.css">
</head>
<body>

<?php
include_once "header.php";

?>

<article id="gallery">
<!-- 	<div id="textinphoto">
<h4>Has just arrived</h4>
<h1>Summer Collection 2019</h1>
<span>
Swimwear,Tops,Short,Sunglasses &much more..</span>
</div> -->
		<div class="photos">
			<img src="../image/sh.jpg" class="showed">
			<img src="../image/johangir.jpg">
			<img src="../image/10000749.jpg">
		</div>
		<div class="moveslide">
			<span class="prev" style="opacity: 0; left: 50px; transition: all 0.3s ease-in-out 0s;"><p>‹</p></span>
			<span class="next" style="opacity: 0; right: 50px; transition: all 0.3s ease-in-out 0s;"><p>›</p></span>
		</div>

	</article>
	<div class="mwk">
	<div id="men">
		<img src="../image/cat-sm01.jpg"><br>
		<span>Men</span>
	</div>
	<div id="women">
		<img src="../image/cat-sm02.jpg"><br>
		<span>Women</span>
	</div>
	<div id="kids">
		<img src="../image/cat-sm03.jpg"><br>
		<span>Kids</span>
	</div>
</div>
<div class="container" style="width: 900px">
	<center><h3 >Мужские новинки</h3></center>
	<?php
$query="SELECT * FROM `sub` ORDER BY id ASC";
$result=mysqli_query($dbconnect,$query);
if (mysqli_num_rows($result)>0) {
	while ($row=mysqli_fetch_array($result)) {
	

	?>

	<div class="products-center">
		<form method="post" action="newmen.php?action=add&id=<?php echo $row["id"];?>" class="product">
			<div style="border-radius: 10px;" class="img-container">
				<img src="../image/<?php echo $row['image_link'];?>"><br>
				<h4 class="text-info" style="font-size: 14px"><?php echo $row['name'] ?></h4>
				<h4 class="text-danger"><?php echo $row['price'] ?>сомон</h4>
				<h4 class="text-danger">-</h4>
				<h4 class="text-danger">+</h4>
				<input type="number" name="quantity" class="forminput" value="1">
				<input type="hidden" name="hidden_name" value="<?php echo $row['name'];?>">
				<input type="hidden" name="hidden_price" value="<?php echo $row['price'];?>">
				
				<center><button  name="add_to_cart" style="margin: 5px auto;" class="btn_a" value="">add to cart</button></center>
			</div>
		</form>
		
	</div>
	<?php }}
	?>
</div>
<style type="text/css">
@keyframes	fadeInUp{
	0%{opacity:0;
	-webkit-transform:translate3d(0,60%,0);
	transform:translate3d(0,60%,0);
}
	to{opacity:1;-webkit-transform:translateZ(0);transform:translateZ(0)}}
	.freecart{
	text-align: center;
	position: absolute;
top: 65px;
left: 30px;
font-family: "Open SN","Verdana"sans-serif;
font-weight: 300;
	}
	.freecartag{
		left: 90px;
		top: 70px;
	}
</style>
<div style="clear: both; ">
	<div class="table-responsive" style="	animation: fadeInUp .3s ease-in 1;">
		<table class="table table-bordered">
		
			<?php
		
if (!empty($_SESSION['shopping_cart'])) {
	$total=0;
	foreach ($_SESSION["shopping_cart"] as $key => $value) {
		?><tr>

		
			<h4 style="float: left; width: 160px;"><?php echo $value["item_name"];?></h4>
			<h5 style="float: left;">-</h5>
			<h5 style="float: left;"><?php echo $value["item_quantity"]."шт";?></h5>
			<h5 style="float: left; width: 40px">+</h5>
			<h4 style="float: left; width: 50px"><?php echo $value["item_price"];?> с</h4>
		
			<a href="newmen.php?action=delete&id=<?php echo $value["item_id"]?>" style="float: right;"><span class="text-danger">×</span></a>
		</tr><?php
		$total=$total+($value["item_quantity"]*$value["item_price"]);
	}
	?>
	<tr>
		<td colspan="3" align="right">Total</td>
		<td align="right"><?php echo $num=number_format($total,2); ?> сомон</td>
		<td colspan="3" style="transform: translateX(19px);"><a href="">Оформит заказ</a></td>
	</tr>
	<?php
}
else{echo "<img width='50' height='50' class='freecart' src='image/1490129319-rounded09_82169.png'><h2 class='freecart freecartag'>Корзина пуста</h2>";}
?>
		
		</table>
	</div>
</div>
<?php
include_once "footer.php";
?>

<script type="text/javascript">
	$(".card").mouseenter(function(){
		$(".table-responsive").css("display","block");
	});	
	$(".table-responsive").mouseenter(function(){
		$(".table-responsive").css("display","block");
	});
	$(".card").mouseleave(function(){
		$(".table-responsive").css("display","none");
	});
	$(".table-responsive").mouseleave(function(){
		$(".table-responsive").css("display","none");
	});
	function quannum(num){
		var num=$(".forminput");
		if (num<0) {
			console.log("small 0");
		}
		quannum(num);
	}
</script>
<script type="text/javascript" src="JS/jquery.min.js"></script>
<script type="text/javascript" src="JS/lightslider.js"></script>
<script type="text/javascript" src="JS/script.js"></script>
<script type="text/javascript" src="JS/jsSlider.js"></script>

</body>
</html>