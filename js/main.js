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
// var b = i;
// for( i = 0; i <= $('li').length; i++)
// {
//   b = 0 + i ;
//  if(typeof $('li')[i].innerHTML !== "undefined"){
//    alert('not undefined');
//  }else{
//   b--;
//  }