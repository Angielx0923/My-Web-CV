var app = {
  init: function() {
    console.log('init');
  }
};

$(app.init);

// BURGER

$(document).ready(function(){
	$('.burger-nav').click(function(){
		$(this).toggleClass('open');
	});
});