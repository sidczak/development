$(document).ready(function (){
	
	//var windowY = $(window).height();
	
	//$("#iframe").attr("height", windowY+"px");
	
	$(".view").click(function () {
		
		$(".view").removeClass('active');
		$(this).addClass('active');
		
		if ($(this).hasClass('desktop')){
			$("#iframe").css({ 
				"width": "100%",
			});
		}
		if ($(this).hasClass('tablet_landscape')){
			$("#iframe").css({ 
				"width": 1024,
			});
		}
		if ($(this).hasClass('tablet_portrait')){
			$("#iframe").css({ 
				"width": 768,
			});
		}
		if ($(this).hasClass('mobile_landscape')){
			$("#iframe").css({ 
				"width": 480,
			});
		}
		if ($(this).hasClass('mobile_portrait')){
			$("#iframe").css({ 
				"width": 320,
			});
		}
/*
		if ($(this).hasClass('desktop')){
			$("body").css({ 
				"width": "auto",
				"margin-left": "auto",
				"margin-right": "auto",
			});
			$(".container_16, .container_16_footer").css({
				"width": "90%",
				"margin-left": "4%",
				"margin-right": "4%",
			});
		}

		if ($(this).hasClass('tablet_landscape')){
			$("body").css({ 
				"width": 1024,
				"margin-left": "auto",
				"margin-right": "auto",
			});
			$(".container_16, .container_16_footer").css({
				"width": "98%",
				"margin-left": "auto",
				"margin-right": "auto",
			});
		}
		
		if ($(this).hasClass('tablet_portrait')){
			$("body").css({ 
				"width": 768,
				"margin-left": "auto",
				"margin-right": "auto",
			});
			$(".container_16, .container_16_footer").css({
				"width": "98%",
				"margin-left": "auto",
				"margin-right": "auto",
			});
		}

		if ($(this).hasClass('mobile_landscape')){
			$("body").css({ 
				"width": 480,
				"margin-left": "auto",
				"margin-right": "auto",
			});
			$(".container_16, .container_16_footer").css({
				"width": "98%",
				"margin-left": "auto",
				"margin-right": "auto",
			});
		} 

		if ($(this).hasClass('mobile_portrait')){
			$("body").css({ 
				"width": 320,
				"margin-left": "auto",
				"margin-right": "auto",
			});
			$(".container_16, .container_16_footer").css({
				"width": "98%",
				"margin-left": "auto",
				"margin-right": "auto",
			});
		} 
*/		
		return false;
		
	});
});