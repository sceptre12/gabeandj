$(document).ready(function(){
	setTimeout(function(){
		$('body').addClass("loaded").removeClass('ld');

	},3000);

	$('.portrait').hover(function(){
	  $(this).find('img').fadeTo("slow",0.01);
	}, function(){
	  $(this).find('img').fadeTo("slow",1);
	});	
	$('.carousel').carousel({
  		interval: 4800
	});
});
