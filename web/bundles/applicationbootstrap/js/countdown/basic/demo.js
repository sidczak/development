var end = new Date('2015/09/17 19:50:00');

var _second = 1000;
var _minute = _second * 60;
var _hour = _minute * 60;
var _day = _hour * 24;
var timer;

function showRemaining() {
	var now = new Date();
	var distance = end - now;
	if (distance < 0) {

		clearInterval(timer);
		$('.days.countdown-item').find('.countdown-time').html(0);
		$('.hours.countdown-item').find('.countdown-time').html(0);
		$('.minutes.countdown-item').find('.countdown-time').html(0);
		$('.seconds.countdown-item').find('.countdown-time').html(0);

		return;
	}
	var days = Math.floor(distance / _day);
	var hours = Math.floor((distance % _day) / _hour);
	var minutes = Math.floor((distance % _hour) / _minute);
	var seconds = Math.floor((distance % _minute) / _second);
	
	$('.days.countdown-item').find('.countdown-time').html(days);
	$('.hours.countdown-item').find('.countdown-time').html(hours);
	$('.minutes.countdown-item').find('.countdown-time').html(minutes);
	$('.seconds.countdown-item').find('.countdown-time').html(seconds);

}

timer = setInterval(showRemaining, 100);