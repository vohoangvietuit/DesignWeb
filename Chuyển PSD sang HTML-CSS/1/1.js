 $(function(){
 	//ham click
 	$('.n1').click(function(){
 		$('body').animate({scrollTop:$('#sanpham').offset().top}, 2000, "easeInOutExpo");
 		return false;
 	})
 	$('.n2').click(function(){
 		$('body').animate({scrollTop:$('#thongtin').offset().top});
 		return false;
 	})
 	$('.n3').click(function(){
 		$('body').animate({scrollTop:$('#lienhe').offset().top});
 		return false;
 	})

 	//cuon chuoi thu nho menu
	 $(window).scroll(function(){
	 	vitrihientai = $('body').scrollTop();
	 	console.log(vitrihientai);

	 	if(vitrihientai > 330)
	 	{
	 		$('.navbar').addClass('tienhoa');
	 	}
	 	else if(vitrihientai < 330)
	 	{
	 		$('.navbar').removeClass('tienhoa');
	 	}
	 	//hieu thi sp
	 	if(vitrihientai > 490)
	 	{
	 		$('.portfolio').addClass('bienra');
	 	}	 	
	 	else if(vitrihientai < 490)
	 	{
	 		$('.portfolio').removeClass('bienra');
	 	}

	 })
})  
 