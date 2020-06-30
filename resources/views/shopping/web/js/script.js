//--------------Header ------------
//--------------Header Search------------
$(".header .search form input").on("focus",function(){
$(this).addClass("focus");
});
$(".header .search form input").on("blur",function(){
	$(this).removeClass("focus");
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
		$(this).attr('src', 'image/ayers.png');
		$('.show_pass').attr('type', 'text');
		$(".chekEmail span").text("X");
	}
	else{
		$(this).attr('src', 'image/ayershide.png');
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
	validate();
	if (inpForm.name == "" || inpForm.phone == "" ||inpForm.country == ""|| inpForm.email == "" ||inpForm.pass == "") {
	$(".text-title").html("Заполните поля");
	$("#sectionform_2").attr("id","regbtnfalse");
}

else{
	$(".text-title").html("");
	$("#regbtnfalse").attr("id","sectionform_2");
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
			if (data == "Такой пользователь уже существует") {
			
				$("#sectionform_2").attr("id","regbtnfalse");
				$(".sectionform_2").attr("class","regbtnfalse");
			}
			else{
				console.log("Кнопка Регистрации активна");
				$("#regbtnfalse").attr("id","sectionform_2");
				$(".regbtnfalse").attr("class","sectionform_2");
			}
		}
	});
});
$("#pass_sign_up_again").on("blur",function(){
	validate();
	if (inpForm.passAgain.length > 6) {
	console.log("Длина паролей более 6 символов");
}
else{
	console.log("Длина паролей менее 6 символов");
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
if(inpForm.pass != inpForm.passAgain){
	$(".pasagain").html("Пароли  не совпадают");
	$("#sectionform_2").attr("id","regbtnfalse");
	$(".sectionform_2").attr("class","regbtnfalse");
}

else{
	$(".text-title").html("");
	$(".pasagain").html("");
	$("#regbtnfalse").attr("id","sectionform_2");
	$(".regbtnfalse").attr("class","sectionform_2");
}
}
// Закрываем document ready function
//-------------------Slider------------------
// var btn_prev=document.querySelector("#gallery  .prev");
// var btn_next=document.querySelector("#gallery .next");
// var images=document.querySelectorAll('#gallery img');
// var i=0;
// btn_prev.onclick=function(){
// 	images[i].style.display='none';
// 	i--;
// if (i<0) {
// 	i=images.length-1;
// }
// images[i].style.display='block';
// }
// btn_next.onclick=function(){
// 	images[i].style.display='none';
// 	i++;
// 	if (i >=images.length) {
// 		i=0;
// 	}
// 	images[i].style.display='block';
// }
// Слайдер кнопки btn(< >)
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
if (page>450) {
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
//Отправка данных через AJAX
$(document).ready(function(){
$('.sectionform_2').click(function () {
	var dannie = $('#formRegistration').serialize("resert");
	$.ajax({
		url:'php/registration.php',
		type:'POST',
		data: dannie,
		success:function (data) {
			$(".registration").css("display","none");
			removeOverflow();
			localStorage.setItem('user',data);
			dataUser = localStorage.getItem('user');
			$(".account h3").html(dataUser);
cookieUsers();
}
	});
});
dataUser = localStorage.getItem('user');
$(".account h3").html(dataUser);	
});
//Проверяем ест ли в localStorage запись user
function cookieUsers(){
		if (localStorage.getItem('user')) {
		console.log("Такой пользователь здесь и не вышел");
		$(".exit-user-none").attr('class','exit-user');
		$(".sectionform_2").attr('class',"regbtnfalse");
		$("#registarationbtn").attr('id',"buttonFalse");
		$(".exit-user").click(function(){
		$(".yeasExit").css("margin-right","5px");
		$("body").append('<div class = "warningExit"><p>Вы дествительно хотите выйти из аккаунта </p><br><button class = "btn_a yeasExit">Выйти</button><button class = "btn_a noExit">Остаться<button></div>')
		//Выход из аккаунта
		$(".yeasExit").click(function(){
	localStorage.removeItem('user');
	$(".account h3").html('');
	$(".exit-user").attr('class','exit-user-none');
	$(".regbtnfalse").attr("class",'sectionform_2');
	$("#buttonFalse").attr("id",'registarationbtn');
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
	else{
		console.log("Такой пользователь не вошел в систему");
	}
}
cookieUsers();

// Авторизация данных через AJAX
$(document).ready(function(){

$('#registarationbtn').click(function () {
	var dateUsers = $('#formAutoRegistration').serialize();

	
	$.ajax({
		url:'php/autoregistration.php',
		type:'POST',
		data: dateUsers,
		success:function (data) {
			$(".registration").css("display","none");
			removeOverflow();
			alert(data);
			$('.warning').text(data);
		}
	});
});
});
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
// $(".sc-item").on("change",function(){
// 	$.ajax({
// 		type: "POST",
// 		url: "php/sizeGoods.php",
// 		data: ,
// 		success: function(data){

// 		}

// 	});
// })
// -----------------------Корзина-----------------
let carts =document.querySelectorAll(".add-card");
	
	for(let i = 0; i<carts.length;i++){
		carts[i].addEventListener('click', () =>{
		//array	console.log("click",carts[i]);
			products = {
		btnid : $(carts[i]).attr("data-id"),
		btnname : $(carts[i]).attr("data-name"),
		btnimg : $(carts[i]).attr("data-img"),
		btnprice : $(carts[i]).attr("data-price"),
		btnincart : $(carts[i]).attr("data-incart")
	}
	saveToCart(products);
		})
	}
	/*------------Изменяю количество на  кол товаров----------*/
	function onloadCartNumbers(){
		let productNumbers = localStorage.getItem('quantity-Goods');
		//localStorage.setItem('userCart',JSON.stringify(products));
		if (productNumbers) {
			document.querySelector(".quantity-goods").textContent = productNumbers;
		}
	}
	/*------------Изменяю количество на кол товаров end----------*/
	/*------------------Сохроняю количество товаров -------------*/
	function saveToCart(product){

console.log("Товар под id",products);
	let productNumbers = localStorage.getItem('quantity-Goods');

	productNumbers =parseInt(productNumbers);
	if ( productNumbers ) {

		localStorage.setItem('quantity-Goods',productNumbers + 1);
		document.querySelector(".quantity-goods").textContent = productNumbers + 1;	
	}
	else{
		localStorage.setItem('quantity-Goods',1);
		document.querySelector(".quantity-goods").textContent = 1;
	}
	setItems(product);
}
	/*------------------Сохроняю количество товаров end-----------*/
function setItems(product){
	let cartproduct = localStorage.getItem('userCart');
	console.log("Add Корзина",cartproduct);
	cartItems = JSON.parse(cartproduct);
	if (cartItems != null ) {
		products.btnincart = parseInt(products.btnincart);
		//console.log(cartItems.btnincart);
		products.btnincart  += 1;
	}else{
	product.btnincart = 1;
}
	// let cartItems = {
	// 	[products.btnid]: product
	// }
	localStorage.setItem("userCart",JSON.stringify(product));
}
onloadCartNumbers();
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

