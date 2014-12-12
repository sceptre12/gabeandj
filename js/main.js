$(window).load(function(){
	$(document.body).fadeIn(4400);

});


$(document).ready(function(){

	$('.carousel').carousel({
  		interval: 3800
	});
	$('.portrait').hover(function(){
	  $(this).find('img').fadeTo("slow",0.01);
	}, function(){
	  $(this).find('img').fadeTo("slow",1);
	});
});
