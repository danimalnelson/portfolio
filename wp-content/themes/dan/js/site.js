$(document).ready(function($) {
	//SVG FALLBACK
	if (!Modernizr.svg) {
		$('img[src*="svg"]').attr('src', function() {
			return $(this).attr('src').replace('.svg', '.png');
		});	
    };
	
	//MENU BUTTON CLICK
	$('.dropdown-link').click(function(){
		$(this).toggleClass('active').show();
		$('#mobile-menu').slideToggle(500);
	});
	
	//SET CONTAINER HEIGHT
	function setContainerHeight() {
		var windowHeight = $(window).height();
		var windowWidth = $(window).width();
		var containerHeight = windowHeight - 48;
		var mobileHeight = windowHeight - 25;
		if (windowWidth <= 420) {
			$('#content-container').css('min-height', mobileHeight + 'px');
		} else {
			$('#content-container').css('min-height', containerHeight + 'px');
		}
	};
	
	//RUN FUNCTIONS
	$(document).ready(function() {
		setContainerHeight();
	});
	
	$(window).resize(function() {
		setContainerHeight();
	});
});