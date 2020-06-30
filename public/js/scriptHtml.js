//--------------Header ------------
//--------------Header Search------------
$(".header .search form input").on("focus",function(){
$(this).addClass("focus");
$(".search form span").attr("data-placeholder","Поиск...");
});
$(".header .search form input").on("blur",function(){
	$(this).removeClass("focus");
	console.log(this.value);
	if (this.value == "") {
		$(".search form span").attr('data-placeholder','Поиск...');
		console.log($(".search form span").attr('data-placeholder'));
	}else
	$(".search form span").attr('data-placeholder','');

});
$(".header .search form input").on("input",function(){
	if (this.value != '' ) {
		$("#result").show();
	}else{
		$("#result").hide();
	}
});

//--------------Header Registration----------

//Создаём элемент div с классом overflow
function createOverflow(){
	var createDiv = $('body').append("<div class = 'overflow'></div>");
	$('body').css("overflow","hidden");
}
//Удаляем элемент div с классом overflow
function removeOverflow() {
	$(".overflow").remove();
	$("body").css("overflow","auto");
}
//END of overflow
//------------------$("#form_block_2").css("display","none");
//Registration(Регистрация)
var account,
	overflow;
$(".img-regist").click(function(){
	let account = $(".registration");
	account.fadeToggle();
	createOverflow();
//headerStatic();
	//Отображаем пароли$(".input_2")


$('.inp_pass').on('click',function(){
	if ($('.show_pass').attr('type') == 'password') {
		$(this).attr('src', 'img/icons/ayers.png');
		$('.show_pass').attr('type', 'text');
	}
	else{
		$(this).attr('src', 'img/icons/ayershide.png');
		$('.show_pass').attr('type', 'password');
	}
	//return false;
})



// Закрываем click function
overflow = $(".overflow");
overflow.click(function remOver(){
	account.css("display","none");
	removeOverflow();
	//headerFixed();
});
$(".closeform").click(function (){
	account.css("display","none");
	removeOverflow();
	//headerFixed();
});
//Показываем 2ой block скрывая первую
$("#block_2").click(function(event){	
		$(".registration").css({
		"height" :"530px",
		"margin-top":"25px"
	})
	$("#form_block_1").css("display","none");
	$(".registration  #block_1").css("border-bottom","1px solid transparent");
	$("#form_block_2").css("display","block");
	$(".registration  #block_2").css("border-bottom","1px solid #fe696a");
	});
$("#block_1").on("click",function(){
			$(".registration").css({
		"height" :"330px",
		"margin-top":"0px"
	})
	$(".registration  #block_2").css("border-bottom","1px solid transparent");
	$("#form_block_2").css("display","none");
	$(".registration  #block_1").css("border-bottom","1px solid #fe696a");
	$("#form_block_1").css("display","block");
});

});
$("#country_sign_up").on("blur",function(){
	// validate();
	if (inpForm.name == "" || inpForm.phone == "" ||inpForm.country == ""|| inpForm.email == "" ||inpForm.pass == "") {
	$(".text-title").text("Заполните поля");
	$("#sectionform_2").prefentDefault();
}

else{
	$(".text-title").text("");
	$("#regbtnfalse").prefentDefault();
}
});
$("#email_sign_up").on("input",function(){
	var emailRegistration = $('#formRegistration').serialize("resert");
	$.ajax({

		url:"php/check.php",
		type: "POST",
		data: emailRegistration,
		success: function(data){
			$(".text-title").html(data);
		},
		error: function(){
			
		}
	});
});
// $("#pass_sign_up_again").on("blur",function(){
// 	validate();
// 	if (inpForm.passAgain.length > 6) {
// 	console.log("Длина паролей более 6 символов");
// }
// else{
// 	console.log("Длина паролей менее 6 символов");
// }



// });
$("#pass_sign_up").on('keyup',function(){
  var lowerCaseLetters = [/[A-Z]/g,/[a-z]/g];
  if(this.value.match(/[A-Z]/g)) {  
$(".chekEmail").css('border-bottom','1px solid #000');
  } else {
$(".chekEmail").css('border-bottom','1px solid blue');
  }
});
function validate(){
	inpForm = {
name: $("#name_sign_in").val(),
phone: $("#phone_sign_up").val(),
country: $("#country_sign_up").val(),
email: $("#email_sign_up").val(),
pass: $("#pass_sign_up").val(),
passAgain: $("#pass_sign_up_again").val()
	}
	if (inpForm.name == "" || inpForm.phone == "" || inpForm.country == ""
		|| inpForm.email == "" || inpForm.pass == "" ||inpForm.passAgain == "") {
		alert("Not Correct date Valid");
		
		this.prefentDefault();
	}
	else if (inpForm.pass.length>32 && inpForm.pass.length>=6 && inpForm.passAgain.length >32 && inpForm.passAgain.length>=6) {
		alert("Mot Correct djate Valid");
		
		this.prefentDefault();
	}
	else if (inpForm.pass !== inpForm.passAgain ) {
		alert("Not Correct date Valid");
		
		this.prefentDefault();
	}
	else{
		alert(" Correct date Valid");
		return true;
	}

}
// Закрываем document ready function


$("#gallery").mouseenter(function(){
	var transition=".4s  ease-in-out";
	$("#gallery .next").css({
"opacity":1,
"right":"20px",
"transition":transition
	});
		$("#gallery .prev").css({
"opacity":1,
"left":"20px",
"transition":transition
	});
});
$("#gallery").mouseleave(function(){
	var transition=".3s  ease-in-out";
	$("#gallery .next").css({
"opacity":0,
"right":"50px",
"transition":transition
	});
		$("#gallery .prev").css({
"opacity":0,
"left":"50px",
"transition":transition
	});
});
// Закрываем функцию Slide 
// Кнопка в верх (^)
$("#top").click(function(timer){
var scrolled = window.pageYOffset;
scroll();
function scroll(){
	if (scrolled > 0) {
		window.scrollTo(0,scrolled);
		scrolled -= 100;
		timer = setTimeout(scroll,18)
	}else{
		window.scrollTo(0,0);
		clearTimeout(timer);
	}
}
});//Конец функции кнопки ^
//При Скролле
window.onscroll=function(){
	var page=window.pageYOffset;
if (page>300) {
	$("#top").css("display","block");
	$(".all_top_product img").css("opacity",1);
	$('.all_top_product img').addClass('animated fadeInUp');
}
if(page>750){
	$('.sale').css("opacity",1);
	$("#text_sale").css("opacity",1);
	$('#text_sale').addClass('animated fadeInRight');
	$('.sale').addClass('animated fadeInLeft');
}
if (page>850) {
	$(".container_section").css("opacity",1);
	$('.container_section').addClass('animated zoomInUp');
}
else{
	$('#text_sale').css("opacity",0);
	$('.all_top_product img').css("opacity",0);
	$("#top").css("display","none");
	}
}

//AJAX


	load_data();
	function load_data(query)
	{
		$.ajax({
			url:"php/fetch.php",
			method:"POST",
			data:{query:query},
			success:function(data)
			{$('#result').html(data);
				
				if (data == '') {
					$('#result').css('background','transparent')
				}
				else{
					$('#result').css('background','#fff');
					
				}
			}
		});
	}
	
	$('#search').keyup(function(){
		var search = $(this).val();
		if(search != '')
		{
			load_data(search);
		}
		else
		{
			load_data();			
		}
	});



//Отправка данных через AJAX
$(document).ready(function(){
$('.sectionform_2').click(function () {
	validate();
	var dannie = $('#formRegistration').serialize("reset");
	$.ajax({
		url:'php/registration.php',
		type:'POST',
		data: dannie,
		success:function (data) {
			$(".registration").css("display","none");
			if (data == "Пожалуйста заполните поля, пустые поля не могуть быть внесены в базу") {
				$(".warningName").text("Пожалуйста заполните поля");
				//localStorage.setItem('user','');
				//localStorage.setItem('user',"");
			}
			// else if ("Пожалуйста введите пароль от 6 до 32 символов") {
			// 	//localStorage.setItem('user','');
			// }
			else{

			removeOverflow();
			localStorage.setItem('user',data);
			dataUser = localStorage.getItem('user');
			
			$(".account h3").html(dataUser);
cookieUsers();
}
}
	});
});
dataUser = localStorage.getItem('user');
$(".account h3").html(dataUser);	
});
//Проверяю есть ли в localStorage запись user
function cookieUsers(){
		if (localStorage.getItem('user')) {
		$(".exit-user-none").attr('class','exit-user');
		$(".exit-user").click(function(){
		$(".yeasExit").css("margin-right","5px");
		$("body").append(`<div class = "warningExit">
			<p>Вы дествительно хотите выйти из аккаунта </p>
			<br>
			<button class = "btn_a yeasExit">Выйти</button>
			<button class = "btn_a noExit">Остаться</button>
			</div>`)
		//Выход из аккаунта
		$(".yeasExit").click(function(){
	localStorage.removeItem('user');
	$(".account h3").html('');
	$(".exit-user").attr('class','exit-user-none');

		$(".warningExit").remove();
		removeOverflow();
});
	$(".noExit").click(function(){
		$(".warningExit").remove();
		removeOverflow();
	})
//$(".exit-user").attr('class','exit-user-none');
createOverflow();

});
	}

}
cookieUsers();

// Авторизация данных через AJAX
$(document).ready(function(){

$("#slider-range").on("change",function(e){
				// console.log(e);
				// alert(32,"text");
})
  // $( function() {
    $( "#slider-range" ).slider({
      range: true,
      min: 0,
      max: 500,
      values: [ 0, 500 ],
      slide: function( event, ui ) {
        $( "#minprice" ).val( ui.values[ 0 ]+" c" );
        $( "#maxprice" ).val( ui.values[ 1 ]+" c" );
        //getDetails(ui.values[0],ui.values[1]);
      }
    });
    $("#minprice").val($( "#slider-range" ).slider( "values", 0 )+" c");
    $("#maxprice").val($( "#slider-range" ).slider( "values", 1 )+" c");

  // } );

	
$('#registarationbtn').click(function () {
	var dateUsers = $('#formAutoRegistration').serialize();

	
	$.ajax({
		url:'php/autoregistration.php',
		type:'POST',
		data: dateUsers,
		dataType: "html",
		success:function (data) {
			$(".registration").css("display","none");
			removeOverflow();
			alert(data);
			$('.warning').text(data);
		}
	});
});
});
// $.ajax({
// 			url:"fetch.php",
// 			method:"post",
// 			data:dateUsers,
// 			success:function(data)
// 			{
// 				$('#result').html(data);
// 			},
// 			error:function(){
// 				$(document).location.href("404.html");
// 			}
// 		});
// ----------Get Block(burger)-------
var respBlock=document.querySelector(".getBlock");
var resp=document.querySelector("#burgerbtn");
$("#burgerbtn").click(function(){
	createOverflow();
if (respBlock.style.left==-80+"%") {
respBlock.style.left=0+"%";
$("body").css("overflow","hidden");
$(".getBlock .imginlist").css("display","block");
$(".overflow").click(function(){
	removeOverflow();
	$(".getBlock").css("left","-80%");
$(".getBlock .imginlist").css("display","none");
});

}
else{

	$("body").css("overflow","auto");
$(".getBlock .imginlist").css("display","none");

respBlock.style.left=-80+"%";
}

})
$("#burgerbtn_cat").on("click",function(){
	createOverflow();
	//$(".d-grid .burg-menu").toggleClass("burg-menu-active");
	$(".d-grid .burg-menu").fadeToggle();
	$(".overflow").click(function(){
		$(".d-grid .burg-menu").hide();	
		removeOverflow();

	})

});

/*------------------------PRODUCT UI CART-----------------*/
$('.product-img-goods').click(function(event){
if (event.target.classList == 'img-goods') {
	const src = event.target.src;
	document.getElementById('product-category-img').src=event.target.src;
}
})
// window.onclick = function(event){
// event=event ||window.event;
// if (event.target.classList.contains('product-img-goods')) {
// 	var src= event.target.src;
// 	document.getElementById('img-goods').src=event.target.src;
// }
// }
/*---------------------PRODUCT UI CART END-----------------*/

// -----------------------Корзина-----------------
// let carts =document.querySelectorAll(".add-card");
	
// 	for(let i = 0; i<carts.length;i++){
// 		carts[i].addEventListener('click', () =>{
// 		//array	console.log("click",carts[i]);
// 			products = {
// 		btnid : $(carts[i]).attr("data-id"),
// 		btnname : $(carts[i]).attr("data-name"),
// 		btnimg : $(carts[i]).attr("data-img"),
// 		btnprice : $(carts[i]).attr("data-price"),
// 		btnincart : $(carts[i]).attr("data-incart")
// 	}
// 	saveToCart(products);
// 		})
// 	}
// 	/*------------Изменяю количество на  кол товаров----------*/
// 	function onloadCartNumbers(){
// 		let productNumbers = localStorage.getItem('quantity-Goods');
// 		//localStorage.setItem('userCart',JSON.stringify(products));
// 		if (productNumbers) {
// 			document.querySelector(".quantity-goods").textContent = productNumbers;
// 		}
// 	}
// 	/*------------Изменяю количество на кол товаров end----------*/
// 	/*------------------Сохроняю количество товаров -------------*/
// 	function saveToCart(product){

// 	let productNumbers = localStorage.getItem('quantity-Goods');

// 	productNumbers =parseInt(productNumbers);
// 	if ( productNumbers ) {

// 		localStorage.setItem('quantity-Goods',productNumbers + 1);
// 		document.querySelector(".quantity-goods").textContent = productNumbers + 1;	
// 	}
// 	else{
// 		localStorage.setItem('quantity-Goods',1);
// 		document.querySelector(".quantity-goods").textContent = 1;
// 	}
// 	addToCart(product);
// }
// 	/*------------------Сохроняю количество товаров end-----------*/
// 	/*------------------Добавляю  товар --------------------------*/
// function addToCart(product){
// 	let cartproduct = localStorage.getItem('userCart');
// //	console.log("Add Корзина",cartproduct);
// 	cartproduct = JSON.parse(cartproduct);
// 	console.log(cartproduct);
// //cartproduct.btnincart= parseInt(cartproduct.btnincart);
// 	if (cartproduct !== null) {
// 	localStorage.setItem('userCart',cartproduct.btnincart += 1);
// 	console.log("tovar");
// 	var cart= `<div class = product>
// 	<table>
// 	<thead>
// 	<tr>
// 	<td>Фото</td>
// 	<td>Наименование</td>
// 	<td>Цена</td>
// 	<td>Количество</td>
// 	</tr>
// 	<tr>
// 	<td></td>
// 	</tr>`
// 	for(var cart in cartproduct){
// 		cart += `<tr>`
// 	}
// 	}
// 	else{
// 		console.log("Не повторный клик");
// 		//cartproduct.btnincart = 1;
// 	}
// 	// if (product != null) {	
// 	// 	//product.btnincart = parseInt(products.btnincart);
// 	// 	console.log(cartproduct);
// 	// 	console.log(cartproduct);
// 	// 	//product.btnincart +=1 ;
// 	// }
// 	// else{
// 	// product.btnincart++;
// 	// console.log(2,"else");
// 	// }
// 	// let cartItems = {
// 	// 	[products.btnid]: product
// 	// }
// 	localStorage.setItem("userCart",JSON.stringify(product));
// }
// 	/*------------------Добавляю  товар end--------------------------*/
// onloadCartNumbers();





/*------------------------------------------*/
/*------------------------------------------*/
/*------------------------------------------*/
// $(document).ready(function(){
// 	var details = {
// 		"Printer Cable":4,
// 		"Stylus Pen":10,
// 		"Computer Speaker":14,
// 		"USB Microphone":19,
// 		"Headset":24,
// 		"Memory Card":29,
// 		"USB Hub":36,
// 		"Security Key":40,
// 		"Printer":45,
// 		"Webcam":50,
// 	};
// 	$("#slider").slider({
// 		max:50,
// 		range:true,
// 		values:[15,30],
// 	})
// });
/*var cart = {};
$(".add-card").on("click", function(){
	datebtn = {
		btnid : $(this).attr("data-id"),
		btnname : $(this).attr("data-name"),
		btnimg : $(this).attr("data-img"),
		btnprice : $(this).attr("data-price")
	}

//console.log(datebtn);
addToCart();
loadCart();
});
// Добавляю товары
function addToCart(){
	// Если в корзине нет товара
	if (cart[btnid]==undefined) {
		cart[btnid]=1;
	}
	else{
		cart[btnid]++;
		saveToCart();
	}
	
}
function loadCart() {
//проверяю есть ли в localStorage запись cart
    if (localStorage.getItem('userCart')) { 
// если есть - расширфровываю и записываю в переменную cart
    cart = JSON.parse(localStorage.getItem('userCart'));
        init();
        }
    else {
    $('.cartGoods').html('Корзина пуста!');
    }
}

function init(object){
	    //проверяю корзины на пустоту
	    console.log(object);
    for (var keyObj in object){
    if (object.hasOwnProperty(keyObj)){ 
    	return true;
	$(".cartGoods").html("Корзина пуста");
	console.log("Корзина пуста");
}
   else{
	return false;
 	console.log("Корзина не пуста вложить текст");
 	console.log(cart);	
}
	showCart();
}


// Сохроняю корзину
function saveToCart(){
	var userCart = localStorage.setItem('userCart',JSON.stringify(datebtn));
}
// В корзине
function showCart(object){
	for (var key in cart){
	// var out = `<div class = "myCart"><div class = "cart-center">
	// 		<div class = "cart-header">
	// 			<div class = "cart-title"><h1>Корзина</h1></div>
	// 		</div>
	// 		<div class = "cart-section">
	// 			<div class = "cart-goods">
	// 			<table>
	// 			<tr>
	// 				<th>Товар</th>
	// 				<th></th>
	// 				<th>Количество</th>
	// 				<th>Размер</th>
	// 				<th>Цвет</th>
	// 				<th>Цена</th>
	// 			</tr>
	// 			<tr>
	// 				<th><img src="img/product/${cart[key].btnimg}"></th>
	// 				<th>${cart[key].btnname}</th>
	// 				<th><button datacart-id="${cart[key].btnid}" class="minus-goods">-</button> ${cart[key].btnid}<button datacart-id="${cart[key].btnid}" class="plus-goods">+</button> </th>
					
					
	// 				<th>${cart[key].btnprice}</th>
	// 			</tr>
	// 			</table>
	// 			</div>
	// 		</div>
	// 		<div class = "cart-footer">
			
	// 		</div>
	// </div></div>`;
	out = `<div class = "myCart"><div class = "cart-center">
			<div class = "cart-header">
				<div class = "cart-title"><h1>Корзина</h1></div>
			</div>
			<div class = "cart-section">${cart[btnid]}</div></div></div>`;
}
$(".cartGoods").html(out);

}
*/
// $(document).ready(function(){

// })
// END CART

