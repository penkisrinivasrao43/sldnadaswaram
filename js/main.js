(function ($) {
  "use strict";

  /*=============preload==========*/

  $(window).on("load", function () {
    // Animate loader off screen
    $(".se-pre-con").fadeOut("slow");
  });

  /*======== Sticky Header =======*/
  var win = $(window);
  win.on("scroll", function () {
    if ($(this).scrollTop() > 20) {
      $("#sticky-header").addClass("sticky");
    } else {
      $("#sticky-header").removeClass("sticky");
    }
  });

  // owlCarousel banner-slider
  $(".banner-slider").owlCarousel({
    items: 1,
    animateOut: "fadeOut",
    loop: true,
    autoplay: "true",
    animateIn: "fadeIn",
    items: 1,
    smartSpeed: 600,
  });

  // owlCarousel testimonial-slider
  $(".testimonial-slider").owlCarousel({
    items: 1,
    animateOut: "fadeOut",
    loop: true,
    autoplay: "true",
    animateIn: "fadeIn",
    items: 1,
    smartSpeed: 600,
  });
})(jQuery);
