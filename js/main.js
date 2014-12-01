$(document).ready(function() {
	$('.carousel').carousel({
  interval: 3800
	});
});



$(window).load(function(){
	$(document.body).fadeIn(4400);
});



function ClearStorage(){
	$($('button')[1]).click(function(){
	localStorage.clear();
	});
};

function SaveStorage(){
	$($('button')[0]).click(function(){
		var b = 0;
		for( i = 0; i < $('li').length; i++){
			b++;
			if( $('li')[i].innerHTML != ""){
			   	localStorage.setItem("item"+b, $('li')[i].innerHTML);
			}else{
				b--;
			}
		}
	});
};
