jQuery('.menu-toggle').click(function() {
	jQuery(this).toggleClass('active');
	jQuery('.main-navigation').toggleClass('active');
})

jQuery(function() {
    //caches a jQuery object containing the header element
    var header = jQuery(".site-header");
    jQuery(window).scroll(function() {
        var scroll = jQuery(window).scrollTop();

        if (scroll >= 300) {
            header.addClass("scrolled");
        } else {
            header.removeClass("scrolled");
        }
    });
});