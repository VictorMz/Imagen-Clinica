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
		
		$('#input-search').on('keyup', function() {
          var rex = new RegExp($(this).val(), 'i');
            $('.list-study-type li').hide();
            $('.list-study-type li').filter(function() {
                return rex.test($(this).text());
            }).show();
        });
		
		$('ul.multifilter li').click(function() {			
			var textoFiltro = $(this).data("multifilter");
			$('ul.multifilter li').removeClass('active');
			$(this).addClass('active');
			if(textoFiltro == 'todos'){
				$('div.body-txt div.pk-promociones > div.hidden').fadeIn('slow').removeClass('hidden');
			}else {				
				$('.pk-promociones > div').each(function() {					
					var myId = $(this).data("category").toString().split(",");					
					for (i = 0; i < myId.length; i++) { 
						change(textoFiltro , this);
					}	
				});				
			}			
			return false;
		});

	});
	
	function change(tf , t){
		paquete = 'paq'+$(t).data("category");		
		if( tf !== undefined){							
			if( paquete.indexOf(tf) > -1 ){							
				$(t).fadeIn('slow').removeClass('hidden');
			}else{
				$(t).fadeOut('normal').addClass('hidden');
			}
		}
	}	
		
})(jQuery);;