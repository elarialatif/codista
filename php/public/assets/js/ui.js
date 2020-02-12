AOS.init();
$(document).ready(function() {
    jQuery("html[dir=rtl]").find("head").append('<link rel="stylesheet" href="assets/css/rtl.css">');

    setTimeout(function() {
        $('body').removeClass('preload').addClass('loaded');

    }, 3000);

    // li active after reload
    var selector = '.top-nav .nav li';
    var url = window.location.href;
    var target = url.split('/');
    $(selector).each(function() {
        if ($(this).find('a').attr('href') === ('/' + target[target.length - 1])) {
            $(selector).removeClass('active');
            $(this).removeClass('active').addClass('active');
        }
    });
});