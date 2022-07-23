jQuery(document).ready(function ($) {

  $('.mobile_menu').on('click', function () {
    $(this).toggleClass('active');
    $(".header-nav").toggleClass('active');
    $("body").toggleClass('active');
  });

  let btn = $('.up_box');

  $(window).scroll(function () {
    if ($(window).scrollTop() > 300) {
      btn.addClass('show');
    } else {
      btn.removeClass('show');
    }
  });

  btn.on('click', function (e) {
    e.preventDefault();
    $('html, body').animate({ scrollTop: 0 }, '300');
  });

  $('.dropdown__top').click(function () {
    if ($(this).parent(".dropdown").hasClass("open")) {
      $(this).parent(".dropdown").removeClass("open");
      $(this).siblings(".dropdown__btm").slideUp(500);
    } else {
      $(".dropdown").removeClass("open");
      $(".dropdown .dropdown__btm").slideUp(500);
      $(this).parent(".dropdown").addClass("open");
      $(this).siblings(".dropdown__btm").slideDown(500);
    }
  });

  $('.play').on("click", function () {
    $(this).toggleClass('active');
    $(".poster").addClass('active');
    $("#vPlayer").get(0).play();
  });

  $('#vPlayer').on("click", function () {
    $(".play").toggleClass('active');
    $("#vPlayer").get(0).pause();
  });

});