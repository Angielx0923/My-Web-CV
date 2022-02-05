var app = {
    init: function() {
      console.log('init');
    }
  };
  
  $(app.init);
  
  "use strict";
  
/*--------------- PARALAX ON BACKGROUNG IMG ---------------*/
  
let Rellax = require('rellax');
let rellax = new Rellax('.rellax');
  
/*--------------- BACKGROUNG IMAGE SIZE ---------------*/
  
let windowSize = window.innerWidth;
  
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
    headerAnim.css({'opacity' : (0 + scrollTop / 200)})
});
  
/*--------------- DESKTOP MENU LINKS ANIMATION WHEN ACTIVE ---------------*/

// Highlight home btn only if it's front-page
if($('.home').length) {
    $('.nav__list__item:first').addClass('active');
}

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
  
link.click(function(e) {

// Make sure this.hash has a value before overriding default behavior
if (this.hash !== "") {
    // Prevent default anchor click behavior
    e.preventDefault();
  
    // Store hash
    var hash = this.hash;
  
    // Using jQuery's animate() method to add smooth page scroll
    // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
    $('html, body').animate({
        // +1 fix the one missing pixel
        scrollTop: $(hash).offset().top - headerAnim.outerHeight() + 1
    }, 800);
            
    } // End if
});

/*--------------- MENU DROPDOWN PORTFOLIO ---------------*/

let portfolioDropdown = $('#menu-item-209');
let errorPageDropdown = $('#menu-item-226');
let languageDropdown  = $('.wpml-ls-menu-item');
let submenu           = $('.custom-sub-menu');
let languageSubMenu   = $('.language-sub-menu');

// PORTOLIO DROPDOWN (ARTICLE PAGE)
if (windowSize >= 768) {
    portfolioDropdown.mouseenter(function () {
        submenu.slideToggle();
    });
    
    portfolioDropdown.mouseleave(function () {
        submenu.slideToggle();
    });
}

// ERROR 404 PAGE DROPDOWN
if (windowSize >= 768) {
    errorPageDropdown.mouseenter(function () {
        submenu.slideToggle();
    });
    
    errorPageDropdown.mouseleave(function () {
        submenu.slideToggle();
    });
}

// LANGUAGE DROPDOWN

// languageDropdown.click(function () {
//     languageSubMenu.slideToggle('fast');
// });


/*--------------- PROGRESS BAR ANIMATION ---------------*/
  
function loadTheBars() {
    $('.progress-bar__value').each(function() {
        var element = $(this);
        var elementBottom = $(this).offset().top + $(this).outerHeight();
        var windowBottom = $(window).scrollTop() + $(window).height();
  
        if(windowBottom > elementBottom){
            element.css({opacity : 0}, 1250);
        }
    });
}
  
$(document).scroll(function() {
    var scrollTop = $(document).scrollTop();
    let skillsOffset = $('.progress-bar').offset().top - window.innerHeight;
    $('.progress-bar').each(function() {
        if (scrollTop > skillsOffset) {
            loadTheBars();
        }
    });
});
  
/*--------------- HOME ANIMATION - HELLO WORLD & PROFIL TITLE ---------------*/
  
let helloWorld = $('#helloWorld');
let profilTitle = $('#profilTitle');
  
helloWorld.css({'opacity' : 0});
profilTitle.css({'opacity' : 0});
  
$(document).scroll(function() {
    let scrollTop = $(document).scrollTop();
    if (scrollTop > 50) {
        helloWorld.animate({opacity : 1}, 300)
        profilTitle.animate({opacity : 1}, 300)
    }
});
  
/*--------------- PROFIL, EDUCATION & FORMATION SECTION ANIMATION ---------------*/
  
if (windowSize >= 768) {
  
    $('.show').css({'opacity' : 0});
  
    /* Every time the window is scrolled ... */
    $(window).scroll( function(){
          
        /* Check the location of each desired element */
        $('.show').each( function(i){
            var bottom_of_object = $(this).offset().top + ($(this).outerHeight() - 25);
            var bottom_of_window = $(window).scrollTop() + $(window).height();
            /* If the object is completely visible in the window, fade it it */
            if(bottom_of_window > bottom_of_object){
                $(this).animate({'opacity':'1'},500);
            }
        });
    });
};

/*--------------- PROFIL, EDUCATION & FORMATION SECTION ANIMATION ---------------*/

let projectItem = $('.portfolio-container__block');
let infoBtn = $('.portfolio-container__info-link');

if(windowSize >= 768) {
    // All project btn set as height 0
    $('.portfolio-container__info-link').css({'height' : 0});
    
    projectItem.each(function() {
        let currentItem = $(this);
        currentItem.mouseenter(function () {
            $(this).find(infoBtn).css({'height' : '3rem'});
        });
        currentItem.mouseleave(function () { 
            infoBtn.css({'height' : 0});
        });
    });
};