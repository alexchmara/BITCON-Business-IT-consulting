$(function() {

    var nav = $(".logo");
    navScrolled = ".logo-scrolled";
    header = $('header').height();

    $(window).scroll(function() {
        if ($(this).scrollTop() > header) {
            nav.addClass(navScrolled);
        } else {
            nav.removeClass(navScrolled);
        }

    });

    var link = $('.menu').find('a');

    link.on('click', function(event) {
        var href = $(this).attr('href');
        var posTop = $(href).position().top;
        $('body,html').animate({
            scrollTop: posTop
        }, 500);

        return false;
    });


    $('.parallax-window').parallax({
        imageSrc: templateUrl + '/images/meet.jpg'
    });


});
