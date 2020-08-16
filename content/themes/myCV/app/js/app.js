var app = {
  init: function() {
    console.log('init');
  }
};

$(app.init);

"use strict";
/*--------------- BACKGROUNG IMAGE SIZE ---------------*/

let windowSize = window.innerWidth;
console.log(windowSize);

if (windowSize <= 767) {
  backgroundSize();
}

function backgroundSize() {
    $('#bg-progile').attr('style', 'background-image: url(img/6-tablets.jpg)');
    $('#bg-oroadtrip').attr('style', 'background-image: url(img/portfolio/oroadtrip-mobile.jpg)');
    $('#bg-hypnosis').attr('style', 'background-image: url(img/portfolio/hypnose/hypnose-mobile.jpg)');
    $('#bg-alm').attr('style', 'background-image: url(img/5-mobile.jpg)');
};

/*--------------- BURGER BUTTON ---------------*/

$(document).ready(function(){
  $('.burger__nav').click(function(){
    $(this).toggleClass('open'),
    $('.burger__nav__content').toggleClass('open__content');
    $('.burger__content').toggleClass('burger__content--is-open');
	});
});

