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

/*--------------- DESKTOP HEADER ANIMATION ---------------*/

// let checkpoint = 160;
// let headerAnim = $('#headerAnim');

// $(window).scroll(function(){
//     let scrollTop = $(this).scrollTop();
//     let headerAnimHeight = headerAnim.outerHeight();
//     let offset = headerAnimHeight / 2;
//     let calc = 1 - (scrollTop - offset + checkpoint) / checkpoint;

//     headerAnim.css({'opacity' : calc });

//     if (calc > '1') {
//         headerAnim.css({"opacity" : 1})
//     }
//     else {
//         headerAnim.css({"opacity" : 0})
//     }
    
// });
