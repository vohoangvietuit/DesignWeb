 $(function(){
	 $(window).scroll(function(){
	 	vitrihientai = $('body').scrollTop();
	 	console.log(vitrihientai);
	 	if(vitrihientai > 165){
	 		$('.navbar').addClass('tienhoa');
	 	}
	 	else if(vitrihientai < 165){
	 		$('.navbar').removeClass('tienhoa');
	 	}
	 })

	 $('.n1').click(function(){
	 	$('body').animate({scrollTop:$('#about').offset().top}, 2000, "easeInOutExpo");
	 	return false;
	 })
	 $('.n2').click(function(){
	 	$('body').animate({scrollTop:$('#down').offset().top}, 2000, "easeInOutExpo");
	 	return false;
	 })
	 $('.n3').click(function(){
	 	$('body').animate({scrollTop:$('#contact').offset().top}, 2000, "easeInOutExpo");
	 	return false;
	 })
	 $('.n4').click(function(){
	 	$('body').animate({scrollTop:$('#about').offset().top}, 2000, "easeInOutExpo");
	 	return false;
	 })
	 $('.n0').click(function(){
	 	$('body').animate({scrollTop:0}, 2000, "easeInOutExpo");
	 	return false;
	 })


	 var docao = $(window).height();
	 	$('.grayscale').css({'height': docao})
	 console.log(docao);
	 $(window).resize(function(){
		 var docao = $(window).height();
		 $('.grayscale').css({'height': docao})
	 })
})
