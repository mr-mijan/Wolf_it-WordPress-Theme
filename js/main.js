jQuery(function () {

    "use strict";

    //=======MENU FIX JS=======   
    var navoff = jQuery('.main_menu').offset().top;
    jQuery(window).scroll(function () {
        var scrolling = jQuery(this).scrollTop();

        if (scrolling > navoff) {
            jQuery('.main_menu').addClass('menu_fix');
        } else {
            jQuery('.main_menu').removeClass('menu_fix');
        }
    });


    //===== VENOBOX JS ======
    jQuery('.venobox').venobox();
    jQuery('.service').venobox();


    //====== MENU SEARCH JS======
    jQuery(".search_icon").on("click", function () {
        jQuery(".menu_search").addClass("show_search");
    });

    jQuery(".close_search").on("click", function () {
        jQuery(".menu_search").removeClass("show_search");
    });


    //*==========ISOTOPE JS==============
    var jQuerygrid = jQuery('.grid').isotope({});

    jQuery('.projects_filter').on('click', 'button', function () {
        var filterValue = jQuery(this).attr('data-filter');
        jQuerygrid.isotope({
            filter: filterValue
        });
    });

    //active class
    jQuery('.projects_filter button').on("click", function (event) {

        jQuery(this).siblings('.active').removeClass('active');
        jQuery(this).addClass('active');
        event.preventDefault();
    });


    //========= COUNTER UP JS =========   
    jQuery('.counter').countUp();


    //=========TEAM SLIDER=========   
    jQuery('.team_slider').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        dots: false,
        arrows: true,
        nextArrow: '<i class="far fa-long-arrow-right nextArrow"></i>',
        prevArrow: '<i class="far fa-long-arrow-left prevArrow"></i>',

        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 3,
                }
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 576,
                settings: {
                    slidesToShow: 1,
                    arrows: false,
                }
            }
        ]
    });


    //======TESTIMONIAL SLIDER======   
    jQuery('.testi_slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        dots: false,
        arrows: true,
        nextArrow: '<i class="far fa-long-arrow-right nextArrow"></i>',
        prevArrow: '<i class="far fa-long-arrow-left prevArrow"></i>',
        responsive: [
            {
                breakpoint: 576,
                settings: {
                    arrows: false,
                }
            }
        ]
    });


    //======BRAND SLIDER======   
    jQuery('.marquee_animi').marquee({
        speed: 100,
        gap: 0,
        delayBeforeStart: 0,
        direction: 'left',
        duplicated: true,
        pauseOnHover: true
    });


    //==== SCROLL BUTTON ========  
    jQuery('.scroll_btn').on('click', function () {
        jQuery('html, body').animate({
            scrollTop: 0,
        },);
    });

    jQuery(window).on('scroll', function () {
        var scrolling = jQuery(this).scrollTop();

        if (scrolling > 300) {
            jQuery('.scroll_btn').fadeIn();
        }

        else {
            jQuery('.scroll_btn').fadeOut();
        }
    });


    //======== STICKY SIDEBAR =======
    jQuery("#sticky_sidebar").stickit({
        top: 100,
    })


    //====== BARFILLER JS ========
    jQuery(document).ready(function () {
        jQuery('#bar1').barfiller();
        jQuery('#bar2').barfiller();
        jQuery('#bar3').barfiller();
        jQuery('#bar4').barfiller();
    });

    //======= SELECT2 ======== 
    jQuery(document).ready(function () {
        jQuery('.select_2').select2();
    });


    //========= HOME 2 BANNER SLIDER =========   
    jQuery('.home_2_banner_slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
        dots: false,
        arrows: true,
        nextArrow: '<i class="far fa-long-arrow-right nextArrow"></i>',
        prevArrow: '<i class="far fa-long-arrow-left prevArrow"></i>',
        responsive: [
            {
                breakpoint: 1600,
                settings: {
                    arrows: false,
                }
            },
            {
                breakpoint: 1400,
                settings: {
                    arrows: false,
                }
            },
            {
                breakpoint: 1200,
                settings: {
                    arrows: false,
                }
            },
            {
                breakpoint: 992,
                settings: {
                    arrows: false,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    arrows: false,
                }
            },
            {
                breakpoint: 576,
                settings: {
                    arrows: false,
                }
            }
        ]

    });


    //====== HOME 2 TESTIMONIAL SLIDER ======   
    jQuery('.home_2_team_slider').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        dots: true,
        arrows: false,

        responsive: [
            {
                breakpoint: 1400,
                settings: {
                    slidesToShow: 3,
                }
            },
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 1,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                }
            },
            {
                breakpoint: 576,
                settings: {
                    slidesToShow: 1,
                }
            }
        ]
    });


    //========= SERVICE 2 SLIDER =========   
    jQuery('.service_2_slider').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        dots: false,
        arrows: true,
        nextArrow: '<i class="far fa-long-arrow-right nextArrow"></i>',
        prevArrow: '<i class="far fa-long-arrow-left prevArrow"></i>',

        responsive: [
            {
                breakpoint: 1400,
                settings: {
                    slidesToShow: 4,
                }
            },
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 3,
                }
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                }
            },
            {
                breakpoint: 576,
                settings: {
                    slidesToShow: 1,
                    arrows: false,
                }
            }
        ]
    });


    //====== WOW JS =======
    new WOW().init();


    //======MOBILE MENU BUTTON=======
    jQuery(".navbar-toggler").on("click", function () {
        jQuery(".navbar-toggler").toggleClass("show");
    });

});
