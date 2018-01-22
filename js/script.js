$(document).ready(function() {
    $('#slider').nivoSlider({
		animSpeed:200,
		effect: 'fade',
		pauseTime: 5000
	});

	$("a.popupimage").fancybox({
		'transitionIn'	:	'none',
		'transitionOut'	:	'none'
	});

	$('.notWannaShowBefore').slideDown(200);
	var $menu = $('#mainmenu a');
	$menu.each(function(index) {
		$(this).click(function() {
			if(!($('.course_active').attr('id') == "course"+(index+1)))
			{	
				$('.course_active').fadeOut(100);
				$('.course_active').removeClass('course_active');
				$('.notWannaShowBefore ul li a').removeClass('blue italic');
			}
			$('#course'+(index+1)).fadeIn();
			$('#course'+(index+1)).addClass('course_active');
			$('#menu'+(index+1)).addClass('blue italic');
			return false;
		});
	});
});
