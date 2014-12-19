$(document).ready(function(){
	
	// when the mouse hovers over the pictures they change to a different color
	$('.portrait').hover(function(){
	  $(this).find('img').fadeTo("slow",0.01);
	}, function(){
	  $(this).find('img').fadeTo("slow",1);
	});	
});

$('.carousel').carousel({
  		interval: 3800
});

