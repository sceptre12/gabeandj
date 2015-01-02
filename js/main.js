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
	if($('#home').length){
		$('.carousel').carousel({
	  		interval: 4800
		});
		if($(window).width() < 500){
				$('.animatedElement').css('visibility','visible').removeClass('animatedElement');
			}
		$(window).resize(function(){
			if($(window).width() < 500){
				$('.animatedElement').css('visibility','visible').removeClass('animatedElement');
			}
		});
	}	
	sessionStorage.clear();
	var chk = ["1Dp8g","2&LJ98","3M8p$t","4wjR7k","5eF9@w"];
	sessionStorage.setItem("info" , JSON.stringify(chk));
	if($('#album').length){
		$('li').find('div').each(function(){
			if($('#targ').length){
				$('#targ').find('div').wrap('<a></a>');
				$('#targ').find('a').attr('href','https://www-secure.target.com/gift-registry/giftgiver?registryId=xPJo25ZAlP0_KWjqm6IRjw&clkid=UVHTMsyEpyR1yVAVgC0sNUDyUkV2Jvzfz1%3A%3A200&lnm=Online+Tracking+Link&afid=The+Knot%2C+Inc.+and+Subsidiaries&ref=tgt_adv_xasd0002');
			}
			if ($('#wally').length){
				$('#wally').find('div').wrap('<a></a>');
				$('#wally').find('a').attr('href','https://www.walmart.com/lists/view-wedding-registry-items?id=47f55f0c-87d3-46f6-b90e-439127f489a5');
			}
			$(this).hover(function(){
				$(this).find('h3').fadeIn('fast').addClass('floating');
			}, function(){
				$(this).find('h3').removeClass('floating').fadeOut('fast');
			});
		});
	}	
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