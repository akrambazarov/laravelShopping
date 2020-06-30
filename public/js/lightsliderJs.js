jQuery(document).ready(function($){
	$("#lightSlider").lightSlider({
		item:4,
		loop:false,
		slideMove:1,
		speed:300,
		slideMargin:20,
		responsive:[
		{
			breakpoint:1199,
			settings:{
				item:3,
				loop:false,
				slideMove:2,
				slideMargin:10,
				speed:1000
			}
		},
		{
			breakpoint:769,
			settings:{
				item:2
			
			}
		
		}]
	});
});
