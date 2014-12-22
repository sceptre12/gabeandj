$(document).ready(function(){

	$('.portrait').hover(function(){
	  $(this).find('img').fadeTo("slow",0.01);
	}, function(){
	  $(this).find('img').fadeTo("slow",1);
	});	
	$('.carousel').carousel({
  		interval: 4800
	});
});
