(function ($) {
  "use strict";
  var browserWindow = $(window);

  browserWindow.on("load", function () {
    $(".preloader").fadeOut("slow", function () {
      $(this).remove();
    });
  });
})(jQuery);

var initialDate = new Date(2019, 11, 11);
var now = Date.now();
var difference = now - initialDate;
var millisecondsPerDay = 24 * 60 * 60 * 1000;
var daysSince = Math.floor(difference / millisecondsPerDay) * 17;
var countIn = document.getElementById("counterUp");
if (countIn) countIn.innerHTML = daysSince;

$(document).ready(function () {
  $(".hero-slideshow").owlCarousel({
    items: 1,
    loop: true,
    nav: true,
    navText: [
      "<i class='fas fa-angle-left'></i>",
      "<i class='fas fa-angle-right'></i>",
    ],
    dots: false,
    autoplay: true,
    autoplayTimeout: 10000,
    smartSpeed: 500,
    animateIn: "fadeIn",
    animateOut: "fadeOut",
  });

  $(".products-carousel").owlCarousel({
    loop: true,
    margin: 10,
    nav: false,
    autoplay: true,
    autoplayHoverPause: true,
    autoplay: true,
    autoplayTimeout: 1000,
    responsive: {
      0: {
        items: 1,
      },
      450: {
        items: 2,
      },
      800: {
        items: 3,
      },
      1000: {
        items: 4,
      },
    },
  });

  $(".plant-carousel").owlCarousel({
    items: 1,
    loop: true,
    margin: 0,
    dots: true,
    nav: false,
    autoplay: true,
    autoplayHoverPause: true,
    autoplay: true,
    autoplayTimeout: 2000,
  });

  $(function () {
    $(".box").matchHeight();
  });

  $(".counter").counterUp({
    delay: 10,
    time: 1000,
    offset: 70,
    beginAt: 100,
    formatter: function (n) {
      return n.replace(/,/g, ".");
    },
  });
});

AOS.init({
  duration: 1000,
  mirror: true,
});

var mobileWidth = screen.width;
if (mobileWidth <= 650) {
  var ele = document.getElementById("nav-brand");
  ele.classList.remove("ml-5");
  ele.style.fontSize = "20px";
  // ele.innerHTML = '<img src="img/logoHindi.png" alt=""> The Gaurik Milk';
}

if (mobileWidth <= 330) {
  var ele = document.getElementById("nav-brand");
  ele.innerHTML = '<img src="img/logoHindi.png" alt="">';
}
