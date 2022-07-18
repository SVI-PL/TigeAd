jQuery(document).ready(function ($) {

    $('.mobile_menu').on('click', function() {
        $(this).toggleClass('active');
        $(".header-nav").toggleClass('active');
        $("body").toggleClass('active');
    });
    
    let btn = $('.up_box');

    $(window).scroll(function() {
      if ($(window).scrollTop() > 300) {
        btn.addClass('show');
      } else {
        btn.removeClass('show');
      }
    });
    
    btn.on('click', function(e) {
      e.preventDefault();
      $('html, body').animate({scrollTop:0}, '300');
    });


});