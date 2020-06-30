// Кнопка в верх (^)
$("#top").click(function(timer){
var scrolled = window.pageYOffset;
scroll();
function scroll(){
    if (scrolled > 0) {
        window.scrollTo(0,scrolled);
        scrolled -= 170;
        timer = setTimeout(scroll,13)
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
let screen = window.matchMedia("(max-width:767px)");
if (screen.matches) {
    $('#sidebar').toggle();
    //$('#sidebar').toggleClass('active');
}
else{
$('.dropdown-toggle img').toggleClass('w-h-32');
$("body").toggleClass("left-side-collapsed");
}
});

$('#topbar-search .input-icon i').click(function(){
    let search = $('#topbar-search input').val();

    searchArray = ['dashboard','UIElements','Icons','icons','Forms','forms','Tables','DataGrid','Pages','Extras','Dropdown','Charts','Email','Animation','AnimationHover'];
    for(i = 0; i < searchArray.length; i++){
        if (search == searchArray[i]) {
            //alert('Перейти по сылке '+searchArray[i]+'.html');
            //document.location.href = "404.html";
            document.location.href = `${searchArray[i]}.html`;
        }
    }
})


    // //BEGIN BACK TO TOP
    // $(window).scroll(function(){
    //     if ($(this).scrollTop() < 200) {
    //         $('#totop') .fadeOut();
    //     } else {
    //         $('#totop') .fadeIn();
    //     }
    // });
    // $('#totop').on('click', function(){
    //     $('html, body').animate({scrollTop:0}, 'fast');
    //     return false;
    // });
    // //END BACK TO TOP

    // //BEGIN CHECKBOX TABLE
    // $('.checkall').on('ifChecked ifUnchecked', function(event) {
    //     if (event.type == 'ifChecked') {
    //         $(this).closest('table').find('input[type=checkbox]').iCheck('check');
    //     } else {
    //         $(this).closest('table').find('input[type=checkbox]').iCheck('uncheck');
    //     }
    // });




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
            document.location.href = '404.html';
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
        }
    });
});

// $('#themeCheckbox').click(function(){
//     $(this).addClass('themeCheckbox');
//     if ($(this).hasClass('themeCheckbox')) {
        
//         if (localStorage.getItem('theme')) {
//             console.log("Takaya check has(est)");
//         }
//         else{
//             $(this).removeClass('themeCheckbox');
//             console.log("Takaya check Not(!est)");
//             localStorage.setItem('theme',$(this).addClass('themeCheckbox'));
//         }
//     }
//     else{
//         localStorage.setItem('theme',$(this).addClass('themeCheckbox'));
//         console.log("Dobavili check ");
//         //$(this).removeClass('themeCheckbox');
//     }
// })
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
    $('#wrapper').css({"background":"#f6f7f9"});
    $('.panel').css({"background":"#f0f2f5"});
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
    $('.blueLight').css({"background":"#1d2027","color":'#dadbde'});
    $('#wrapper').css({"background":"#181c21"});
    $('.panel').css({"background":"#1f2027"});
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
});

/*-------------------------Extras-----------------------*/
$(document).on("click","#accorddion>li>a",function(){
    $(this).siblings(".box").addClass("active");
    $(this).closest("li").siblings("li").find(".box").removeClass("active");
})
$("#accorddion").on("click","li>a",function(){
    $("#accorddion li active").removeClass("active");
});
/*--------------------Exstras End----------------------*/
/*-----------------------Layout------------------------*/
$('.editHtml').on('click',function(){
    $('.editHtml').removeClass('active');
    $(this).addClass('active');


    $('.card .card-body .form-group').removeClass('active');
    $('#'+ $(this).attr("alt")).addClass('active');
});
$('.card .card-body .form-group');
/*--------------------Layout End----------------------*/
// -----------------------MEN-----------------

//imgServer/i/index.php
$(document).ready(function($) {
    
  var allPanels = $('.accordion > dd').hide();
    
  $('.accordion > dt > a').click(function() {
    allPanels.slideUp();
    $(this).parent().next().slideDown();

    //$(".exit-user").attr('class','exit-user-none');
    return false;
  });

});(jQuery);
$(".menBtn").on("click",function(){
var menForm = $(".men-form").serialize("resert");
$.ajax({
    url:'php/AddMgoods.php',
    type:"POST",
    data:menForm,
    success:function(data){
        alert(data);
    }
})
})
/*---------------------END Extras---------------------*/
// $(".phonechange").on("dblclick",function(){
//     var html = "<div><input class = 'form-control' type = 'text'></div>";
//     console.log(html);

// });