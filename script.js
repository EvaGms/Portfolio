/*function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
      x.className += " responsive";
  } 
  else {
      x.className = "topnav";      
  }
}*/

$(document).ready(function(){
	$('.navbar-handle').click(function(){
		$('.header_class').css('height', '150px');
	});		

	$('a[href^="#"]').click(function(){
		var the_id = $(this).attr("href");
		if (the_id === '#') {
			return;
		}
		$('html, body').animate({
			scrollTop:$(the_id).offset().top
		}, 'slow');
		return false;
	});

	$('#logo_photoshop').hover(function(){
		$('#logo_photoshop').hide();
		$('#logo_photoshop_green').show();
		$('#logo_photoshop').hide();
	});

	$('#logo_illustrator').hover(function(){
		$('#logo_illustrator').hide();
		$('#logo_illustrator_green').show();
		$('#logo_illustrator').hide();
	});	

	$('#logo_indesign').hover(function(){
		$('#logo_indesign').hide();
		$('#logo_indesign_green').show();
		$('#logo_indesign').hide();
	});

	$('#logo_html').hover(function(){
		$('#logo_html').hide();
		$('#logo_html_green').show();
		$('#logo_html').hide();
	});

	$('#logo_css').hover(function(){
		$('#logo_css').hide();
		$('#logo_css_green').show();
		$('#logo_css').hide();
	});

	$('#logo_js').hover(function(){
		$('#logo_js').hide();
		$('#logo_js_green').show();
		$('#logo_js').hide();
	});

	$('#logo_php').hover(function(){
		$('#logo_php').hide();
		$('#logo_php_green').show();
		$('#logo_php').hide();
	});

	$('#logo_bootstrap').hover(function(){
		$('#logo_bootstrap').hide();
		$('#logo_bootstrap_green').show();
		$('#logo_bootstrap').hide();
	});

	$('#logo_symfony').hover(function(){
		$('#logo_symfony').hide();
		$('#logo_symfony_green').show();
		$('#logo_symfony').hide();
	});

	$('#logo_wordpress').hover(function(){
		$('#logo_wordpress').hide();
		$('#logo_wordpress_green').show();
		$('#logo_wordpress').hide();
	});
});



