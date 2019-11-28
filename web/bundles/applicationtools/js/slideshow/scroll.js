/*
$(function(){
	
	$('.items div:first').hide();
	setInterval(function(){

		$('.items div:first').slideDown().next('div').slideUp().end().appendTo('.items');
		
	}, 1000);
});
*/

$(function(){
	
	var interval;
	    
    interval_function = function () {
		$('.items div:first').slideDown().next('div').slideUp().end().appendTo('.items');
    };
	
    $('.items div:first').hide();
	
	interval = setInterval(interval_function, 5000);

	$('.items').hover(function () {
		clearInterval(interval);
	}, function () {
		interval = setInterval(interval_function, 5000);
	});
});