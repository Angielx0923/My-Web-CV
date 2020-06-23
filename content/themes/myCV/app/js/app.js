var app = {
  init: function() {
    console.log('init');
  }
};

$(app.init);

/*--------------- BURGER BUTTON ---------------*/
// $activatedClass = $('burger-activated');

$(document).ready(function(){
  $('.burger__nav').click(function(){
    $(this).toggleClass('open'),
    $('.burger__nav__content').toggleClass('open__content');
    // $(".burger__content").slideToggle(400);
    // $(".burger__sidebar").slideToggle(400);
    $(".burger__content").animate({width: 'toggle'});
    $(".burger__sidebar").animate({width: 'toggle'});
	});
});
