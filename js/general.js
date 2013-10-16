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
});