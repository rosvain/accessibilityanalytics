// JavaScript Document


// FADE IN BODY ON PAGE LOAD
var opacity = function() {
	  $('body').css('opacity', '0').fadeTo(1100, 1,'swing'); 
};
	
// SLIDE IN LEFT NAVIGATION
var main = function() {
  $('.icon-menu').click( function(){
      $('nav').animate({left: '0px'}, 200);
      $('body').animate({left: '285px'}, 200);
  });
  $('.icon-close').click(function(){
    $('nav').animate({left: '-285px'}, 200);
    $('body').animate({left: '0px'}, 200);
  });
};
$(document).ready(main);
$(document).ready(opacity);