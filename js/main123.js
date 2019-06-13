(function ($) {
    "use strict";

    /* ********************************************
		1. jQuery MeanMenu
	******************************************** */
    jQuery('nav#dropdown').meanmenu();

})(jQuery);

/* ********************************************
    2. STICKY sticky-header
******************************************** */
$(window).scroll(function () {
    if ($(this).scrollTop() > 1) {
        $('#sticky-header').addClass("sticky");
    }
    else {
        $('#sticky-header').removeClass("sticky");
    }
});
/* ********************************************************* */

