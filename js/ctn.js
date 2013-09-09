jQuery('document').ready(function() {
  
  jQuery('#myCarousel').carousel();

  jQuery('.show-carousel').carouFredSel({
  	items: 4,
    responsive: true,
    auto: {
      items: 1,
  		duration:1200,
  		easing: 'linear',
  		timeoutDuration: 0,
      onAfter: function() {
        var items = jQuery(this).triggerHandler('currentVisible');
        items.find('img.lazy').each(function() {
          var img = jQuery(this),
              src = img.attr('src'),
              original = img.data('original');

          if(original !== src) {
            console.log('replacing src');
            img.attr('src', original);
          }
        });
      }
  	},
    onCreate: function() {
      var items = jQuery(this).triggerHandler('currentVisible');
        items.find('img.lazy').each(function() {
          var img = jQuery(this),
              src = img.attr('src'),
              original = img.data('original');

          if(original !== src) {
            console.log('replacing src');
            img.attr('src', original);
          }
        });
    },
  	swipe: {
  		onTouch: true,
  		onMouse: false
  	}
  }).trigger('pause');

  jQuery('.carousel-control').hover(function() {
    var $carousel = jQuery(jQuery(this).attr('href')).find('.show-carousel'),
        direction = jQuery(this).data('direction');

    $carousel.trigger('configuration', ['direction', direction]);

  	$carousel.trigger('play');
  }, function() {
    var $carousel = jQuery(jQuery(this).attr('href')).find('.show-carousel')
  	$carousel.trigger('pause');
  }).click(function() {
  	return false;
  });
  
});