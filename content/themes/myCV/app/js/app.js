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
    $('#burger__content').toggleClass('is-open');
    $('#burger__sidebar').toggleClass('is-open');
	});
});

// $(document).ready(function(){
//   $('.burger__nav').click(function(event){
//     event.preventDefault();
//     $(this).parent().toggleClass('is-activated');
//   });
// });

/*--------------- BURGER SIDEBAR ---------------*/


// Je stocke dans une variable tout le contenu du burger (tous les éléments qui le compose : nav, boutton, overlay...)
// $content = $('#burger__content');

// Je fais pareil pour l'espace qui sera aloué au menu version mobile
// $sidebarBody = $('#burger__sidebar__body');

// Je lui dis que je veux qu'il copie le contenu du burger dans l'espace aloué (ici sidebar)
// $sidebarBody.html($content.html());


