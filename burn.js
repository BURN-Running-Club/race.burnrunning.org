$(document).ready(function () {
	$("#nav").affix()

	$('.countdown').countdown('2015/10/10', function(event) {
		$(this).find('.days').text(event.strftime('%D'))
		$(this).find('.hours').text(event.strftime('%H'))
		$(this).find('.minutes').text(event.strftime('%M'))
		$(this).find('.seconds').text(event.strftime('%S'))
	});

	$('.carousel').carousel();
});