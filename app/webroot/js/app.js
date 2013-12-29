$(function(){
      
	var $container = $('#projects');

	$container.isotope({
		resizable: false,
		itemSelector: '.project',
		masonry : {
			columnWidth : { columnWidth: $container.width() / 5 }
		}
	});

	$(window).smartresize(function(){
		$container.isotope({
			masonry: { columnWidth: $container.width() / 5 }
		});
	});

});
