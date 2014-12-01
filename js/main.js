$(document).ready(function() {
	$('.carousel').carousel({
  interval: 3800
	});
});



$(window).load(function(){
	$(document.body).fadeIn(4400);
});


var clear = ClearStorage();

function ClearStorage(){
	$($('button')[1]).click(function(){
	localStorage.clear();
	});
}