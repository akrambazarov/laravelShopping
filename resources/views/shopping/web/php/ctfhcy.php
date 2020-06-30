<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Shopping | Мужские шапки</title>
    <meta charset="UTF-8">
    <meta name="description" content=" Divisima | eCommerce Template">
    <meta name="keywords" content="divisima, eCommerce, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="shortcut icon"/>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,300i,400,400i,700,700i" rel="stylesheet">


    <!-- Stylesheets -->
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/flaticon.css">
    <link rel="stylesheet" href="../css/jquery-ui.min.css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/animate.css">
    <link rel="stylesheet" href="../css/style.css">


    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header section -->
   <header class="header">
        <div class="header-title">
            <div class="logo-title">
                <div class="logo">
                    <a href="indexShop.html"><h1>Shopping.<sub><em>tj</em></sub></h1></a>
                    <span id="burgerbtn_cat">☰</span>
                </div>
            </div>
            <div class="search">
                <form method="POST" action="ctfhcy.php">
                    <input type="search" name="search" id="search">
                    <span data-placeholder="Поиск..."></span>
                    <button type="submit"><img src="../img/icons/search-fdmas.png" width="16" height="16"></button>
                </form>
                    <div id="result"></div>
            </div>
            <div class="account-cart">
    <section class="account">
        <img src="../img/icons/1499345621-contact_85338.png" width="16" height="16" class="img-regist">
        <span class="hello-users">Привет<img src="../img/icons/cart.png" class="exit-user-none" width="20" height="20" style="transform: rotate(90deg);/*transform: translate(2px,4px); */   margin-left: 10px;"></span>
        <h3 style="font-size: 13px; margin-top: 5px;"></h3>
    </section>
    <section class="cart" style="transform: translateY(15px);">
        <i class="flaticon-bag"></i><br>
        <span class="quantity-goods">0</span><br>
        <!-- <h4 style="margin-top: 15px;">0.00</h4> -->
    </section>
    
</div>
        </div>
    </header>

    <!-- Header section end -->
	<!-- Registration section -->
	<!-- Account  -->
<div class="registration" style="z-index: 111; height: 530px; margin-top: 25px; display: none;">

<header>
    <div id="block_1" style="border-bottom: 1px solid transparent;">
        <img src="../image/accaunt12.png" width="128">
        <h3>Sign in</h3>
    </div>
    <div id="block_2" style="border-bottom: 1px solid rgb(254, 105, 106);">
        <img src="../image/1499345621-contact_85338.png">
        <h3>Sign Up</h3>
    </div>
    <span class="closeform">×</span>
</header>
<section id="form_block_1" style="display: none;">

    <div id="inform_block_1">
    <form class="formAutoRegistration" id="formAutoRegistration">
<div class="blockform_1">
    <label class="warning"></label><br>
    <label for="email_sign_in">Email addres <i>*</i></label>
    <input type="email" name="email_sign_in" placeholder="admin@example.com">
    <div class="chekEmail"><p>✓</p></div>
    <label for="pass_sign_in">Password <i>*</i></label>
    <img src="image/ayers.png" class="inp_pass" id="pasbtnregist">
    <input type="password" name="pass_sign_in" class="show_pass">
</div>
    <div id="rememberForm_1">
    <input type="checkbox" name="remember_me" style="width: 15px;height: 15px;">
    <label for="remember_me">Remember me</label>
    <a href="http://localhost/shopping/index.html#">Forgot password?</a>
    </div>
    <button name="autoregistration" id="registarationbtn">Авторизация</button>
</form></div>
</section>


<section id="form_block_2" style="display: block;">
    <div id="inform_block_2">
    <form id="formRegistration">
        
    <label for="name_sign_in" data-placeholder="Full name "></label><i class="warningName" style="float: right;
    margin-top: -13px;"></i>

    <input type="text" id="name_sign_in" name="name_sign_in" placeholder="John Doe">
    <label for="phone_sign_up">Phone Number <i>*</i></label>
        
    <input type="number" pattern="[-+]?[0-9]" id="phone_sign_up" name="phone_sign_up" placeholder="Телефонный номер"> 
    <label for="country_sign_up">Country <i>*</i></label>
    <input type="text" id="country_sign_up" name="country_sign_up" placeholder="Ваш город (Регион)">
    <label for="email_sign_up">Email addres <i>*</i></label>
    <label class="text-title" style="font-size: 12px;float: right;"></label>

    <input type="email" pattern="email@example.com" id="email_sign_up" name="email_sign_up" placeholder="johndoe@example.com" class="input_1 checkEmail">
    <div class="chekEmail"><span>✓</span></div>
    <label for="pass_sign_up">Password <i>*</i></label>
    <img src="../image/ayers.png" class="inp_pass" id="pasbtn">
    <label class="checkdpas" style="font-size: 12px; float: right;">
</label>
    <input type="password"  title="Ведите пароль от 6 до 32 символов" maxlength="32" minlength="6" id="pass_sign_up" name="pass_sign_up" placeholder="Password username" class="show_pass"> 
    <label for="pass_sign_up_again">Confirm Password <i>*</i></label>
    <img src="../image/ayers.png" class="inp_pass" id="pasbtnone">
        <label class="pasagain" style="font-size: 12px;float: right;"></label>
    <input type="password" title="Ведите пароль от 6 до 32 символов" maxlength="32" minlength="6" id="pass_sign_up_again" name="pass_sign_up_again" placeholder="Confirm password" class="show_pass">
    <button type="button" id="sectionform_2" class="sectionform_2">Sign in</button>
</form>
</div>
    

</section>

</div>
<!-- Account end -->
	<!-- Registration section end -->

<div class="cat-content">
	<ol class="breadcrumb page-breadcrumb pull-right">
        <li><i class="fa fa-home"></i>&nbsp;<a href="indexShop.html">Главная</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
        <li class="hidden"><a href="#">Мужские</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
    </ol>
</div>
<style type="text/css">
	ol{
		list-style: none;
	}
	ol li i a:hover{
		color: #e46363;
	}

</style>
	<!-- Page info -->

	<!-- Page info end -->


	<!-- Category section -->
	<section class="category-section spad">
		<div class="container">
			<div class="d-grid">
				<div class="col-lg-3 order-2 order-lg-1 burg-menu">
					<div class="filter-widget">
						<h2 class="fw-title">Категории</h2>
						<ul class="category-menu">
							<li><a href="#">Men</a>
								<ul class="sub-menu">
      <li><a href="http://localhost/shopping/newmen.php">Новинки</a></li>
                    <li><a href="http://localhost/shopping/menshapka.php">Шапка</a></li>
                    <li><a href="http://localhost/shopping/index.html#">Кепка</a></li>
                    <li><a href="http://localhost/shopping/index.html#">Шарф</a></li>
                    <li><a href="http://localhost/shopping/index.html#">Костюмы</a></li>
                    <li><a href="http://localhost/shopping/index.html#">Пиджак</a></li>
                    <li><a href="http://localhost/shopping/index.html#">Рубашка</a></li>
                    <li><a href="http://localhost/shopping/index.html#">Поливер</a></li>
                    <li><a href="http://localhost/shopping/index.html#">Дженфер</a></li>
                    <li><a href="http://localhost/shopping/index.html#">Ветрофка</a></li>
                    <li><a href="http://localhost/shopping/index.html#">Коженка</a></li>
                    <li><a href="http://localhost/shopping/index.html#">Куртки</a></li>
                    <li><a href="http://localhost/shopping/index.html#">Пальто</a></li>
                    <li><a href="http://localhost/shopping/index.html#">Туфли</a></li>
                    <li><a href="http://localhost/shopping/index.html#">Кеты</a></li>
                    <li><a href="http://localhost/shopping/index.html#">Макасимы</a></li>
								</ul>
							</li>
							<li><a href="#">Women</a>
								<ul class="sub-menu">
						      <li><a href="http://localhost/shopping/newmen.php">Новинки</a></li>
                    <li><a href="http://localhost/shopping/menshapka.php">Шапка</a></li>
                    <li><a href="http://localhost/shopping/index.html#">Кепка</a></li>
                    <li><a href="http://localhost/shopping/index.html#">Шарф</a></li>
                    <li><a href="http://localhost/shopping/index.html#">Костюмы</a></li>
                    <li><a href="http://localhost/shopping/index.html#">Пиджак</a></li>
                    <li><a href="http://localhost/shopping/index.html#">Рубашка</a></li>
                    <li><a href="http://localhost/shopping/index.html#">Поливер</a></li>
                    <li><a href="http://localhost/shopping/index.html#">Дженфер</a></li>
                    <li><a href="http://localhost/shopping/index.html#">Ветрофка</a></li>
                    <li><a href="http://localhost/shopping/index.html#">Коженка</a></li>
                    <li><a href="http://localhost/shopping/index.html#">Куртки</a></li>
                    <li><a href="http://localhost/shopping/index.html#">Пальто</a></li>
                    <li><a href="http://localhost/shopping/index.html#">Туфли</a></li>
                    <li><a href="http://localhost/shopping/index.html#">Кеты</a></li>
                    <li><a href="http://localhost/shopping/index.html#">Макасимы</a></li>
								</ul></li><li><a href="#">Kids</a>
								<ul class="sub-menu">
						      <li><a href="http://localhost/shopping/newmen.php">Новинки</a></li>
                    <li><a href="http://localhost/shopping/menshapka.php">Шапка</a></li>
                    <li><a href="http://localhost/shopping/index.html#">Кепка</a></li>
                    <li><a href="http://localhost/shopping/index.html#">Шарф</a></li>
                    <li><a href="http://localhost/shopping/index.html#">Костюмы</a></li>
                    <li><a href="http://localhost/shopping/index.html#">Пиджак</a></li>
                    <li><a href="http://localhost/shopping/index.html#">Рубашка</a></li>
                    <li><a href="http://localhost/shopping/index.html#">Поливер</a></li>
                    <li><a href="http://localhost/shopping/index.html#">Дженфер</a></li>
                    <li><a href="http://localhost/shopping/index.html#">Ветрофка</a></li>
                    <li><a href="http://localhost/shopping/index.html#">Коженка</a></li>
                    <li><a href="http://localhost/shopping/index.html#">Куртки</a></li>
                    <li><a href="http://localhost/shopping/index.html#">Пальто</a></li>
                    <li><a href="http://localhost/shopping/index.html#">Туфли</a></li>
                    <li><a href="http://localhost/shopping/index.html#">Кеты</a></li>
                    <li><a href="http://localhost/shopping/index.html#">Макасимы</a></li>
								</ul></li>
						</ul>
					</div>		
					<div class="cartGoods filter-widget mb-0">cart</div>
					<div class="cartGoods filter-widget mb-0">
						<h2 class="fw-title">Цена от</h2>
						<div class="price-range-wrap">
							<h4>Цена</h4>
							<div id="slider-range"></div>
				<p>
  <label for="amount"></label>
  <label for="amountMax"></label>
  <input type="text" id="amount" name="amount" readonly style="border:0; color:#333; ">
  <input type="text" id="amountMax"name="amountMax"  readonly style="border:0; color:#333; float: right;width: 40px">
</p>
		</div>
	</div>
	<div class="filter-widget mb-0">
						<h2 class="fw-title">color by</h2>
						<div class="fw-color-choose">
							<div class="cs-item">
								<input type="radio" name="cs" id="gray-color" value="gray">
								<label class="cs-gray" for="gray-color">
								
								</label>
							</div>
							<div class="cs-item">
								<input type="radio" name="cs" id="orange-color" value="orange">
								<label class="cs-orange" for="orange-color">
								
								</label>
							</div>
							<div class="cs-item">
								<input type="radio" name="cs" id="yollow-color" value="yollow">
								<label class="cs-yollow" for="yollow-color">
								
								</label>
							</div>
							<div class="cs-item">
								<input type="radio" name="cs" id="green-color" value="green">
								<label class="cs-green" for="green-color">
								
								</label>
							</div>
							<div class="cs-item">
								<input type="radio" name="cs" id="purple-color" value="purple">
								<label class="cs-purple" for="purple-color">
								
								</label>
							</div>
							<div class="cs-item">
								<input type="radio" name="cs" id="blue-color" value="blue">
								<label class="cs-blue" for="blue-color">
								
								</label>
							</div>


							<div class="cs-item">
								<input type="radio" name="cs" id="black-color" value="gray">
								<label class="cs-black" for="black-color">
								
								</label>
							</div>
							<div class="cs-item">
								<input type="radio" name="cs" id="burlywood-color" value="orange">
								<label class="cs-burlywood" for="burlywood-color">
								
								</label>
							</div>
							<div class="cs-item">
								<input type="radio" name="cs" id="red-color" value="yollow">
								<label class="cs-red" for="red-color">
								
								</label>
							</div>
							<div class="cs-item">
								<input type="radio" name="cs" id="white-color" value="green">
								<label class="cs-white" for="white-color">
								
								</label>
							</div>
							<div class="cs-item">
								<input type="radio" name="cs" id="dark-grey-color" value="purple">
								<label class="cs-dark-grey" for="dark-grey-color">
								
								</label>
							</div>
							<div class="cs-item">
								<input type="radio" name="cs" id="yellow-color" value="blue">
								<label class="cs-yellow" for="yellow-color">
								
								</label>
							</div>
						</div>
					</div>
					<div class="filter-widget mb-0">
						<h2 class="fw-title">Size</h2>
						<div class="fw-size-choose">
							<div class="sc-item">
								<input type="radio" name="sc" id="xs-size" value="xs">
								<label for="xs-size">XS</label>
							</div>
							<div class="sc-item">
								<input type="radio" name="sc" id="s-size" value="s">
								<label for="s-size">S</label>
							</div>
							<div class="sc-item">
								<input type="radio" name="sc" id="m-size" value="m">
								<label for="m-size">M</label>
							</div>
							<div class="sc-item">
								<input type="radio" name="sc" id="l-size" value="L">
								<label for="l-size">L</label>
							</div>
							<div class="sc-item">
								<input type="radio" name="sc" id="xl-size" value="XL">
								<label for="xl-size">XL</label>
							</div>
							<div class="sc-item">
								<input type="radio" name="sc" id="xxl-size" value="XXL">
								<label for="xxl-size">XXL</label>
							</div>
						</div>
					</div>
					<div class="filter-widget">
						<h2 class="fw-title">Brand</h2>
						<ul class="category-menu">
							<li><a href="#">Fashion </a></li>
							<li><a href="#">Salamonder</a></li>
							<li><a href="#">POLO Clean</a></li>
							<li><a href="#">Missguided</a></li>
							<li><a href="#">Zara</a></li>
						</ul>
					</div>
				</div>

				<div class="col-lg-9  order-1 order-lg-2 mb-5 mb-lg-0 " >

					<div class=" d-grid-product">
					<?php
$dbconnect = mysqli_connect("Localhost","root","root","newshop") or die("MYSQL");
// if (isset($_POST['search'])) {
	$search=explode(" ", $_POST['search']);
	$count=count($search);
	$array=array();
	$i=0;
	foreach ($search as $key) {
		$i++;
		if ($i<$count)
		$array[]="CONCAT (`name`,`price`,`descreption`) LIKE '%".$key."%' OR ";
		else
		$array[]="CONCAT (`name`,`price`,`descreption`) LIKE '%".$key."%'";
		
	}
	$sql="SELECT * FROM `sub` WHERE ".implode("",$array);
	$query = mysqli_query($dbconnect,"SELECT * FROM `sub` WHERE ".implode("",$array));

while ($row=mysqli_fetch_assoc($query)) {

	echo '<div class="product-item">
                    <div class="product-content">
                        <div class="pi-pic">
                            <img src="../img/product/'.$row["image_link"].'" alt="'.$row["descreption"].'">
                            <div class="pi-links">
                                <a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                                <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
                            </div>
                        </div>
                        <div class="pi-text">
                            <h6>'.$row["price"].'</h6>
                            <p>'.$row["name"].'</p>
                        </div>
                    </div>
                </div>
                ';
}
// }
?>
						<div class="text-center w-100 pt-3">
							<button class="btn_a">LOAD MORE</button>
						</div>
					</div>
				</div>
			</div>
		<!-- </div> -->
	</section>
	<!-- Category section end -->


	<!-- Footer section -->

 <div class="container" style="float: left;"><div class="b-bottom"></div></div>

	<footer>

<div class="help">
    <h2>Помощь</h2>
    <div class="spnColumns">
        <li><span>Заказать по номеру</span></li>
        <li><span>Центр поддержки Shopping</span></li>
        <li><span>Как оформить заказ</span></li>
        <li><span>Как выбрать размер</span></li>
        <li><span>Условия доставки</span></li>
        <li><span>Мои заказы</span></li>
    </div>
</div>
<div class="columnsSocial">
    <h2>Мы в соцсетях</h2>
    <div class="spnColumns">
        <li><span>Fashion-блог Shopping</span></li><a href="http://localhost/shopping/index.html"><img src="../img/icons/social-37-512.png"></a>
        <a href="#"><img src="../img/icons/facebook333.png"></a>
        <a href="#"><img src="../img/icons/icons8-телеграмма-app-48.png"></a>
        <a href="#"><img src="../img/icons/vk333.png" style="border-radius: 50%;"></a>

        <a href="http://localhost/shopping/index.html#"><img src="../img/icons/instagram333.png"></a>
    </div>
</div><div class="columnsHelp">
    <h2>Партнерам</h2>
    <div class="spnColumns">
        <li><span>10% от заказа</span></li>
        <li><span>Мега-Цена от Shoping.<sub><em>tj</em></sub></span></li>
        <li><span>VIP - обслуживание</span></li>
            <li><span>Возврат</span></li>

    </div>

</div>
    </footer>
	<!-- Footer section end -->
<div id="top" class="animated fadeInRight" style="display: block;">
    <h1><span class="animated bounceInDown">Top</span></h1><h2>^</h2>
</div>
    <!--====== Javascripts & Jquery ======-->
    <script src="../js/jquery-3.2.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.slicknav.min.js"></script>
    <script src="../js/owl.carousel.min.js"></script>
    <script src="../js/jquery.nicescroll.min.js"></script>
    <script src="../js/jquery.zoom.min.js"></script>
    <script src="../js/jquery-ui.min.js"></script>
    <script src="../js/main.js"></script>
    <script src="../js/scriptHtml.js"></script>

	</body>
</html>


</body>
</html>