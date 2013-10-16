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
});