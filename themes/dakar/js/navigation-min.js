jQuery(".menu-toggle").click(function(){jQuery(this).toggleClass("active"),jQuery(".main-navigation").toggleClass("active")}),jQuery(function(){var e=jQuery(".site-header");jQuery(window).scroll(function(){jQuery(window).scrollTop()>=300?e.addClass("scrolled"):e.removeClass("scrolled")})});