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
  	$("#form-contact").validationEngine('attach', {promptPosition : "bottomLeft", scroll: false});
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
	$(window).scroll(function() {
		if ($(this).scrollTop() > offset) {
			$('.back-to-top').fadeIn(duration);
		} else {
			$('.back-to-top').fadeOut(duration);
		}
	});
	
	$('.back-to-top').click(function(event) {
		event.preventDefault();
		$('html, body').animate({scrollTop: 0}, duration);
		return false;
	});

	$("#sendmail").on('click', function(event){
	  var inputname = $('#inputname').val();
	  var inputphone = $('#inputphone').val();
	  var inputemail = $('#inputemail').val();
	  var inputquery = $('#inputquery').val();

	  event.preventDefault();
	  $.ajax({
	    url: "validation.php",
	    data: {
	            'inputname': inputname,
	            'inputphone': inputphone,
	            'inputemail': inputemail,
	            'inputquery': inputquery
	          },
	    type: 'POST',
	    success: function(datos){
	      $('#contact-form').html(datos);
	      $('.openform').click();
	      console.log(datos);
	    }
	  });
	});
	
});