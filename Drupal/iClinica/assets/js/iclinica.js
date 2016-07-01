(function($) {

	$(document).ready(function() {
		
		$('#navbar-main').affix({
			offset: {
				top: $('.header').height()
			}
		});

		var myDiv = $('.carousel-inner').find('div.item').length;
		var classItem = 'class="active"';
		for	(i = 0; i < myDiv; i++) {
	         $('#myCarousel .carousel-indicators').append('<li data-target="#myCarousel" data-slide-to="'+i+'" '+ classItem +'></li>');
             classItem = '';
		}

	});
		
})(jQuery);;