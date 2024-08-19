$(document).ready(function() {
	
	$('.toggle_menu_mobile').on('click touchstart', function(e){
		$('html').toggleClass('menu-active');
                e.preventDefault();
	});
	
});

