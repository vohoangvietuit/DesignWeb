 $(function(){
	 $(window).scroll(function(){
	 	vitrihientai = $('body').scrollTop();
	 	if(vitrihientai > 300){
	 		$('.navbar').addClass('tienhoa')
	 	}
	 	else if(vitrihientai < 300){
	 		$('.navbar').removeClass('tienhoa')
	 	}
	 })

	 var docao = $(window).height()
	 $(".gioithieu").css({'height': docao})

	 $(window).resize(function(){
		 var docao = $(window).height()
		 $(".gioithieu").css({'height': docao})
	 })

	 $('.n1').click(function(){
	 	$('body').animate({scrollTop: 0}, 2000, "easeInOutExpo")
	 })
	 $('.n2').click(function(){
	 	$('body').animate({scrollTop: $('#gioithieu1').offset().top - 100}, 2000, "easeInOutExpo")
	 })
	 $('.n3').click(function(){
	 	$('body').animate({scrollTop: $('#giaohang').offset().top}, 2000, "easeInOutExpo")
	 })
	 $('.n4').click(function(){
	 	$('body').animate({scrollTop: $('#lienhe').offset().top}, 2000, "easeInOutExpo")
	 })
	 $('.chohang').click(function(){
	 	$('body').animate({scrollTop: $('#giaohang').offset().top}, 2000, "easeInOutExpo")
	 	return false;
	 })

	 $('.truckrun').click(function(){
	 	// $('.truckrun').addClass("wow bounceOutLeft");
	 	$('.truckrun').attr("style","visibility: visible; animation-name: bounceOutLeft; animation-duration: 2s");
	 })
	 $(window).scroll(function(){
	 	if($('body').scrollTop() > $('.truckrun').offset().top)
	 	{
	 		// $('.truckrun').removeClass('wow bounceOutLeft');
	 		$('.truckrun').removeAttr("style","visibility: visible; animation-name: bounceOutLeft;");
	 	}
	 })
	 new WOW().init();

})
