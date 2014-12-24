$(document).ready(function(){
	setTimeout(function(){
		$('body').addClass("loaded").removeClass('ld');

	},3000);

	$('.portrait').hover(function(){
	  $(this).find('img').fadeTo("slow",0.01);
	}, function(){
	  $(this).find('img').fadeTo("slow",1);
	});	
	$('.carousel').carousel({
  		interval: 4800
	});
});
$(window).load(function(){
	var chk = 'F5$40x9';
	localStorage.setItem("info" , 'F5$40x9');
});
function chek(){
	if(!($("#guestc").val() === localStorage.getItem("info"))){
		event.preventDefault();
		$('#hd').css('opacity','1');
		$('#hd').fadeTo(600, 0);
	}
}

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