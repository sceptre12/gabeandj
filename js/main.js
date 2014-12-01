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

// var i;
// var b = 0;
// for( i = 0; i < $('li').length; i++)
// {
//   b++;
//  if( $('li')[i].innerHTML != ""){
//    localStorage.setItem("item"+b, $('li')[i].innerHTML);
//  }else{
//   b--;
//  }
// }