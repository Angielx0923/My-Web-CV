var app = {
  init: function() {
    console.log('init');
  }
};

$(app.init);

/*--------------- BURGER BUTTON ---------------*/

$(document).ready(function(){
  $('.burger__nav').click(function(){
    $(this).toggleClass('open'),
    $('.burger__nav__content').toggleClass('open__content');
    $('.burger__content').toggleClass('burger__content--open');
    $("#burger__sidebar").animate({width: 'toggle'});
    $(".burger__content").fadeToggle(300);
	});
});
