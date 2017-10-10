(function ($) {
    "use strict";

    /*----------------------------
     jQuery Slickmenu
    ------------------------------ */
    $('#menu').slicknav();
    /*----------------------------
     jQuery Stickymenu
    ------------------------------ */
    $(window).on('scroll', function () {
        if ($(this).scrollTop() > 1) {
            $('.sticky-header').addClass("sticky");
        }
        else {
            $('.sticky-header').removeClass("sticky");
        }
    });
    /*----------------------------
     wow js active
    ------------------------------ */
    new WOW().init();
    /*----------------------------
     owl active
    ------------------------------ */
    $(".owl-demo").owlCarousel({
        autoPlay: true,
        slideSpeed: 2000,
        pagination: true,
        navigation: false,
        items: 3,
        itemsDesktop: [1199, 2],
        itemsDesktopSmall: [980, 2],
        itemsTablet: [768, 1],
        itemsMobile: [479, 1]
      });

      $(".owl-partners").owlCarousel({
          autoPlay: true,
          slideSpeed: 2000,
          pagination: true,
          navigation: false,
          items: 4,
          itemsDesktop: [1199, 2],
          itemsDesktopSmall: [980, 2],
          itemsTablet: [768, 1],
          itemsMobile: [479, 1]
        });
    /*----------------------------
     type active
    ------------------------------ */
    $(function () {
        $(".element").typed({
            strings: ["一个聪明的合同的块", "基于艾瑟利", "为了所有人"],
            typeSpeed: 100,
            loop: true
        });
    });
    /*----------------------------
     Smooth Scrool
    ------------------------------ */
    $('a').on('click', function (event) {
        var $anchor = $($(this).attr('href')).offset().top - 60;
        $('body, html').animate({
            scrollTop: $anchor
        }, 1500);
        event.preventDefault();
        return false;
    });

    /*----------------------------
     Water JS Skill Box
    ------------------------------ */
    $('#demo-1').waterbubble({
        txt: 'blockchain',
        data: 0.7,
        waterColor: '#FF8448',
        textColor: '#ecf0f1'
      });
    $('#demo-2').waterbubble({
        txt: 'solidity',
        data: 0.8,
        waterColor: '#FF8448',
        textColor: '#ecf0f1'
      });
    $('#demo-3').waterbubble({
        txt: 'evm',
        data: 0.7,
        waterColor: '#FF8448',
        textColor: '#ecf0f1'
      });
    $('#demo-4').waterbubble({
        txt: 'golang',
        data: 0.8,
        waterColor: '#FF8448',
        textColor: '#ecf0f1'
      });
    /*--------------------------
     scrollUp
    ---------------------------- */
    $.scrollUp({
        scrollText: '<i class="fa fa-angle-up"></i>',
        easingType: 'linear',
        scrollSpeed: 1500,
        animation: 'fade'
    });
    /*----------------------------
     Preloader
    ------------------------------ */
    $(window).on('load',function () {
        $("#status").on('fadeOut',"slow");
        $("#preloader").on('delay',500).on('fadeOut',"slow").remove();
    })

})(jQuery);
