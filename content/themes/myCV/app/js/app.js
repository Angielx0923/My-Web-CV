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

let headerAnim = $('#headerAnim');

$(window).scroll(function(){
    let scrollTop = $(this).scrollTop();
    headerAnim.css({'opacity' : (0 + scrollTop / 250)})    
});

/*--------------- DESKTOP MENU LINKS ANIMATION WHEN ACTIVE ---------------*/

$(window).scroll(function() {
    let scrollTop = $(this).scrollTop();
    let range = -80;
    if (scrollTop >= range) {
        $('.section-part').each(function(i) {
            if ($(this).position().top <= scrollTop - range) {
                $('.nav__list__item.active').removeClass('active');
                $('.nav__list__item').eq(i).addClass('active');
            }
        });
    }
    else {
        $('.nav__list__item.active').removeClass('active');
        $('.nav__list__item:first').addClass('active');
    }
});

/*--------------- SMOOTH ANIMATION ON CLIC TO A NAV LINK ---------------*/

let link = $('.nav__list__item__link');

link.click(function() {
    let scrollAnchor = $(this).attr('data-scroll');
    let scrollPoint  = $('section[data-anchor="' + scrollAnchor + '"]').offset().top - headerAnim.outerHeight();

    $('body, html').animate({
        scrollTop: scrollPoint
    }, 800);
});