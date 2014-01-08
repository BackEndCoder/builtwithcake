$(function(){
      
	var $container = $('#projects');

	$container.isotope({
		resizable: false,
		itemSelector: '.project',
		masonry : {
			columnWidth : $container.width() / 5,
			gutterWidth : 10
		}
	});

	$(window).smartresize(function(){
		$container.isotope({
			masonry: { columnWidth: $container.width() / 5 }
		});
	});

});
