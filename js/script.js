$(function(){
	
	'use strict';
	$('a[href^="#"]').click(function(){

		let target=$(this).attr('href');
		$('html,body').animate(
		{
			scrollTop:$(target).offset().top
		},
		800
		);
		
	});

	var offset=$('#bottom_header').offset();
	
	$(window).scroll(function(){

		if($(window).scrollTop()>offset.top){
			$('#bottom_header').addClass('fixedNav');

		} else {
			$('#bottom_header').removeClass('fixedNav');
		}
	});
	if((window.innerWidth)>1024){
	$('#slider').slick({
		slidesToShow: 3,
  		slidesToScroll: 1,
  		autoplay: true,
  		autoplaySpeed: 2000,
	});
}
else{
	$('#slider').slick({
		slidesToShow: 1,
  		slidesToScroll: 1,
  		autoplay: true,
  		autoplaySpeed: 2000,

	});
	$('.box_img_tm').css("left","33vw")
}
});