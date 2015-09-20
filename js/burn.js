$(document).ready(function () {
	/* count down clock */
	$('.countdown').countdown('2015/10/10', function(event) {
		$(this).find('.days').text(event.strftime('%D'))
		$(this).find('.hours').text(event.strftime('%H'))
		$(this).find('.minutes').text(event.strftime('%M'))
		$(this).find('.seconds').text(event.strftime('%S'))
	});

	/* carousel */
	$('.carousel').carousel({
		interval: 5000
	});
	$('.carousel').swipe({
		swipeLeft: function() {
			$(this).carousel('next');
		},
		swipeRight: function(){
			$(this).carousel('prev');
		}
	})

	/* smooth scroll */
	$('a.scroll').click(function(){
		var scrollTop = Number($( $.attr(this, 'href') ).offset().top) + Number($(this).attr('data-scroll-adjust')) + $('#nav').height();
		$('html, body').animate({
			scrollTop: scrollTop
		}, 500);
		return false;
	});

	/* accordian */
	$('#faq ul li').click(function(){
		$(this).find('i').toggleClass('fa-plus-circle fa-minus-circle')
	});

	/* hero image background */
	$('.center-crop').centerCrop();

	/* ajax submit contact form */
	$('#contact-form').submit(function(e){
		e.preventDefault();
		$.ajax({
			type: "POST",
			url: $('#contact-form').attr('action'),
			dataType: "json",
			data: $('#contact-form').serialize(),
			success: function(response){
				if (response.cap == true) {
					if (response.mail == true) {
						msg = "Mail sent";
						$('#contact-form')[0].reset();
					} else {
						msg = "We are sorry, but there appears to be a problem with the form you submitted."
					}

					$('.captcha-status').removeClass('error').text(msg)
					.show().delay(5000).fadeOut('slow');
				} else {
					$('.captcha-status').addClass('error')
					.text("Human verification Wrong!").fadeIn();
				}
			},
			beforeSend: function() {
				$('.captcha-status').text('Sending...');
			}
  		});
	});
});

$.fn.centerCrop = function(){
	$img = $(this);
	$parent = $img.parent();

	var cropCenter = function(){
		$img.css({
			'margin-left': 0.5 * ($parent.width() - $img.width())
		});
		$parent.css({
			position: 'relative',
			overflow: 'hidden'
		});
	}

	var fullWidth = function(){
		$img.css({
			width: '100%'
		});
	}

	var adjust = function (){
		if ($img.width() < $parent.width()) {
			fullWidth();
		} else {
			cropCenter();
		}
	}

	$img.on('load', function(){
		adjust();
	});
	
	$(window).on('resize', function(){
		adjust();
	});
}
