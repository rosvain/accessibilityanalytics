// JavaScript Document


// FADE IN BODY ON PAGE LOAD
var opacity = function() {
	  $('body').css('opacity', '0').fadeTo(800, 1,'swing'); 
};
	
// SLIDE IN LEFT NAVIGATION
var main = function() {
  $('.icon-menu').click( function(){
	  if($('nav').hasClass("active")){
		 $('nav').animate({left: '-285px'}, 100).removeClass("active");
         $('body').animate({left: '0px'}, 100);
		 $('article').fadeTo(200, 1);
      }else{
        $('nav').animate({left: '0px'}, 100).addClass("active");
		$('body').animate({left: '285px'}, 100);
		$('article').fadeTo(200, .5);
      }
  });
  $('.icon-close').click(function(){
    $('nav').animate({left: '-285px'}, 100).removeClass("active");
    $('body').animate({left: '0px'}, 100);
	$('article').fadeTo(200, 1);
  });
};

$(document).ready(main);
$(document).ready(opacity);