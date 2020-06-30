var container = document.querySelector('.container');
window.onmousemove = function(e){
	console.log(e);
var x = - e.clientX / 5,
	y = - e.clientY / 5;
	container.style.backgroundPositionX = x + 'px';
	container.style.backgroundPositionY = y + 'px';

}
$(".txtb input").on("focus",function(){
	$(this).addClass("focus");
	$(".txtb input").on("blur",function(){
		if ($(this).val()=="") {
			$(this).removeClass('focus');
		}
	})
});