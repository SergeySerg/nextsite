 $(function(){

 	$('.r-tab').on('click', function(){
 		var idTab = $(this).attr('data-tab');
 		$('.r-tab').removeClass('active');
 		$(this).addClass('active');

 		$('.r-tab-data').fadeOut('500');
 		$(idTab).delay('500').fadeIn('500');
  	});

  	$('.percent').hover(
		function(){
			$(this).parent().find('.discount').slideDown(200);
		},
		function(){
			$(this).parent().find('.discount').slideUp(200);
		}
  	);

});