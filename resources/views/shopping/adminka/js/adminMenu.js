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
if (page>240) {
	$("#top").css("display","block");
}
else{
	$("#top").css("display","none");
	}
}
$("#menu-toggle").click(function(){

console.log("Done Click");
$('.dropdown-toggle img').toggleClass('w-h-32');
$("body").toggleClass("left-side-collapsed");
//$("body").addClass("left-side-collapsed");

})
// Проверка регистрации Email - почту 
$("#email_sign_in").on("input",function(){
    var checkEmail = $('.form-horizontal').serialize("resert");
    $.ajax({

        url:"php/check.php",
        type: "POST",
        data: checkEmail,
        success: function(data){
        	console.log(data);
        if (data === "Такой пользователь уже существует" ) {
            $(".text-title").html(data);
        }else{
        $(".text-title").html("Такого логина не найдена в базе данных");
        }
        },
        error:function(){
            $(document).href.localtion = '404.html';
        }
    });
});
// Регистрации Email - почту 
$(".btn-reg").on("click",function(){
    var emailRegistration = $('.form-registration').serialize("resert");
    $.ajax({

        url:"php/registration.php",
        type: "POST",
        data: emailRegistration,
        success: function(data){
        	alert(data);
            $(".text-warning").html(data);

        },
        error:function(){
            $('document').href.localtion = '404.html';
        }
    });
});
$("#delUser").on("click",function(){
    var formUser = $('.formUser').serialize("resert");
    $.ajax({
        url:"php/delUser.php",
        type: "POST",
        data: formUser,
        dataType:"html",
        success: function(data){
            alert(data);
            //$(".text-warning").html(data);
        },
        error: function(){
            $(document).href.localtion = '404.html';
        }
    });
});

$('#themeCheckbox').click(function(){
    let bodyElem = {
        pageContent: $(".page-content "),
        pageContentTab: $(".tab-content "),
        pageTitle: $(".page-title-breadcrumb"),
        pageFooter: $("#footer"),
        navbarHeader: $("#topbar .navbar-header"),
        topbarUser: $("#sidebar #side-menu .topbar-user"),
        sidebar: $("#sidebar"),
        Top: $("#top"),
        btn: $(".btn"),
    };
if ($(this).hasClass('themeCheckbox')) {
    $(this).removeClass('themeCheckbox');
    $('body').css({"background":"#f0f2f5"});
    $('.blueLight').css({"background":"#f6f7f9","color":'#151414'});
    bodyElem.pageContent.css({"background":"#f0f2f5","color":"#333"});
    bodyElem.pageContentTab.css({"background":"#f6f7f9","color":"#333"});
    bodyElem.pageTitle.css({"background":"#f6f7f9","color":"#525252"});
    bodyElem.pageFooter.css({"background":"#FFFFFF","color":"#333333"});
    //bodyElem.navbarHeader.css({"background":"#fdfdfe","color":"#525252"});
    bodyElem.topbarUser.css({"background":"#f6f7f9","color":"#525252"});
    bodyElem.sidebar.css({"background":"#f6f7f9","color":"#525252"});
    bodyElem.btn.css({"background":"#fff"});
}
else{
    //let themeLocal = localStorage.setItem('theme',$(this).addClass('themeCheckbox'));
    $(this).addClass('themeCheckbox');
    $('body').css({"background":"#191c21"});
    $('.blueLight').css({"background":"#1f2027","color":'#dadbde'});
    bodyElem.pageContent.css({"background":"#191c21","color":"#dadbde"});
    bodyElem.pageContentTab.css({"background":"#1e2127","color":"#dadbde"});
    bodyElem.pageTitle.css({"background":"#1f2027","color":"#fef"});
    bodyElem.pageFooter.css({"background":"#1f2027","color":"#fff"});
    $('a:hover').css("color","#ffe");
    bodyElem.topbarUser.css({"background":"#191c21","color":"#fef"});
    bodyElem.sidebar.css({"background":"#191c21","color":"#fef"});
    bodyElem.Top.css({"background":"#f9f9f9","color":"#fef"});
    bodyElem.btn.css({"background":"#1f2027"});
}
});
$('.hidde-block').on('click',function(){
    $('#side-menu .nav-social').fadeToggle();
})
/*---------------------Extras---------------------*/
// $(document).on("click","#accorddion>li>a",function(){
//     $(this).siblings(".box").addClass("active");
//     $(this).closest("li").siblings("li").find(".box").removeClass("active");
// })
// $("#accorddion").on("click","li>a",function(){
//     $("#accorddion li active").removeClass("active");
// })
// -----------------------MEN-----------------

//imgServer/i/index.php
// (function($) {
    
//   var allPanels = $('.accordion > dd').hide();
    
//   $('.accordion > dt > a').click(function() {
//     allPanels.slideUp();
//     $(this).parent().next().slideDown();

//     //$(".exit-user").attr('class','exit-user-none');
//     return false;
//   });

// })(jQuery);
// $(".menBtn").on("click",function(){
// var menForm = $(".men-form").serialize("resert");
// $.ajax({
//     url:'../php/admin.php',
//     type:"POST",
//     data:menForm,
//     success:function(data){
//         alert(data);
//     }
// })
// })
/*---------------------END Extras---------------------*/
// $(".phonechange").on("dblclick",function(){
//     var html = "<div><input class = 'form-control' type = 'text'></div>";
//     console.log(html);

// });