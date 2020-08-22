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

function burgerContentToggle() {
    $('.burger__nav').toggleClass('open');
    $('.burger__nav__content').toggleClass('open__content');
    $('.burger__content').toggleClass('burger__content--is-open');
    $('.dark-overlay').toggleClass('dark-overlay--active');
}

// Au click sur le menu burger
$(document).ready(function(){
    $('.burger__nav').click(function(){
        burgerContentToggle();
	});
});

// Au clic sur les liens contenus dans le menu burger
$('.nav__list__item').click(function() {
    if($('.burger__nav').hasClass('open')) {
        burgerContentToggle();
    }
});

/*--------------- DESKTOP HEADER ANIMATION ---------------*/

let headerAnim = $('#headerAnim');
let socialMedia = $('#socialMediaNav');

$(window).scroll(function(){
    let scrollTop = $(this).scrollTop();
    if (windowSize >= 767) {
        socialMedia.css({'opacity' : (0 + scrollTop / 250)})
    }
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

/*--------------- PROGRESS BAR ANIMATION ---------------*/

$('.progress-bar__value').each(function() {
    var value = $(this).attr('value');
   $(this).animate({width: value}, 1500);    
});