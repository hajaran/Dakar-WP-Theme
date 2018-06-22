 //dkr_vignetteSlider Slider
 jQuery(document).ready(function( jQuery ) {
 	jQuery('.dakar_section-surrounding-slides .item').first().addClass('current');
 	jQuery('.dakar_section-surrounding-slides .vignette').first().addClass('current');
 });

//Go to correct Slide on vignette click
jQuery( ".dakar_section-surrounding-slides .vignette" ).click(function() {
	var slideNb = jQuery(this).attr('data-slide-nb');
	jQuery('.dakar_section-surrounding-slides .item.current').removeClass('current');
	jQuery('.dakar_section-surrounding-slides .vignette.current').removeClass('current');

	jQuery('.dakar_section-surrounding-slides .vignette[data-slide-nb = '+slideNb+']').addClass('current');
	jQuery('.dakar_section-surrounding-slides .item[data-slide-nb = '+slideNb+']').addClass('current');
});

function dkr_vignetteSlider_NextSlide() {
  // Change the slide
  if (  jQuery('.dakar_section-surrounding-slides .item.current').is('.dakar_section-surrounding-slides .item:last-of-type') ) {
  	jQuery('.dakar_section-surrounding-slides .item.current').removeClass('current');
  	jQuery('.dakar_section-surrounding-slides .item:first-of-type').addClass('current');
  } else {
  	jQuery('.dakar_section-surrounding-slides .item.current').removeClass('current').next().addClass('current');
  }

  // Change the vignette
  if (  jQuery('.dakar_section-surrounding-slides .vignette.current').is('.dakar_section-surrounding-slides .vignette:last-of-type') ) {
  	jQuery('.dakar_section-surrounding-slides .vignette.current').removeClass('current');
  	jQuery('.dakar_section-surrounding-slides .vignette:first-of-type').addClass('current');
  } else {
  	jQuery('.dakar_section-surrounding-slides .vignette.current').removeClass('current').next().addClass('current');
  }
}
function dkr_vignetteSlider_PrevSlide() {
  // Change the slide
  if (  jQuery('.dakar_section-surrounding-slides .item.current').is('.dakar_section-surrounding-slides .item:first-of-type') ) {
  	jQuery('.dakar_section-surrounding-slides .item.current').removeClass('current');
  	jQuery('.dakar_section-surrounding-slides .item:last-of-type').addClass('current');
  } else {
  	jQuery('.dakar_section-surrounding-slides .item.current').removeClass('current').prev().addClass('current');
  }

  // Change the vignette
  if (  jQuery('.dakar_section-surrounding-slides .vignette.current').is('.dakar_section-surrounding-slides .vignette:first-of-type') ) {
  	jQuery('.dakar_section-surrounding-slides .vignette.current').removeClass('current');
  	jQuery('.dakar_section-surrounding-slides .vignette:last-of-type').addClass('current');
  } else {
  	jQuery('.dakar_section-surrounding-slides .vignette.current').removeClass('current').prev().addClass('current');
  }
}
//On click go to next/previous slide
jQuery( ".dakar_section-surrounding-slides .next" ).click(function() {
	dkr_vignetteSlider_NextSlide();
});

jQuery( ".dakar_section-surrounding-slides .prev" ).click(function() {
	dkr_vignetteSlider_PrevSlide();
});

window.setInterval(function(){
	dkr_vignetteSlider_NextSlide();
}, 6000);