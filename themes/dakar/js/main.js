//Animations

jQuery('.animated').viewportChecker({
    classToAdd: 'visible', // Class to add to the elements when they are visible,
    //classToAddForFullView: 'full-visible', // Class to add when an item is completely visible in the viewport
    //classToRemove: 'invisible', // Class to remove before adding 'classToAdd' to the elements
    //removeClassAfterAnimation: false, // Remove added classes after animation has finished
    //offset: [100 OR 10%], // The offset of the elements (let them appear earlier or later). This can also be percentage based by adding a '%' at the end
    //invertBottomOffset: true, // Add the offset as a negative number to the element's bottom
    repeat: false, // Add the possibility to remove the class if the elements are not visible
    //callbackFunction: function(elem, action){}, // Callback to do after a class was added to an element. Action will return "add" or "remove", depending if the class was added or removed
	//scrollHorizontal: false // Set to true if your website scrolls horizontal instead of vertical.
});

//Testimonial Slider
jQuery(document).ready(function( jQuery ) {
jQuery('.testimonial-slider .item').first().addClass('active');
jQuery('.testimonial-slider .dot').first().addClass('active');
});
function Testimonial_NextSlide() {
// Change the slide
if (  jQuery('.testimonial-slider .item.active').is('.testimonial-slider .item:last-of-type') ) {
jQuery('.testimonial-slider .item.active').removeClass('active');
jQuery('.testimonial-slider .item:first-of-type').addClass('active');
} else {
jQuery('.testimonial-slider .item.active').removeClass('active').next().addClass('active');
}

// Change the dot
if (  jQuery('.testimonial-slider .dot.active').is('.testimonial-slider .dot:last-of-type') ) {
jQuery('.testimonial-slider .dot.active').removeClass('active');
jQuery('.testimonial-slider .dot:first-of-type').addClass('active');
} else {
jQuery('.testimonial-slider .dot.active').removeClass('active').next().addClass('active');
}
}
function Testimonial_PrevSlide() {
// Change the slide
if (  jQuery('.testimonial-slider .item.active').is('.testimonial-slider .item:first-of-type') ) {
jQuery('.testimonial-slider .item.active').removeClass('active');
jQuery('.testimonial-slider .item:last-of-type').addClass('active');
} else {
jQuery('.testimonial-slider .item.active').removeClass('active').prev().addClass('active');
}

// Change the dot
if (  jQuery('.testimonial-slider .dot.active').is('.testimonial-slider .dot:first-of-type') ) {
jQuery('.testimonial-slider .dot.active').removeClass('active');
jQuery('.testimonial-slider .dot:last-of-type').addClass('active');
} else {
jQuery('.testimonial-slider .dot.active').removeClass('active').prev().addClass('active');
}

}
//On click go to next/previous slide
jQuery( ".testimonial-slider .next" ).click(function() {
event.preventDefault();
Testimonial_NextSlide();
});

jQuery( ".testimonial-slider .prev" ).click(function() {
event.preventDefault();
Testimonial_PrevSlide();
});

window.setInterval(function(){
Testimonial_NextSlide();
}, 4000);

//Rooms navigation

jQuery('.rooms-slider-navigation .next').click(function() {
  event.preventDefault();
  jQuery('.section-hotel-rooms .wrapper').animate( { scrollLeft: '+=330' }, 600)
});
jQuery('.rooms-slider-navigation .prev').click(function() {
  event.preventDefault();
  jQuery('.section-hotel-rooms .wrapper').animate( { scrollLeft: '-=330' }, 600)
});



