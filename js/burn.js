$(document).ready(function () {
	$('.countdown').countdown('2015/10/10', function(event) {
		$(this).find('.days').text(event.strftime('%D'))
		$(this).find('.hours').text(event.strftime('%H'))
		$(this).find('.minutes').text(event.strftime('%M'))
		$(this).find('.seconds').text(event.strftime('%S'))
	});

	$('.carousel').carousel();

	$('a.scroll').click(function(){
		$('html, body').animate({
			scrollTop: $( $.attr(this, 'href') ).offset().top
		}, 500);
		return false;
	});

	$('#faq ul li').click(function(){
		$(this).find('i').toggleClass('fa-plus-circle fa-minus-circle')
	});
});