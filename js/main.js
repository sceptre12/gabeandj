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



// $(window).load(function(){
// 	var arP =[
// 		"img/Augustin083.jpg",
// 		"img/Augustin116.jpg",
// 		"img/Augustin071.jpg",
// 		"img/Augustin063.jpg",
// 		"img/Augustin035.jpg",
// 		"img/Augustin016.jpg",
// 		"img/Augustin015.jpg",
// 		"img/img10mid.jpg",
// 		"img/img12mid.jpg",
// 		"img/Augustin022.jpg",
// 		"img/Augustin067.jpg"
// 	];
// 	function preload(arP){
// 		$(arP).each(function(){
// 			$('<img />').attr('src',this).appendTo('body').css('display','none');
// 		});
// 	}
	
// });
