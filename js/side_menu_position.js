jQuery(function () {
    jQuery(window).on('load resize', function () {
jQuery(window).scroll(function () {
    if (jQuery(this).scrollTop() > 800) {
        jQuery('.side-menu').css('position','unset')
    } else {
        jQuery('.side-menu').css('position','fixed')
    }
})
    });
});

