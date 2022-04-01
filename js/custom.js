(function($){

	jQuery(document).ready(function(){

		jQuery(window).scroll(function(){
			var diffhigh = jQuery(window).scrollTop();

			if(diffhigh>100){
				jQuery(".scroll-to-top").fadeIn();
			}else{
				jQuery(".scroll-to-top").fadeOut();
			}
		});

		jQuery("scroll-to-top a").on('click',function(){

			jQuery("html,body").animate({'scrollTop':0},1000);
			return false;
		});

	});
	
}(jQuery))