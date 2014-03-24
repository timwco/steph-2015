// Run the menu
$(document).ready(function() {

	// Responsive Menu
	$('#main-navigation').meanmenu({
		meanScreenWidth: '960'
	});


	var userFeed = new Instafeed({
        get: 'user',
        userId: 44026617,
        accessToken: '44026617.467ede5.6d581dadeaeb41e9805c31a08c122589',
		template: '<li><a target="_blank" href="{{link}}"><img src="{{image}}" ></a></li>',
		limit: 9
    });
    userFeed.run();


});
