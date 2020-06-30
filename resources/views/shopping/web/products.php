<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="css/flaticon.css"/>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<style type="text/css">
		*{
			padding: 0px;
			margin: 0px;
		}
		.product{
			height: 80vh;
			padding: 50px 20px;
			/*background: #e5e6ea;*/
			display: grid;
			grid-template-columns: 65% 1fr;
		}
		.product-item-cart{
			/*width: fit-content;*/
		}
		.product-title{
			font-family: "Trebuchet MS",Helevetica,sans-serif;

		}
		.product-title h2,.product-section h2{
			color: #333333;
			font-weight: 500;
		}
		.product-section{
			display: flex;
			width: 100%;
			justify-content: space-between;
		    align-items: center;
		    height: auto;
		    padding: 10px 0px;
		    border-bottom: 1px solid #e8e8e8;

		}

		.product-section-img{
			width: 120px;
			height: 120px;
		}
		.product-section-img img{
			width: 180px;
			height: 180px;
		
		}
		.product-section-title{
		font-family: inherit;
	    font-size: 14px;
	    font-weight: 300;
	    margin-left: -20px;
		}
		.product-section-components{

		}
		.product-section-price h3{
			font-size: 20px;
			font-family: 'Open Sans', sans-serif;
			font-weight: 600;
		}
		.product-section-components input,.product-section-components button{
			width: 30px;
			padding: 3px;
			border-radius: 3px;
			font-size: 18px;
			color: #2d2d2d;
			background: none;
			outline: none;
			border: 1px solid #c7c7c7;
		}
		.product-section-components button{
			border: 0;
			font-size: 14px;
		}
		.product-section-footer .product-section-closeCart ol{
			float: left;
		    display: flex;
		    align-items: center;
		    font-size: 14px;
		    width: 300px;
		    padding: 30px 20px;
		    list-style: none;
		}
		.product-section-footer h2{
			font-size: 14px;
		    color: #6299f0;
		    font-weight: 400;
		}
		.product-section-total{padding: 30px 20px}
		.product-section-total span i{font-style: initial;}
	</style>
	<div class="product">
		<div class="product-item-cart">
			<div class="product-header">
				<div class="product-title">
					<h2>Корзина</h2>
					<?php

					$dbc  = new mysqli("Localhost","root","root","newshop");
					$lastId = $dbc -> query("SELECT MAX(`id`+1) FROM sub");
					//file_put_contents($lastId."html","hdsj");
					$dbc -> insert_id;
					//$last = R::findLast(`sub`);
					echo "<span>".$dbc -> insert_id."</span>";
					
					?>
				</div>
			</div>
			<div class="product-section">
				<div class="product-section-img">
					<img src="img/product/1.jpg">
				</div>
				<div class="product-section-title">
					<h2>Товар</h2><br><span>Краткая описание</span>
				</div>
				<div class="product-section-components">
					<button>-</button>
					<input type="text" width="40px">
					<button>+</button>
				</div>
				<div class="product-section-price">
					<h3>120.00<sup>c</sup></h3>
				</div>
				<div class="product-section-del"><span>×</span></div>
			</div>
						<div class="product-section">
				<div class="product-section-img">
					<img src="img/product/1.jpg">
				</div>
				<div class="product-section-title">
					<h2>Товар</h2><br><span>Краткая описание</span>
				</div>
				<div class="product-section-components">
					<button>-</button>
					<input type="text" width="40px">
					<button>+</button>
				</div>
				<div class="product-section-price">
					<h3>120.00<sup>c</sup></h3>
				</div>
				<div class="product-section-del"><span>×</span></div>
			</div>
						<div class="product-section">
				<div class="product-section-img">
					<img src="img/product/1.jpg">
				</div>
				<div class="product-section-title">
					<h2>Товар</h2><br><span>Краткая описание</span>
				</div>
				<div class="product-section-components">
					<button>-</button>
					<input type="text" width="40px">
					<button>+</button>
				</div>
				<div class="product-section-price">
					<h3>120.00<sup>c</sup></h3>
				</div>
				<div class="product-section-del"><span>×</span></div>
			</div>
			
			<div class="product-section-footer">
				<div class="product-section-closeCart">
					<ol class="">
	        			<li>
	        				<i class="fa fa-angle-right"><-</i>&nbsp;&nbsp;
	        			</li>
	        			<li><h2>Продолжить покупку</h2></li>
	    			</ol>
	    		</div>
	    		<div class="product-section-total pull-right">
	    			<span>Ценна: <i>360</i> c</span>
	    		</div>
			</div>
		</div>
		<div class="product-cart-order">
			<div class="cart-order">
				<div class="cart-order-header">
					<div class="cart-order-title">
						<h2>Моя карта</h2><br>
						<span>Тип карты</span>	
					</div>
				</div>
				<div class="cart-order-section">
					<div class="cart-order-date-title">
						<h2>Visa</h2>
						<span class="p-relative" style="color: #848484;">Visa</span>
					</div>
					<div class="cart-order-date-section">
						<div class="cart-order-date-span">
							<span>****</span><span>****</span><span>****</span><span>****</span>
						</div>
					<div>
						<h2>Банковская карта</h2>
					</div>
					<div class="cart-order-img">
						<img src="img/product/2.jpg" width="64" height="64">
					</div>
				</div>	
			</div>
			<form class="cart-form">
				<input type="tel" name="" minlength="4" maxlength="4" placeholder="0000">
				<input type="tel" name="" minlength="4" maxlength="4"placeholder="0000">
				<input type="tel" name="" minlength="4" maxlength="4"placeholder="0000">
				<input type="tel" name="" minlength="4" maxlength="4"placeholder="0000">
				<div class="p-t-30">
					<span style="padding: 0">Дестевительность карты</span>
					<div>
						<input type="tel" minlength="2" maxlength="2" name="" style="width: 50px" placeholder="mm">
						<input type="tel" minlength="2" maxlength="2" name="" style="width: 50px" placeholder="yyy">
						<input type="tel" name="" minlength="3" maxlength="3" placeholder="cvv" style="float: right;">
					</div>
					
				</div>
				<div class="b-bottom-white p-t-30"></div>
				<button type="submit" class="checkOut m-t-30">Оплатить</button>
			</form>	
		</div>
	</div>
	<style type="text/css">
		.product-cart-order{
			padding: 0px 0px;
		    display: flex;
		    justify-content: flex-end;
}
		.product-cart-order .cart-order{
			background: #393a41;
			width: 360px;
			border-radius: 5px;
			height: auto;
		}
		.product-cart-order   h2,.cart-order  span{
			font-size: 20px;
			font-weight: 600;
			font-family: "Trebuchet MS",Helevetica,sans-serif;;
			color: #ffe;
			padding: 20px;
		}
		.product-cart-order  span{
			font-size: 14px;
			
		}
		.cart-order-section{
			margin-left: -50px;
		    padding: 10px 0px;
		    background: linear-gradient(161deg, #ccced1, #919398,#929294);
		    width: 305px;
		    border-radius: 4px;
    		box-shadow: 1px 2px 10px 0px #28292e;
		}
		.cart-order-date-section{
			position: relative;
    		top: 0px;
		}
		.cart-order-date-title{
			position: relative;
		    top: 0px;
		    left: 0px;
		}
		.cart-order-date-title .p-relative{
			position: absolute;
		    top: -20px;
		    right: 0px;
		    
		}
		 .cart-order-img{
			position: absolute;
		    top: -16px;
		    right: -75px;
		}
		.cart-form{
			padding: 30px 20px;
		}
		.cart-form input{
			width: 60px;
			border: 0;
			color: #ffe;
			background: none;
			outline: none;
			padding: 5px 3px;
			font-size: 20px;
			border-bottom: 1px solid#d8d5d5;
		}

		.b-bottom-white{
			border-bottom: 1px solid #d8d5d5;
		}
		.checkOut{
			padding: 10px 117px;
			background: #3d7aee;
			color: #ffe;
			font-family: "Trebuchet MS",Helevetica,sans-serif;
			font-weight: 600;
			font-size: 18px;
			border-radius: 3px;
			width: 100%;
		}
	</style>
</body>
</html>