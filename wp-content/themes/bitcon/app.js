$(function() {

  var  nav = $(".logo");
       navScrolled = ".logo-scrolled";
       header = $('header').height();

  $(window).scroll(function() {
    if( $(this).scrollTop() > header ) {
      nav.addClass(navScrolled);
    } else {
      nav.removeClass(navScrolled);
    }

});
$('.parallax-window').parallax({imageSrc: templateUrl+'/images/stock.jpg'});


});
