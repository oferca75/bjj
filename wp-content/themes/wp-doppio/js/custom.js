jQuery(document).ready(function ($) {
    var $container = $('#manson');
    // initialize
    $container.imagesLoaded(function () {
        $container.masonry({
            columnWidth: '.item',
            itemSelector: '.item'
        });
    });

    $('.carousel').carousel({
        interval: slider_speed.vars
    });

});