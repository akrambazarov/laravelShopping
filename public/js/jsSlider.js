jQuery(document).ready(function($){
	$("#lightSlider").lightSlider({
		item:1,
		loop:false,
		slideMove:3,
		speed:300,
		slideMargin:0,
		responsive:[
		{
			breakpoint:950,
			settings:{
				item:3,
				loop:false,
				slideMove:4,
				//slideMargin:0,
				speed:1000
			}
		},
		{
			breakpoint:650,
			settings:{
				item:3
			
			}
		
		}]
	});
});
