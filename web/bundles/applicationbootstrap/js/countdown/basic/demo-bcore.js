var start = new Date('2015/01/01 08:00:00');
var end = new Date('2015/09/17 19:50:00');

var _second = 1000;
var _minute = _second * 60;
var _hour = _minute * 60;
var _day = _hour * 24;
var timer;

function showRemaining() {
	var now = new Date();
	var distance = end - now;
	var distanceTotal = end - start;
	
	if (distance < 0) {

		clearInterval(timer);
		$('.days.countdown-item').find('.countdown-time').html(0);
		$('.hours.countdown-item').find('.countdown-time').html(0);
		$('.minutes.countdown-item').find('.countdown-time').html(0);
		$('.seconds.countdown-item').find('.countdown-time').html(0);

		return;
	}
	var total_days = Math.floor(distanceTotal / _day);
	var days = Math.floor(distance / _day);
	var hours = Math.floor((distance % _day) / _hour);
	var minutes = Math.floor((distance % _hour) / _minute);
	var seconds = Math.floor((distance % _minute) / _second);
	
	$('.days.countdown-item').find('.countdown-time').html(days);
	$('.hours.countdown-item').find('.countdown-time').html(hours);
	$('.minutes.countdown-item').find('.countdown-time').html(minutes);
	$('.seconds.countdown-item').find('.countdown-time').html(seconds);
	
	$('#day-bar').css('width', days * 100 / total_days + '%');
	//$('#day-bar').css('width', days * 100 / 365 + '%');//jeśli nie mamy ustawionej daty start to total_days zmieniamy na 365
	$('#hour-bar').css('width', hours * 100 / 24 + '%');
	$('#minute-bar').css('width', minutes * 100 / 60 + '%');
	$('#second-bar').css('width', seconds * 100 / 60 + '%');
	
	completePercent = 100 - days * 100 / total_days;
    currentPercent = completePercent.toString().substr(0, 5);
	$('#total-bar').css('width', completePercent + '%').html('Made of ' + currentPercent +'%');;
}

timer = setInterval(showRemaining, 100);