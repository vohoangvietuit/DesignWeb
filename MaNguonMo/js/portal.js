 addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } ;
 $(document).ready(function(c) {
	$('.alert-close').on('click', function(c){
		$('.message').fadeOut('slow', function(c){
	  		$('.message').remove();
		});
	});	  
});

 $(document).ready(function(c) {
	$('.alert-close1').on('click', function(c){
		$('.message1').fadeOut('slow', function(c){
	  		$('.message1').remove();
		});
	});	  
});

 $(document).ready(function(c) {
	$('.alert-close2').on('click', function(c){
		$('.message2').fadeOut('slow', function(c){
	  		$('.message2').remove();
		});
	});	  
});

 $(document).ready(function(){$(".megamenu").megamenu();});

 					jQuery(document).ready(function($) {
						$(".scroll").click(function(event){		
							event.preventDefault();
							$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
						});
					});



 						



			$(document).ready(function() {

		//Khi bàn phím được nhấn và thả ra thì sẽ chạy phương thức này
		$(".formchange").validate({
			rules: {
				opass: {
					required: true,
					minlength: 5,
					maxlength: 8,
				},
				npass: {
					required: true,
					minlength: 5,
					maxlength: 8,
					notEqualTo:"#opass"
				},
				rnpass: {
					required: true,
					minlength: 5,
					maxlength: 8,
					equalTo:"#npass"
				}
			},
			messages: {
 				opass: {
 					minlength:"Your password must be at least 5 characters"
 					},
 				npass: {
 					minlength:"Your password must be at least 5 characters",
 					notEqualTo:"Your new password can't match with old password"
 					},
	 			rnpass: {
	 				minlength:"Your password must be at least 5 characters",
	 				equalTo:"Please enter the same password as above"
	 			}
	 								   	
			}
		});
	});

