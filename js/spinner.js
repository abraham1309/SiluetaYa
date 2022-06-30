/* Funcion para el spinner */
(function($) {
    "use strict";

    $(window).on('load', function() {
        var preloaderFadeOutTime = 500;

        function hidePreloader() {
            var preloader = $('.spinner-wrapper');
            setTimeout(function() {
                preloader.fadeOut(preloaderFadeOutTime);
            }, 2000);
        }
        hidePreloader();
    });
})(jQuery);