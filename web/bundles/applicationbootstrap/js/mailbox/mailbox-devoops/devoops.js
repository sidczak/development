$(document).ready(function() {
	// Run script for change menu width
	$('#content').on('click','[id^=msg-]', function(e){
		e.preventDefault();
		$('[id^=msg-]').removeClass('active');
		$(this).addClass('active');
		$('.one-list-message').slideUp('fast');
		$('.'+$(this).attr('id')+'-item').slideDown('fast');
	});
	//$('html').animate({scrollTop: 0},'slow');
});