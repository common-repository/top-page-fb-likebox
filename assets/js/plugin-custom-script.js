// Top Button
jQuery(document).ready(function () {
   		jQuery(".topbutton").hide();
 
	});
	jQuery(window).scroll(function(){
	  if(jQuery(window).scrollTop() > 100){
	      jQuery(".topbutton").fadeIn("slow");
	  }
	});
 
	jQuery(window).scroll(function(){
	  if(jQuery(window).scrollTop() < 100){
	      jQuery(".topbutton").fadeOut("fast");
	  }
	});
 
	jQuery(document).ready(function () {    
	         jQuery('.topbutton').on("click",function() {
	        jQuery("html, body").animate({scrollTop:  jQuery("html").offset().top }, 2500);    
	        });
	});
// Facebook Box
jQuery(document).ready(function () {
      jQuery('.cancelbtn').on('click', function () {
         if (jQuery('#facebook_likebox').is(':visible')) {
             jQuery(this).text('▲');
             jQuery('#facebook_likebox').hide(1000);
             } else {
             jQuery(this).text("▼");
             jQuery('#facebook_likebox').show(1000);
             }
        });
  });