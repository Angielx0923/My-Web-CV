var app = {
  init: function() {
    console.log('init');
  }
};

$(app.init);

/*--------------- BURGER BUTTON ---------------*/

$activatedClass = $('burger-activated');

$(document).ready(function(){
	$('.burger-nav').click(function(){
    $(this).toggleClass('open'),
    $('.burger-nav__content').toggleClass('open__content');
	});
});

$('.burger-nav').on('click', (event) => {
  event.preventDefault();

  $('.burger-nav').parent(2).addClass($activatedClass);
});

/*--------------- BURGER SIDEBAR ---------------*/


// Je stocke dans une variable tout le contenu du burger (tous les éléments qui le compose : nav, boutton, overlay...)
$content = $('#burger__content');

// Je fais pareil pour l'espace qui sera aloué au menu version mobile
$sidebarBody = $('#burger-sidebar__body');

// Je lui dis que je veux qu'il copie le contenu du burger dans l'espace aloué (ici sidebar)
$sidebarBody.html($content.html());