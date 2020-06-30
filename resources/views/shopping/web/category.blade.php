<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Shopping | Мужские шапки</title>
    <meta charset="UTF-8">
    <meta name="description" content="Shopping | Мужские шапки">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="shortcut icon"/>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,300i,400,400i,700,700i" rel="stylesheet">


    <!-- Stylesheets -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/jquery-ui.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/cart.css">


    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
    <!-- Page Preloder -->
    <div id="preloder">
    	<h3><h1>Sh</h1><span>opping.<sub>tj</sub></span></h3>
        <div class="loader"></div>
        <div class="animateShopping">


    </div>
    </div>
    <!-- Header section -->
   <header class="header">
        <div class="header-title">
            <div class="logo-title">
                <div class="logo">
                    <a href="/"><h1>Shopping.<sub><em>tj</em></sub></h1></a>
                    <span id="burgerbtn_cat">☰</span>
                </div>
            </div>
            <div class="search">
                <form method="POST" action="php/ctfhcy.php">
                    <input type="search" name="search" id="search">
                    <span data-placeholder="Поиск..."></span>
                    <button type="submit"><img src="img/icons/search-fdmas.png" width="16" height="16"></button>
                </form>
                    <div id="result"></div>
            </div>
            <div class="account-cart">
    <section class="account">
        <img src="img/icons/1499345621-contact_85338.png" width="16" height="16" class="img-regist">
        <span class="hello-users">Привет<img src="img/icons/cart.png" class="exit-user-none" width="20" height="20" style="transform: rotate(90deg);/*transform: translate(2px,4px); */   margin-left: 10px;"></span>
        <h3 style="font-size: 13px; margin-top: 5px;"></h3>
    </section>
    <section class="cart">
<div class="label-place"></div>
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
        <img src="image/accaunt12.png" width="128">
        <h3>Sign in</h3>
    </div>
    <div id="block_2" style="border-bottom: 1px solid rgb(254, 105, 106);">
        <img src="image/1499345621-contact_85338.png">
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

    <input type="tel" minlength="9" maxlength="14" pattern="[-+]?[0-9]" id="phone_sign_up" name="phone_sign_up" placeholder="Телефонный номер">
    <label for="country_sign_up">Country <i>*</i></label>
    <input type="text" id="country_sign_up" name="country_sign_up" placeholder="Ваш город (Регион)">
    <label for="email_sign_up">Email addres <i>*</i></label>
    <label class="text-title" style="font-size: 12px;float: right;"></label>

    <input type="email" pattern="email@example.com" id="email_sign_up" name="email_sign_up" placeholder="johndoe@example.com" class="input_1 checkEmail">
    <div class="chekEmail"><span>✓</span></div>
    <label for="pass_sign_up">Password <i>*</i></label>
    <img src="image/ayers.png" class="inp_pass" id="pasbtn">
    <label class="" style="font-size: 12px; float: right;">
</label>
    <input type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="Ведите пароль от 6 до 32 символов" maxlength="32" minlength="6" id="pass_sign_up" name="pass_sign_up" placeholder="Password username" class="show_pass">
    <label for="pass_sign_up_again">Confirm Password <i>*</i></label>
    <img src="image/ayers.png" class="inp_pass" id="pasbtnone">
        <label class="pasagain" style="font-size: 12px;float: right;"></label>
    <input type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="Ведите пароль от 6 до 32 символов" maxlength="32" minlength="6" id="pass_sign_up_again" name="pass_sign_up_again" placeholder="Confirm password" class="show_pass">
    <button type="button" id="sectionform_2" class="sectionform_2">Sign in</button>
</form>
</div>


</section>

</div>
<!-- Account end -->
	<!-- Registration section end -->

<div class="cat-content">
	<ol class="breadcrumb page-breadcrumb pull-right">
        <li><i class="fa fa-home"></i>&nbsp;<a href="/">Главная</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
        <li class="hidden">
            <a href="#">
{{$category->name}}
{{--                @if($category == 'menshapka')--}}
{{--                    Мужские шапки--}}
{{--                @elseif($category == 'menCap')--}}
{{--                    Мужские Кепки--}}
{{--                @elseif($category == 'mensharf')--}}
{{--                    Мужские Шарфы--}}
{{--                @elseif($category == 'menCostumes')--}}
{{--                    Мужские Костюмы--}}
{{--                @elseif($category == 'menBlazer')--}}
{{--                    Мужской Пиджак--}}
{{--                @elseif($category == 'menShirt')--}}
{{--                    Мужские Рубашки--}}
{{--                @elseif($category == 'menPoliver')--}}
{{--                    Мужские Поливеры--}}
{{--                @elseif($category == 'menJenfer')--}}
{{--                    Мужские Дженферы--}}
{{--                @elseif($category == 'menWindbreaker')--}}
{{--                    Мужские Ветрофки--}}
{{--                @elseif($category == 'menjacket')--}}
{{--                    Мужские Коженки--}}
{{--                @elseif($category == 'menJackets')--}}
{{--                    Мужские Куртки--}}
{{--                @elseif($category == 'menCoat')--}}
{{--                    Мужской Пальто--}}
{{--                @elseif($category == 'menShoes')--}}
{{--                    Мужские туфли--}}
{{--                @elseif($category == 'menChumSalmon')--}}
{{--                    Мужские Кеты--}}
{{--                @elseif($category == 'menMakashima')--}}
{{--                    Мужские Макасимы--}}
{{--                @elseif($category == 'womenshapka')--}}
{{--                    Женские шапки--}}
{{--                @elseif($category == 'womenCap')--}}
{{--                    Женские Кепки--}}
{{--                @elseif($category == 'womensharf')--}}
{{--                    Женские шарфы--}}
{{--                @elseif($category == 'womenCostumes')--}}
{{--                    Женские Костюмы--}}
{{--                @elseif($category == 'womenBlazer')--}}
{{--                    Женские Пиджак--}}
{{--                @elseif($category == 'womenShirt')--}}
{{--                    Женские Рубашки--}}
{{--                @elseif($category == 'womenPoliver')--}}
{{--                    Женские Поливеры--}}
{{--                @elseif($category == 'womenJenfer')--}}
{{--                    Женские Дженферы--}}
{{--                @elseif($category == 'womenWindbreaker')--}}
{{--                    Женские Ветрофки--}}
{{--                @elseif($category == 'womenjacket')--}}
{{--                    Женские Коженки--}}
{{--                @elseif($category == 'womenJackets')--}}
{{--                    Женские Куртки--}}
{{--                @elseif($category == 'womenCoat')--}}
{{--                    Женские Пальто--}}
{{--                @elseif($category == 'womenShoes')--}}
{{--                    Женские туфли--}}
{{--                @elseif($category == 'womenChumSalmon')--}}
{{--                    Женские Кеты--}}
{{--                @elseif($category == 'womenMakashima')--}}
{{--                    Женские Макасимы--}}
{{--                @elseif($category == 'kidsshapka')--}}
{{--                    Детские шапки--}}
{{--                @elseif($category == 'kidsCap')--}}
{{--                    Детские Кепки--}}
{{--                @elseif($category == 'kidssharf')--}}
{{--                    Детские шарфы--}}
{{--                @elseif($category == 'kidsCostumes')--}}
{{--                    Детские Костюмы--}}
{{--                @elseif($category == 'kidsBlazer')--}}
{{--                    Детские Пиджак--}}
{{--                @elseif($category == 'kidsShirt')--}}
{{--                    Детские Рубашки--}}
{{--                @elseif($category == 'kidsPoliver')--}}
{{--                    Детские Поливеры--}}
{{--                @elseif($category == 'kidsJenfer')--}}
{{--                    Детские Дженферы--}}
{{--                @elseif($category == 'kidsWindbreaker')--}}
{{--                    Детские Ветрофки--}}
{{--                @elseif($category == 'kidsjacket')--}}
{{--                    Детские Коженки--}}
{{--                @elseif($category == 'kidsJackets')--}}
{{--                    Детские Куртки--}}
{{--                @elseif($category == 'kidsCoat')--}}
{{--                    Детские Пальто--}}
{{--                @elseif($category == 'kidsShoes')--}}
{{--                    Детские туфли--}}
{{--                @elseif($category == 'kidsChumSalmon')--}}
{{--                    Детские Кеты--}}
{{--                @elseif($category == 'kidsMakashima')--}}
{{--                    Детские Макасимы--}}

{{--            @endif--}}

            </a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
    </ol>
</div>

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
                    <li><a href="/newmen">Новинки</a></li>
                    <li><a href="/menshapka">Шапка</a></li>
                    <li><a href="/menCap">Кепка</a></li>
                    <li><a href="/mensharf">Шарф</a></li>
                    <li><a href="/menCostumes">Костюмы</a></li>
                    <li><a href="/menBlazer">Пиджак</a></li>
                    <li><a href="/menShirt">Рубашка</a></li>
                    <li><a href="/menPoliver">Поливер</a></li>
                    <li><a href="/menJenfer">Дженфер</a></li>
                    <li><a href="/menWindbreaker">Ветрофка</a></li>
                    <li><a href="/menjacket">Коженка</a></li>
                    <li><a href="/menJackets">Куртки</a></li>
                    <li><a href="/menCoat">Пальто</a></li>
                    <li><a href="/menShoes">Туфли</a></li>
                    <li><a href="/menChumSalmon">Кеты</a></li>
                    <li><a href="/menMakashima">Макасимы</a></li>
								</ul>
							</li>
							<li><a href="#">Women</a>
								<ul class="sub-menu">
                    <li><a href="/newwomen">Новинки</a></li>
                    <li><a href="/womenshapka">Шапка</a></li>
                    <li><a href="/womenCap">Кепка</a></li>
                    <li><a href="/womensharf">Шарф</a></li>
                    <li><a href="/womenCostumes">Костюмы</a></li>
                    <li><a href="/womenBlazer">Пиджак</a></li>
                    <li><a href="/womenShirt">Рубашка</a></li>
                    <li><a href="/womenPoliver">Поливер</a></li>
                    <li><a href="/womenJenfer">Дженфер</a></li>
                    <li><a href="/womenWindbreaker">Ветрофка</a></li>
                    <li><a href="/womenjacket">Коженка</a></li>
                    <li><a href="/womenJackets">Куртки</a></li>
                    <li><a href="/womenCoat">Пальто</a></li>
                    <li><a href="/womenShoes">Туфли</a></li>
                    <li><a href="/womenChumSalmon">Кеты</a></li>
                    <li><a href="/womenMakashima">Макасимы</a></li>
								</ul></li><li><a href="#">Kids</a>
								<ul class="sub-menu">
                    <li><a href="/newkids">Новинки</a></li>
                    <li><a href="/kidsshapka">Шапка</a></li>
                    <li><a href="/kidsCap">Кепка</a></li>
                    <li><a href="/kidssharf">Шарф</a></li>
                    <li><a href="/kidsCostumes">Костюмы</a></li>
                    <li><a href="/kidsBlazer">Пиджак</a></li>
                    <li><a href="/kidsShirt">Рубашка</a></li>
                    <li><a href="/kidsPoliver">Поливер</a></li>
                    <li><a href="/kidsJenfer">Дженфер</a></li>
                    <li><a href="/kidsWindbreaker">Ветрофка</a></li>
                    <li><a href="/kidsjacket">Коженка</a></li>
                    <li><a href="/kidsJackets">Куртки</a></li>
                    <li><a href="/kidsCoat">Пальто</a></li>
                    <li><a href="/kidsShoes">Туфли</a></li>
                    <li><a href="/kidsChumSalmon">Кеты</a></li>
                    <li><a href="/kidsMakashima">Макасимы</a></li>
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
<label for="minprice"></label>
<label for="maxprice"></label>
<input type="text" id="minprice"name="minprice" readonly style="border:0; color:#333; ">
<input type="text" id="maxprice"name="maxprice" readonly style="border:0; color:#333; float: right;width: 40px">
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
                        @foreach($categories as $category)
                            <div class="col-lg-4 col-sm-6 products">
                                <div class="product-item">
                                    <div class="pi-pic">
                                        <img src="" alt="">
                                        <div class="pi-links">
                                            <a href="#" class="add-card">
                                                <i class="flaticon-bag"></i>
                                                <span>В Корзину</span>
                                            </a>
                                            <a href="#" class="wishlist-btn">
                                                <i class="flaticon heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="pi-text">
                                        <h6></h6>
                                        <a href="/{{$category->code}}">
                                            <p>{{$category->name}}</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach

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
<!-- <svg id="svg" class="circle_anim"></svg>
-->
<!-- <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" xml:space="preserve">
<line x1="0" y1="0" x2="50" y2="50" style="stroke:rgb(199, 196, 196);stroke-width:1"></line>
<line x1="50" y1="50" x2="90" y2="0" style="stroke:rgb(199, 196, 196);stroke-width:1"></line>
<line x1="90" y1="0" x2="140" y2="50" style="stroke:rgb(199, 196, 196);stroke-width:1"></line>
<line x1="50" y1="50" x2="144" y2="50" style="stroke:rgb(199, 196, 196);stroke-width:1"></line>
<line x1="50" y1="50" x2="105" y2="119" style="stroke:rgb(199, 196, 196);stroke-width:1"></line>
<line x1="105" y1="119" x2="90" y2="0" style="stroke:rgb(199, 196, 196);stroke-width:1"></line>
<line x1="50" y1="50" x2="0" y2="100" style="stroke:rgb(199, 196, 196);stroke-width:1"></line>
<line x1="0" y1="101" x2="105" y2="120" style="stroke:rgb(199, 196, 196);stroke-width:1"></line>
<line x1="0" y1="101" x2="137" y2="52" style="stroke:rgb(199, 196, 196);stroke-width:1"></line>
<line x1="50" y1="50" x2="90" y2="0" style="stroke:rgb(199, 196, 196);stroke-width:2"></line>
<line x1="50" y1="50" x2="90" y2="0" style="stroke:rgb(199, 196, 196);stroke-width:2"></line>

<circle cx="0" cy="0" r="10" style="fill:blueviolet;stroke-width:2"></circle>
<circle cx="50" cy="50" r="7" style="fill:grey;stroke-width:2"></circle>
<circle cx="105" cy="119" r="7"></circle>
<circle cx="140" cy="50" r="5"></circle>
<circle cx="0" cy="0" r="0"></circle>
<circle cx="0" cy="0" r="0"></circle>
<circle cx="0" cy="0" r="0"></circle>
<circle cx="0" cy="0" r="0"></circle>
<circle cx="0" cy="0" r="0"></circle>
<circle cx="0" cy="0" r="0"></circle>
</svg> -->


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
        <li><span>Fashion-блог Shopping</span></li><a href="http://localhost/shopping/index.html"><img src="img/icons/social-37-512.png"></a>
        <a href="#"><img src="img/icons/facebook333.png"></a>
        <a href="#"><img src="img/icons/icons8-телеграмма-app-48.png"></a>
        <a href="#"><img src="img/icons/vk333.png" style="border-radius: 50%;"></a>

        <a href="http://localhost/shopping/index.html#"><img src="img/icons/instagram333.png"></a>
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
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/jquery.zoom.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/scriptHtml.js"></script>
    <script src="js/jqcart.min.js"></script>

    <script>
$(function(){
	'use strict';
	// инициализация плагина
	$.jqCart({
			buttons: '.add-card',
			handler: 'php/handler.php',
			cartLabel: '.label-place',
			visibleLabel: true, // показывать/скрывать ярлык при пустой корзине (по умолчанию: false)
			openByAdding: false, // автоматически открывать корзину при добавлении товара (по умолчанию: false)
			currency: '<sup>c</sup>'//'&euro;'
	});
	// Пример с дополнительными методами
	$('#open').click(function(){
		$.jqCart('openCart'); // открыть корзину
	});
	$('#clear').click(function(){
		$.jqCart('clearCart'); // очистить корзину
	});
});
</script>
<script type="text/javascript">
/*// First lets create our drawing surface out of existing SVG element
// If you want to create new surface just provide dimensions
// like s = Snap(800, 600);

//パラメータを定義
var s = Snap( $('svg')[0] );
var sWidth = 1000;
var sHeight = 600;

//線に関するパラメータ
var line = s.selectAll( 'line' );
var grafSize = sWidth/line.length;
var Color = "#ECFAFB";

var lineWidth = 10;
//円に関するパラメータ
var circle = s.selectAll( 'circle' );
var circleR = 20;
var circleColor = "#726A93";
//アニメーションに関するパラメータ
var speed = 1000;
easing = mina.backout;

//初期値の設定
//svgのサイズを設定
s.attr({width:sWidth,height:sHeight});
//グラフパラメータの設定
line.attr({stroke: Color,strokeWidth: lineWidth });
//グラフ初期の座標を設定
for(i=0;i<line.length;i++){
  if((i%2)==0){
    line[i].attr({x1:grafSize*i,x2:grafSize*(i+1),y1: sHeight,y2:sHeight});
  }else{
    line[i].attr({x1:grafSize*i,x2:grafSize*(i+1),y1:sHeight,y2: sHeight});
  }
};
//点パラメータの設定
circle.attr({r:circleR,fill:circleColor});
//点の座標の初期設定
for(i=0;i<circle.length;i++){
  if((i%2)==0){
    circle[i].attr({cx:grafSize*(i+1),cy:sHeight});
  }else{
    circle[i].attr({cx:grafSize*(i+1),cy:sHeight});
  }
};

//260までのランダムな整数を生成
function getRandom(){
  var randomNum;
  return Math.floor(Math.random()*(500-50)+50);
};
//カラーコードをランダムに生成
function getRandomColor(){
  return '#'+Math.floor(Math.random()*16777215).toString(16);
};


//アニメーション
setInterval(function(){
  circle.animate({ 'fill' : getRandomColor() },speed,easing);
  for(i=0;i<line.length;i++){
   if(i==0){
     randomNum = getRandom();
     line[i].animate({ 'y1' : sHeight , 'y2' : randomNum },speed,easing);
     line[i+1].animate({ 'y1' : randomNum },speed,easing);

   }else if(i==line.length-1){
     line[i].animate({ 'y2' : sHeight },speed,easing);
   }else{
     randomNum = getRandom();
     line[i].animate({ 'y2' : randomNum },speed,easing);
     line[i+1].animate({ 'y1' : randomNum },speed,easing);
   }
   circle[i].animate({ 'cy' : randomNum },speed,easing);
  };

},speed);


  sWidth = sWidth + 50;
  s.attr({width:sWidth});
  s.circle({r:circleR,fill:circleColor,cx:grafSize*(circle.length+1),cy:sHeight});
  circle = s.selectAll( 'circle' );


*/
</script>

	</body>
</html>
