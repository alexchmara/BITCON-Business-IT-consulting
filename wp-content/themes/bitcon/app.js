$(function() {

    var nav = $(".logo");
    var navScrolled = ".logo-scrolled";
    var header = $('header').height();
    var link = $('.menu').find('a');
    var menu = $('ul');
    var hamburger = $(".hamburger");

    $(window).scroll(function(event) {
        if ($(this).scrollTop() > header) {
            nav.addClass(navScrolled);
        } else {
            nav.removeClass(navScrolled);
        }
    });

    link.on('click', function(event) {
        var href = $(this).attr('href');
        var posTop = $(href).position().top;
        header = $('header').height();
        $('body,html').animate({
            scrollTop: posTop-header,
        }, 550);

        return false;
    });

    $('.parallax-window').parallax({
        imageSrc: templateUrl + '/images/meet.jpg'
    });



   hamburger.on('click', function() {
    menu.toggleClass('expand');
   });




});
