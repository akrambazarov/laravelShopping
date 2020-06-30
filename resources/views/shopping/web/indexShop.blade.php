<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Shopping | Tursunzade</title>
    <meta charset="UTF-8">
    <meta name="description" content=" Shopping | Tursunzade">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="shortcut icon"/>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,300i,400,400i,700,700i" rel="stylesheet">


    <!-- Stylesheets -->
<!--     <link rel="stylesheet" href="css/bootsstrap.min.css"/>
    <link rel="stylesheet" href="css/font-awesome.min.css"/>
 -->
<!--     <link rel="stylesheet" href="css/slicknav.min.css"/> -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/jquery-ui.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/cart.css">
    <link rel="stylesheet" href="css/slide.css">


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
                    <span id="burgerbtn">☰</span>
                </div>
            </div>
            <div class="search">
                <form method="POST" action="php/ctfhcy.php">
                    <input type="search" name="search" id="search">
                    <span data-placeholder="Поиск..."></span>
                    <button type="submit" name="send_search"><img src="img/icons/search-fdmas.png" width="16" height="16"></button>
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
<!-- Account  -->
<div class="registration" style="z-index: 111; height: 530px; margin-top: 25px; display: none;">

<header>
    <div id="block_1" style="border-bottom: 1px solid transparent;">
        <img src="img/product/accaunt12.png" width="128">
        <h3>Sign in</h3>
    </div>
    <div id="block_2" style="border-bottom: 1px solid rgb(254, 105, 106);">
        <img src="img/product/1499345621-contact_85338.png">
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
    <input type="email" name="email_sign_in" placeholder="user@example.com">
    <label for="pass_sign_in">Password <i>*</i></label>
    <img src="img/icons/ayers.png" class="inp_pass" id="pasbtnregist">
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

    <label for="name_sign_in" data-placeholder="Full name "></label>

    <input type="tel" minlength="9" maxlength="14" pattern="[-+]?[0-9]" id="name_sign_in" name="name_sign_in" placeholder="John Doe">
    <label for="phone_sign_up">Phone Number <i>*</i></label>

    <input type="number" id="phone_sign_up" name="phone_sign_up" placeholder="Телефонный номер">
    <label for="country_sign_up">Country <i>*</i></label>
    <input type="text" id="country_sign_up" name="country_sign_up" placeholder="Ваш город (Регион)">
    <label for="email_sign_up">Email addres <i>*</i></label>
    <label class="text-title" style="font-size: 12px;float: right;"></label>

    <input type="email" id="email_sign_up" name="email_sign_up" placeholder="johndoe@example.com" class="input_1 checkEmail">

    <label for="pass_sign_up">Password <i>*</i></label>
    <img src="img/icons/ayers.png" class="inp_pass" id="pasbtn">
    <label class="checkdpas" style="font-size: 12px; float: right;">
</label>
    <input type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" id="pass_sign_up" name="pass_sign_up" minlength="6" maxlength="32" placeholder="Password username" class="show_pass">

    <label for="pass_sign_up_again">Confirm Password <i>*</i></label>
    <img src="img/icons/ayers.png" class="inp_pass" id="pasbtnone">
        <label class="pasagain" style="font-size: 12px;float: right;"></label>
    <input type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}"id="pass_sign_up_again" name="pass_sign_up_again" minlength="6" maxlength="32" placeholder="Confirm password" class="show_pass">
    <button type="button" id="sectionform_2" class="sectionform_2">Sign in</button>
</form>
</div>


</section>

</div>
<!-- Account end -->
<!-- Get Block Responsive -->
<div class="getBlock" style="left: -80%">

        <nav class="clnav">
        <ul>
            <li class="one">
                <a href="#">MEN</a>
                <ul>
                    <div class="list_li">
                    <li><a href="newmen">Новинки</a></li>
                    <li><a href="menshapka">Шапка</a></li>
                    <li><a href="menCap">Кепка</a></li>
                    <li><a href="mensharf">Шарф</a></li>
                    <li><a href="menCostumes">Костюмы</a></li>
                    <li><a href="menBlazer">Пиджак</a></li>
                    <li><a href="menShirt">Рубашка</a></li>
                    <li><a href="menPoliver">Поливер</a></li>
                    <li><a href="menJenfer">Дженфер</a></li>
                    <li><a href="menWindbreaker">Ветрофка</a></li>
                    <li><a href="menjacket">Коженка</a></li>
                    <li><a href="menJackets">Куртки</a></li>
                    <li><a href="menCoat">Пальто</a></li>
                    <li><a href="menShoes">Туфли</a></li>
                    <li><a href="menChumSalmon">Кеты</a></li>
                    <li><a href="menMakashima">Макасимы</a></li>

</div>
<div class="imginlist">

    <img src="img/cat-sm01.jpg" class="animated fadeInLeft">
</div>
                </ul></li>
                <li class="one">
                <a href="#">WOMEN</a>
                <ul>
                    <div class="list_li">
                        <li><a href="newwomen">Новинки</a></li>
                        <li><a href="womenshapka">Шапка</a></li>
                        <li><a href="womenCap">Кепка</a></li>
                        <li><a href="womensharf">Шарф</a></li>
                        <li><a href="womenCostumes">Костюмы</a></li>
                        <li><a href="womenBlazer">Пиджак</a></li>
                        <li><a href="womenShirt">Рубашка</a></li>
                        <li><a href="womenPoliver">Поливер</a></li>
                        <li><a href="womenJenfer">Дженфер</a></li>
                        <li><a href="womenWindbreaker">Ветрофка</a></li>
                        <li><a href="womenjacket">Коженка</a></li>
                        <li><a href="womenJackets">Куртки</a></li>
                        <li><a href="womenCoat">Пальто</a></li>
                        <li><a href="womenShoes">Туфли</a></li>
                        <li><a href="womenChumSalmon">Кеты</a></li>
                        <li><a href="womenMakashima">Макасимы</a></li>

                    </div>
                    <div class="imginlist">
    <img src="img/cat-sm02.jpg">
</div>
                </ul>
            </li>
                <li class="one">
                    <a href="#">Kids</a>
                <ul>
                    <div class="list_li">
                        <li><a href="newkids">Новинки</a></li>
                        <li><a href="kidsshapka">Шапка</a></li>
                        <li><a href="kidsCap">Кепка</a></li>
                        <li><a href="kidssharf">Шарф</a></li>
                        <li><a href="kidsCostumes">Костюмы</a></li>
                        <li><a href="kidsBlazer">Пиджак</a></li>
                        <li><a href="kidsShirt">Рубашка</a></li>
                        <li><a href="kidsPoliver">Поливер</a></li>
                        <li><a href="kidsJenfer">Дженфер</a></li>
                        <li><a href="kidsWindbreaker">Ветрофка</a></li>
                        <li><a href="kidsjacket">Коженка</a></li>
                        <li><a href="kidsJackets">Куртки</a></li>
                        <li><a href="kidsCoat">Пальто</a></li>
                        <li><a href="kidsShoes">Туфли</a></li>
                        <li><a href="kidsChumSalmon">Кеты</a></li>
                        <li><a href="kidsMakashima">Макасимы</a></li>

                    </div>
                    <div class="imginlist">
    <img src="img/cat-sm03.jpg">
</div>
                </ul>
            </li>
        </ul>

</nav>
</div>
<!-- Get Block Responsive end -->
    <!-- Hero section -->
    <section class="hero-section">
        <div class="hero-slider owl-carousel">
            <div class="hs-item set-bg" data-setbg="img/bgjohangir.jpg" style="width: 100%;">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-7 text-white">
                            <span>Shopping</span>
                            <h2>Polo Clean</h2>
                            <p >Новые рубашки к весеннему переиду и хорошо подходить для того кто хочеть изменить свой имедж</p>
                        </div>
                    </div>

                </div>
            </div>
            <div class="hs-item set-bg" data-setbg="img/bg-2.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-7 text-white">
                            <span>New Arrivals</span>
                            <h2>denim jackets</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
                        </div>
                    </div>
                    <div class="offer-card text-white">
                        <span>from</span>
                        <h2>$29</h2>
                        <p>SHOP NOW</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container" style="display: none;">
            <div class="slide-num-holder" id="snh-1"></div>
        </div>
    </section>
    <!-- Hero section end -->



    <!-- Features section -->
    <div class="jins">
    <div class="mwk">
    <div id="men">
        <img src="img/cat-sm01.jpg"><br>
        <span>Men</span>
    </div>
    <div id="women">
        <img src="img/cat-sm02.jpg"><br>
        <span>Women</span>
    </div>
    <div id="kids">
        <img src="img/cat-sm03.jpg"><br>
        <span>Kids</span>
    </div>
    </div>
</div>
  <!--   <section class="features-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 p-0 feature">
                    <div class="feature-inner">
                        <div class="feature-icon">
                            <img src="img/icons/1.png" alt="#">
                        </div>
                        <h2>Fast Secure Payments</h2>
                    </div>
                </div>
                <div class="col-md-4 p-0 feature">
                    <div class="feature-inner">
                        <div class="feature-icon">
                            <img src="img/icons/2.png" alt="#">
                        </div>
                        <h2>Premium Products</h2>
                    </div>
                </div>
                <div class="col-md-4 p-0 feature">
                    <div class="feature-inner">
                        <div class="feature-icon">
                            <img src="img/icons/3.png" alt="#">
                        </div>
                        <h2>Free & fast Delivery</h2>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- Features section end -->


    <!-- letest product section -->
    <section class="top-letest-product-section" style="">
        <div class="container">
            <div class="section-title">
                <h2>Trending products</h2>
            </div>
            <div class="product-slider owl-carousel">
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="./img/product/1.jpg" alt="">
                        <div class="pi-links">
                            <a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                            <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
                        </div>
                    </div>
                    <div class="pi-text">
                        <h6>$35,00</h6>
                        <p>Flamboyant Pink Top </p>
                    </div>
                </div>
                <div class="product-item">
                    <div class="pi-pic">
                        <div class="tag-new">New</div>
                        <img src="./img/product/2.jpg" alt="">
                        <div class="pi-links">
                            <a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                            <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
                        </div>
                    </div>
                    <div class="pi-text">
                        <h6>$35,00</h6>
                        <p>Black and White Stripes Dress</p>
                    </div>
                </div>
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="./img/product/3.jpg" alt="">
                        <div class="pi-links">
                            <a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                            <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
                        </div>
                    </div>
                    <div class="pi-text">
                        <h6>$35,00</h6>
                        <p>Flamboyant Pink Top </p>
                    </div>
                </div>
                <div class="product-item">
                        <div class="pi-pic">
                            <img src="./img/product/4.jpg" alt="">
                            <div class="pi-links">
                                <a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                                <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
                            </div>
                        </div>
                        <div class="pi-text">
                            <h6>$35,00</h6>
                            <p>Flamboyant Pink Top </p>
                        </div>
                    </div>
                <div class="product-item">
                        <div class="pi-pic">
                            <img src="./img/product/6.jpg" alt="">
                            <div class="pi-links">
                                <a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                                <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
                            </div>
                        </div>
                        <div class="pi-text">
                            <h6>$35,00</h6>
                            <p>Flamboyant Pink Top </p>
                        </div>
                    </div>
            </div>
        </div>
    </section>
    <!-- letest product section end -->



    <!-- Product Sale section -->
    <center><a href="http://localhost/shopping/index.html#" class="btn_a">More products &gt;</a></center>
<div class="sale_products">
    <div class="sale animated fadeInLeft" style="opacity: 1;">
        <span>Приветь! у меня распродажная неделя</span>
        <h1>Можешь взглянуть</h1>
        <a href="http://localhost/shopping/index.html#" class="btn_a_red">Sale week</a>
        <img src="img/single-product/thumb-3.jpg">
    </div>
<div id="text_sale" class="animated fadeInRight" style="opacity: 0;">
    <h4>Мы переуспели быть первыми в г.Турсунзаде</h4><br>
    <span>Онлайн шопинг в г.Турсунзаде</span>
</div>

</div>
    <!-- Product Sale section end -->


    <!-- Banner section -->
<div class="about-us pallette_1 p-t-30 p-b-30">
            <div class="container">
                <div class="row flex-middle">



                <div class="cell-5 cell-12-sm flex-first-sm m-b-30-sm">
                    <div class="about-us-img relative">
                        <img src="img/bg-2.jpg" alt="Мы создаем универсальную моду">
                    </div>
                </div>




                <div class="cell-1 hide-sm"></div>



            <div class="cell-6 cell-12-sm">
                <div class="about-us-text">


                        <div class="m-t-0 m-b-0"><p>В нашей одежде приятно ходить в любую погоду. Она будет защищать вас от погодных условий. А также она поднимает настроение мягкостью матералов и приятным цветом. Никто не останеться равнодушным к нашей одежде.</p></div>


                    <div class="m-t-30">
                        <a class="btn_a" href="/collection/all">Посмотреть</a>
                    </div>

                </div>
            </div>


                </div>
            </div>
        </div>
        <div class="container" style="float: left;"><div class="b-bottom"></div></div>
    <!-- Banner section end  -->
    <!-- Banner section  Men -->

    <div class="about-us pallette_1 p-t-30 p-b-30">
            <div class="container">
                <div class="row flex-middle">


            <div class="cell-6 cell-12-sm">
                <div class="about-us-text">


                        <div class="m-t-0 m-b-0"><p>В нашей одежде приятно ходить в любую погоду. Она будет защищать вас от погодных условий. А также она поднимает настроение мягкостью матералов и приятным цветом. Никто не останеться равнодушным к нашей одежде.</p></div>


                    <div class="m-b-30 m-t-30" >
                        <a class="btn_a" href="/collection/all">Посмотреть</a>
                    </div>

                </div>
            </div>



                <div class="cell-1 hide-sm"></div>




                <div class="cell-5 cell-12-sm flex-first-sm m-b-30-sm">
                    <div class="about-us-img relative">
                        <img src="img/bg.jpg" alt="Мы говорим вам как надо одеваться">
                    </div>
                </div>



                </div>
            </div>
        </div>
    <!-- Banner section end  -->
<!--  MEN Product -->
<!--  MEN Product End -->
<!-- <section class="product-filter-section" style="float: left; width: 100%;margin: 0 auto;">
        <div class="content">
            <div class="section-title">
                <h2>Мужские новинки</h2>
            </div>
            <div class="d-flex">
                <div class="col-lg-3 col-sm-6">
                    <div class="product-item product-goods">
                        <div class="pi-pic">
                            <img src="./img/product/5.jpg" alt="">
                            <div class="pi-links">
                                <a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                                <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
                            </div>
                        </div>
                        <div class="pi-text">
                            <h6>$35,00</h6>
                            <p>Flamboyant Pink Top </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="product-item product-goods">
                        <div class="pi-pic">
                            <div class="tag-sale">ON SALE</div>
                            <img src="./img/product/6.jpg" alt="">
                            <div class="pi-links">
                                <a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                                <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
                            </div>
                        </div>
                        <div class="pi-text">
                            <h6>$35,00</h6>
                            <p>Black and White Stripes Dress</p>
                        </div>
                    </div>
                </div>


                <div class="col-lg-3 col-sm-6">
                    <div class="product-item product-goods">
                        <div class="pi-pic">
                            <img src="./img/product/9.jpg" alt="">
                            <div class="pi-links">
                                <a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                                <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
                            </div>
                        </div>
                        <div class="pi-text">
                            <h6>$35,00</h6>
                            <p>Flamboyant Pink Top </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="product-item product-goods">
                        <div class="pi-pic">
                            <img src="./img/product/10.jpg" alt="">
                            <div class="pi-links">
                                <a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                                <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
                            </div>
                        </div>
                        <div class="pi-text">
                            <h6>$35,00</h6>
                            <p>Black and White Stripes Dress</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="product-item product-goods">
                        <div class="pi-pic">
                            <img src="./img/product/11.jpg" alt="">
                            <div class="pi-links">
                                <a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                                <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
                            </div>
                        </div>
                        <div class="pi-text">
                            <h6>$35,00</h6>
                            <p>Flamboyant Pink Top </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="product-item product-goods">
                        <div class="pi-pic">
                            <img src="./img/product/12.jpg" alt="">
                            <div class="pi-links">
                                <a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                                <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
                            </div>
                        </div>
                        <div class="pi-text">
                            <h6>$35,00</h6>
                            <p>Flamboyant Pink Top </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section> -->
    <!-- section product Men -->
    <div class="container" style="float: left;">
        <div class="b-bottom"></div>
    </div>

    <section class="container_pro">
   <div class="section-title">
                <h2 style="padding-top: 24px; "> Новинки</h2>
            </div>

        <div class="karkas">
            <ul id="lightSlider">

                <li><div class="myslide">

                <div class="product-item">
                    <div class="product-content">
                        <div class="pi-pic">
                            <img src="./img/product/10.jpg" alt="">
                            <div class="pi-links">
                                <a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                                <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
                            </div>
                        </div>
                        <div class="pi-text">
                            <h6>$35,00</h6>
                            <p>Flamboyant Pink Top </p>
                        </div>
                    </div>
                </div>
                </div>
                </li>
                <li><div class="myslide">

                <div class="product-item">
                    <div class="product-content">
                        <div class="pi-pic">
                            <img src="./img/product/10.jpg" alt="">
                            <div class="pi-links">
                                <a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                                <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
                            </div>
                        </div>
                        <div class="pi-text">
                            <h6>$35,00</h6>
                            <p>Flamboyant Pink Top </p>
                        </div>
                    </div>
                </div>
                </div>
                </li>
                <li><div class="myslide">

                <div class="product-item">
                    <div class="product-content">
                        <div class="pi-pic">
                            <img src="./img/product/10.jpg" alt="">
                            <div class="pi-links">
                                <a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                                <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
                            </div>
                        </div>
                        <div class="pi-text">
                            <h6>$35,00</h6>
                            <p>Flamboyant Pink Top </p>
                        </div>
                    </div>
                </div>
                </div>
                </li>
                <li><div class="myslide">

                <div class="product-item">
                    <div class="product-content">
                        <div class="pi-pic">
                            <img src="./img/product/10.jpg" alt="">
                            <div class="pi-links">
                                <a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                                <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
                            </div>
                        </div>
                        <div class="pi-text">
                            <h6>$35,00</h6>
                            <p>Flamboyant Pink Top </p>
                        </div>
                    </div>
                </div>
                </div>
                </li>
                <li><div class="myslide">

                <div class="product-item">
                    <div class="product-content">
                        <div class="pi-pic">
                            <img src="./img/product/10.jpg" alt="">
                            <div class="pi-links">
                                <a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                                <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
                            </div>
                        </div>
                        <div class="pi-text">
                            <h6>$35,00</h6>
                            <p>Flamboyant Pink Top </p>
                        </div>
                    </div>
                </div>
                </div>
                </li>
                <li><div class="myslide">

                <div class="product-item">
                    <div class="product-content">
                        <div class="pi-pic">
                            <img src="./img/product/10.jpg" alt="">
                            <div class="pi-links">
                                <a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                                <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
                            </div>
                        </div>
                        <div class="pi-text">
                            <h6>$35,00</h6>
                            <p>Flamboyant Pink Top </p>
                        </div>
                    </div>
                </div>
                </div>
                </li>
                <li><div class="myslide">

                <div class="product-item">
                    <div class="product-content">
                        <div class="pi-pic">
                            <img src="./img/product/10.jpg" alt="">
                            <div class="pi-links">
                                <a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                                <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
                            </div>
                        </div>
                        <div class="pi-text">
                            <h6>$35,00</h6>
                            <p>Flamboyant Pink Top </p>
                        </div>
                    </div>
                </div>
                </div>
                </li>
            </ul>
        </div>


        </section>
    <!-- section product End Men -->
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

<!-- =============-btn TOP-============== -->
<div id="top" class="animated fadeInRight" style="display: block;">
    <h1><span class="animated bounceInDown">Top</span></h1><h2>^</h2>
</div>

    <!--====== Javascripts & Jquery ======-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/lightslider.js"></script>
    <script src="js/lightsliderJs.js"></script>
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
    </body>
</html>
