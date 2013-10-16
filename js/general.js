$(document).ready(function(){
	$('.openform').click(function() {
	  
	  var items = [];
	  $($(this).attr('href')).find('.slide').each(function() {
	    items.push({
	      src: $(this) 
	    });
	  });
	  
	  $.magnificPopup.open({
		    items:items,
		    gallery: {
	      enabled: true 
	    }
	  });
	});

	$("a#go_es_mul").click(function() {
		$('html,body').animate({scrollTop: $("#es_mul").offset().top},'slow');
	});

	$("a#go_cred").click(function() {
		$('html,body').animate({scrollTop: $("#goto_red").offset().top},'slow');
	});

	$("a#go_cblue").click(function() {
		$('html,body').animate({scrollTop: $("#goto_blue").offset().top},'slow');
	});

	$("a#go_cgreen").click(function() {
		$('html,body').animate({scrollTop: $("#goto_green").offset().top},'slow');
	});
	
	var offset = 220;
	var duration = 500;
	jQuery(window).scroll(function() {
		if (jQuery(this).scrollTop() > offset) {
			jQuery('.back-to-top').fadeIn(duration);
		} else {
			jQuery('.back-to-top').fadeOut(duration);
		}
	});
	
	jQuery('.back-to-top').click(function(event) {
		event.preventDefault();
		jQuery('html, body').animate({scrollTop: 0}, duration);
		return false;
	})

	
});