// A $( document ).ready() block.

$(document).ready(function() {
    setTimeout(function() {
        $('body').removeClass('preload').addClass('loaded');

    }, 5000);
});