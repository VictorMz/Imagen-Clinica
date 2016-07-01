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
		
		$('ul.med-nuc li button').click(function() {

			var textoFiltro = $(this).data("option");
			if(textoFiltro == 'todos') 
			{
				$('div.body-txt div.hidden').fadeIn('slow').removeClass('hidden');
			}
			else
			{
				$('.body-txt div').each(function() {
                    
					var myId = $(this).data("group").split(",");
					console.log('id->' + myId);
					
					for (i = 0; i < myId.length; i++) {
						if (myId[i] != "") {
							if(myId[i]==textoFiltro) 						
							{
								$(this).fadeIn('slow').removeClass('hidden');
								console.log('in->' + $(this).data("group"));
							}
							else 
							{
								$(this).fadeOut('normal').addClass('hidden');
								console.log('else->' + $(this).data("group"));
							}
						}
					}
					
				});
			}
			
			return false;
		});


	});
		
})(jQuery);;