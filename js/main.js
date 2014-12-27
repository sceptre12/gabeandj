$(window).load(function(){
	$('body').imagesLoaded( function() {
	   setTimeout(function(){
	   			$('body').addClass("loaded").removeClass('ld');
	   		}, 3000);
	});
});
$(document).ready(function(){
	$('.portrait').hover(function(){
	  $(this).find('img').fadeTo("slow",0.01);
	}, function(){
	  $(this).find('img').fadeTo("slow",1);
	});	
	$('.carousel').carousel({
  		interval: 4800
	});
	sessionStorage.clear();
	var chk = ["1Dp8g","2&LJ98","3M8p$t","4wjR7k","5eF9@w"];
	sessionStorage.setItem("info" , JSON.stringify(chk));	
});
function chek(){
	var inform = JSON.parse(sessionStorage.getItem("info"));
	var found = false;
	for(var a = 0; a < inform.length; a++){
		if($("#guestc").val() === inform[a]){
			found = true;
			sessionStorage.clear();
			sessionStorage.setItem("item", inform[a]);
		}
	}
	if( !(found === true)){
		event.preventDefault();
		$('#hd').css('opacity','1');
		$('#hd').fadeTo(600, 0);
	}
	else{	
			sessionStorage.setItem("pass", "true");			
		}	
}
// smooth scrolling
$('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
        || location.hostname == this.hostname) {

        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
           if (target.length) {
             $('html,body').animate({
                 scrollTop: target.offset().top
            }, 1000);
            return false;
        }
    }
});