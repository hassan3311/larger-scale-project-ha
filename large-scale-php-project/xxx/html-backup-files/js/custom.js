/*
 Theme Name: homey
 Description: homey
 Author: Favethemes
 Version: 1.0
 */
 (function($) {
    "use strict";

    /* ------------------------------------------------------------------------ */
    /*  GLOBAL VARIABLES
    /* ------------------------------------------------------------------------ */
    var $win = $(window);
    var stickySidebarTop = 0;
    var body_width = $('body').innerWidth();
    var header_area = $('.nav-area');
    var header_nav = $('.nav-area');
    var dashboard_header = $('.dashboard-page-title');
    var footer_area = $('.footer-area');
    var user_dashboard_left = $('.user-dashboard-left');
    
    var header_area_height = header_area.innerHeight();
    var dashboard_header_height = dashboard_header.innerHeight();
    var footer_area_height = footer_area.innerHeight();
    //var user_dashboard_left = user_dashboard_left.outerWidth();
    var section_body = $('.main-content-area');
    var search_area_height = $('.header-search').innerHeight();

    var homey_main_search = $('.main-search');
    var homey_main_search_height = homey_main_search.innerHeight();

    var search_position = 'over_banner'
    var make_search_sticky_position = header_area_height;
    var searchStickyPlus = 20;
    
    if(search_position == 'under_banner') {
        make_search_sticky_position = header_area_height + top_banner_wrap_height;
        searchStickyPlus = 0;
    }

    var homey_is_mobile = false;
    if (/Android|webOS|iPhone|iPad|iPod|tablet|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
        homey_is_mobile = true;
    }
    console.log(homey_is_mobile);
    
    if(homey_is_mobile) {
        $('div#homey_remove_on_mobile').remove();
        $('div#overlay-booking-module, div.overlay-booking-btn').addClass('homey-display');
    } else {
        $('div#overlay-booking-module, div.overlay-booking-btn').remove();
    }
    var  homey_is_transparent = true;
    var is_top_header = 1; 
    var homey_is_dashboard = 0;
    
    var is_tansparent = true; // set to 1 if header transparent must be sticky
    var only_nav_sticky = 1; // set to 1 to have nav and seach sticky
    var only_search_sticky = 1; // set to 1 to have only search bar sticky

    var listing_nav_area_height = $('.listing-nav').innerHeight();

    /* ------------------------------------------------------------------------ */
    /*  parseInt Radix 10
    /* ------------------------------------------------------------------------ */
    function parseInt10(val) {
        return parseInt(val, 10);
    }

    /* ------------------------------------------------------------------------ */
    /*  BOOTSTRAP POPOVER
    /* ------------------------------------------------------------------------ */
    var popover_ele = $('[data-toggle="popover"]');
    popover_ele.popover({
        trigger: "hover",
        html: true
    });

    /* ------------------------------------------------------------------------ */
    /*  BOOTSTRAP TOOLTIP
    /* ------------------------------------------------------------------------ */
    var data_tooltip = $('[data-toggle="tooltip"]');
    data_tooltip.tooltip();

    /* ------------------------------------------------------------------------ */
    /*  ELEMENT HIDE ON DOCUMENT HIDE
    /* ------------------------------------------------------------------------ */
    function click_doc_hide(ele) {
        $(document).mouseup(function(e) {
            if (!$(ele).is(e.target) // if the target of the click isn't the container...
                &&
                $(ele).has(e.target).length === 0 // ... nor a descendant of the container
                ) {
                $(ele).fadeOut();
        }
    });
    }

    //click_doc_hide('.search-auto-complete');

    /* ------------------------------------------------------------------------ */
    /*  BOOTSTRAP SELECT PICKER
    /* ------------------------------------------------------------------------ */
    var select_picker = $('.selectpicker');
    if (select_picker.length > 0) {
        select_picker.selectpicker({
            dropupAuto: false
        });
    }

    /* ------------------------------------------------------------------------ */
    /*  CHECK USER AGENTS
    /* ------------------------------------------------------------------------ */
    var isChrome = /Chrome/.test(navigator.userAgent) && /Google Inc/.test(navigator.vendor);
    var isSafari = /Safari/.test(navigator.userAgent) && /Apple Computer/.test(navigator.vendor);

    /* ------------------------------------------------------------------------ */
    /*  NAVIGATION
    /* ------------------------------------------------------------------------ */
    $('.navi ul li').each(function() {
        $(this).has('ul').not('.homey-megamenu li').addClass('has-child')
    });

    $(".navi ul .has-child").on({
        mouseenter: function() {
            $(this).addClass('active');
        },
        mouseleave: function() {
            $(this).removeClass('active');
        }
    });

    function homy_megamenu() {
        if ($(window).width() > 991) {
            var container = $('.container');
            var header = $('.header-type-1,.header-type-1');

            var containWidth = container.innerWidth();
            var windowWidth = $win.width();
            var containOffset = container.offset();

            if ($('.navi ul li').hasClass('homey-megamenu')) {

                $('.navi ul .homey-megamenu').each(function() {
                    $("> .sub-menu", this).wrap("<div class='homey-megamenu-wrap'></div>");
                    var thisOffset = $(this).offset();
                    if (header.children('.container').length > 0) {
                        $("> .homey-megamenu-wrap", this).css({
                            width: containWidth,
                            left: -(thisOffset.left - containOffset.left)
                        });
                    } else {
                        $("> .homey-megamenu-wrap", this).css({
                            // width: containWidth - 30,
                            // left: -(thisOffset.left - containOffset.left) + 15
                            width: windowWidth,
                            left: -thisOffset.left
                        });
                        //alert(containOffset.left);
                    }
                });

            }
        }
    }
    homy_megamenu();
    $win.on('resize', function() {
        homy_megamenu();
    });
    $win.bind('load', function() {
        homy_megamenu();
    });

    /* ------------------------------------------------------------------------ */
    /*  ACCOUNT DROPDOWN
    /* ------------------------------------------------------------------------ */
    function accountDropdown() {

        /*$('.header-user .account-action > li').on('click',function() {
            if($(this).hasClass('active')) {
                $(this).removeClass('active');
            }else {
                $(this).addClass('active');
            }
        });*/

        $(".account-loggedin").on({
            mouseenter: function() {
                $(this).addClass('active');
            },
            mouseleave: function() {
                $(this).removeClass('active');
            }
        });

    }
    accountDropdown();

    /* ------------------------------------------------------------------------ */
    /*  MOBILE MENU
    /* ------------------------------------------------------------------------ */
    function mobileMenu(menu_html, menu_place) {
        var siteMenu = $(menu_html).html();
        $(menu_place).html(siteMenu);

        $(menu_place + ' ul li').each(function() {
            $(this).has('ul').addClass('has-child');
        });

        $(menu_place + ' ul .has-child').append('<span class="expand-me"></span>');

        $(menu_place + ' .expand-me').on('click', function() {
            var parent = $(this).parent('li');
            if (parent.hasClass('active') == true) {
                parent.removeClass('active');
                parent.children('ul').slideUp();
            } else {
                parent.addClass('active');
                parent.children('ul').slideDown();
            }
        });
    }
    mobileMenu('.main-nav', '.main-nav-dropdown');
    // mobileMenu('.top-nav', '.top-nav-dropdown');
    // mobileMenu('.top-nav', '.top-nav-dropdown');

    $('.nav-trigger').on('click', function() {
        if ($(this).hasClass('mobile-open')) {
            $(this).removeClass('mobile-open');
        } else {
            $(this).addClass('mobile-open');
        }
    });

    /* ------------------------------------------------------------------------ */
    /*  START USER DASHBOARD PANEL AND SIDEBAR
    /* ------------------------------------------------------------------------ */
    // media query event handler
    if (matchMedia) {
        var mq = window.matchMedia("(max-width: 991px)");
        mq.addListener(WidthChange);
        WidthChange(mq);
    }
    // media query change
    function WidthChange(mq) {
        if (mq.matches) {

            $('.dashboard-page-title').css({
                "top": 60
            });
            $('.user-dashboard-right').css({
                "padding-top": 131
            });
            $('.with-dashaboard-snake-nav .user-dashboard-right').css({
                "padding-top": 131 + dashboard_header_height
            });
            $('.with-dashaboard-snake-nav .dashaboard-snake-nav-wrap').css({
                "top": header_area_height + dashboard_header_height - 1
            });
        } else {
            $('.dashboard-sidebar').css({
                "top": header_area_height + dashboard_header_height + 34
            });

            $('.user-dashboard-left').css({
                "top": header_area_height
            });
            $('.user-dashboard-right').css({
                "padding-top": header_area_height + dashboard_header_height + 4
            });
            $('.dashboard-page-title').css({
                "top": header_area_height
            });
            $('.with-dashaboard-snake-nav .dashaboard-snake-nav-wrap').css({
                "top": header_area_height + dashboard_header_height
            });
            $('.with-dashaboard-snake-nav .user-dashboard-right').css({
                "padding-top": header_area_height + dashboard_header_height + dashboard_header_height - 7
            });
        }
    }

    /* ------------------------------------------------------------------------ */
    /*  START CREATE LISTING FORM STEPS AND VALIDATION
    /* ------------------------------------------------------------------------ */
    $("[data-hide]").on("click", function() {
        $(this).closest("." + $(this).attr("data-hide")).hide();
    });

    var current = 1;

    var form = $("#add-property-form");
    var formStep = $(".form-step");
    var formStepGal = $(".form-step-gal");
    var btnnext = $(".btn-step-next");
    var btnback = $(".btn-step-back");
    var btnsubmitBlock = $(".btn-step-submit");
    var btnsubmit = btnsubmitBlock.find("button[type='submit']");
    var total_steps = $('#total-steps');
    var steps_counter = $('#step-counter');
    var nav_item = $('.steps-breadcrumb li');


    var errorBlock = $(".validate-errors");
    var errorBlockGal = $(".validate-errors-gal");
    var galThumbs = $(".upload-gallery-thumb");

    total_steps.html(formStep.length);
    steps_counter.html(current);

    // Init buttons and UI
    formStep.not(':eq(0)').hide();
    nav_item.eq(0).addClass('active');
    hideButtons(current);

    // Next button click action
    btnnext.click(function() {
        $(".dashboard-content-area").animate({
            scrollTop: 0
        }, "slow");
        if (current < formStep.length) {
            // Check validation
            if ($(formStepGal).is(':visible')) {
                if (!$(galThumbs).length > 0) {
                    errorBlockGal.show();
                    return
                } else {
                    errorBlockGal.hide();
                }
            }
            if (form.valid()) {
                formStep.show();
                formStep.not(':eq(' + (current++) + ')').hide();
                nav_item.eq(current - 1).addClass('active');
                errorBlock.hide();
            } else {
                errorBlock.show();
            }
        }
        hideButtons(current);
        steps_counter.html(current);
    });

    // Back button click action
    btnback.click(function() {
        $(".dashboard-content-area").animate({
            scrollTop: 0
        }, "slow");
        if (current > 1) {
            current = current - 2;
            if (current < formStep.length) {
                formStep.show();
                formStep.not(':eq(' + (current++) + ')').hide();
                nav_item.eq(current).removeClass('active');
            }
        }
        hideButtons(current);
        steps_counter.html(current);
    });

    // Submit button click
    btnsubmit.click(function(event) {
        event.preventDefault();
        // Check validation
        if ($(formStepGal).is(':visible')) {
            if (!$(galThumbs).length > 0) {
                errorBlockGal.show();
                return
            } else {
                errorBlockGal.hide();
            }
        }
        if (form.valid()) {
            errorBlock.hide();
            btnsubmit.attr('disabled', true);
        } else {
            errorBlock.show();
            $(".dashboard-content-area").animate({
                scrollTop: 0
            }, "slow");
        }
    });

    if (form.length > 0) {
        form.validate({ // initialize plugin
            //ignore:":not(:visible)",
            ignore: ":hidden:not(.selectpicker)",
            errorPlacement: function(error, element) {
                return false;
            },
            rules: {
                //title : "required",
                //bedroom_name : "required"
                night_price: {
                    required: true,
                    number: true,
                    rangelength: [4, 10]
                }

            }
        });
    }

    // Hide buttons according to the current step
    function hideButtons(current) {
        var limit = parseInt10(formStep.length);

        $(".action").hide();

        if (current < limit) btnnext.show();
        if (current > 1) btnback.show();
        if (current === limit) {
            btnnext.hide();
            btnsubmitBlock.show();
        }
    }

    /* ------------------------------------------------------------------------ */
    /*  START PROPERTY VIEW
    /* ------------------------------------------------------------------------ */
    var get_title = $("#property-title");
    var view_title = $("#property-title-fill");
    var selected = null;

    function keyup_fill(ele, ele_place) {
        $(ele).on("keyup", function(event) {
            if ($(ele).attr("name") === "night_price") {
                if (!$.isNumeric($(ele).val())) {
                    return
                }
            }
            var newText = event.target.value;
            $(ele_place).html(newText);
        });
    }

    keyup_fill("#property-title", "#title-place");
    keyup_fill("#property-address", "#address-place");
    keyup_fill("#night-price", "#price-place");

    function amenities_selector(ele, view_ele) {
        $(ele).on('change', function() {
            var selected = $(this).find("option:selected").val();
            $(view_ele).html(selected);
        });
    }

    amenities_selector("#bedrooms-number", "#total-beds");
    amenities_selector("#guests-number", "#total-guests");
    amenities_selector("#baths-number", "#total-baths");
    amenities_selector("#property-type", "#property-type-view");


    function sticky_block() {
        if ($win.width() > 991) {
            var stickySidebar = $('.dashboard-view-block');
            var scroll_area = $(".dashboard-content-area");
            //var sticky_content = $('.dashboard-inner-main');

            if (stickySidebar.length > 0) {
                var stickyHeight = stickySidebar.height(),
                sidebarTop = stickySidebar.offset().top;
                sidebarTop = (sidebarTop - dashboadr_header_height) - header_area_height - 30;
            }
            // on scroll move the sidebar
            scroll_area.scroll(function() {
                if ($win.width() > 991) {
                    //alert('ok');
                    if (stickySidebar.length > 0) {
                        //alert('ok');
                        var scrollTop = scroll_area.scrollTop();

                        if (sidebarTop < scrollTop) {
                            stickySidebar.css('top', scrollTop - sidebarTop);

                            // stop the sticky sidebar at the footer to avoid overlapping
                            var sidebarBottom = stickySidebar.offset().top + stickyHeight,
                            stickyStop = sticky_content.offset().top + sticky_content.height();
                            if (stickyStop < sidebarBottom) {
                                var stopPosition = sticky_content.height() - stickyHeight;
                                stickySidebar.css('top', stopPosition);
                            }
                        } else {
                            stickySidebar.css('top', '0');
                        }
                    }
                } else {
                    return false;
                }
            });

            $win.resize(function() {
                if (stickySidebar.length > 0) {
                    stickyHeight = stickySidebar.height();
                }
            });
        } else {
            return false;
        }

    }
    sticky_block();
    $win.on('resize', function() {
        sticky_block();
    });

    /* ------------------------------------------------------------------------ */
    /*  STICKY HEADER
    /* ------------------------------------------------------------------------ */
    // if (window.devicePixelRatio == 2) {

    //     if(is_tansparent) {
    //         if(retina_logo_splash != '') {
    //             custom_logo_splash = retina_logo_splash;
    //         }
    //         if(retina_logo != '') {
    //             simple_logo = retina_logo;
    //         }

    //         if(retina_logo_mobile != '') {
    //             mobile_logo = retina_logo_mobile;
    //         }

    //         if(retina_logo_mobile_splash != '') {
    //             custom_logo_mobile_splash = retina_logo_mobile_splash;
    //         }
    //     } 
    // }

    

    // function homey_sticky_nav() {
    //     $(window).scroll(function() {
    //         var scroll = $(window).scrollTop();
    //         //var admin_nav = $('#wpadminbar').height();
    //         var thisHeight = header_nav.outerHeight();

    //         if(only_nav_sticky === 0) {
    //             return;
    //         }

    //         // if(is_tansparent) {
    //         //     $('.homey_logo img').attr('src', simple_logo);
    //         //     $('.mobile-logo img').attr('src', mobile_logo );
    //         // }

    //         //if( admin_nav == 'null' ) { admin_nav = 0; }

    //         if (scroll > header_area_height ) { 
    //             header_nav.addClass('sticky-nav-area');
    //             //header_nav.css('top', admin_nav);
    //             if(is_tansparent){
    //                 header_area.removeClass('transparent-header');

    //             }

    //             if (scroll >= header_area_height + 20 ) { 
    //                 header_nav.addClass('homey-in-view');

    //                 if(is_top_header || !homey_is_transparent) {
    //                     section_body.css('padding-top',thisHeight);
    //                 }
    //             }

    //         } else { 
    //             header_nav.removeClass('sticky-nav-area');
    //             header_nav.removeAttr("style");
    //             if(is_tansparent){
    //                 header_area.addClass('transparent-header');
    //                 setTransparentHeaderMarginBottom();
    //                 $('.homey_logo img').attr('src', custom_logo_splash);
    //                 $('.mobile-logo  img').attr('src', custom_logo_mobile_splash );
    //             }

    //             if (scroll <= header_area_height + 20 ) { 
    //                 header_nav.removeClass('homey-in-view');
    //             }
    //             if(is_top_header || !homey_is_transparent) {
    //                 section_body.css('padding-top',0);
    //             }
    //         }
    //     });
    // }

    // function homey_sticky_search() {
    //     $(window).scroll(function() {
    //         var scroll = $(window).scrollTop();
    //         var admin_nav = $('#wpadminbar').height();

    //         var thisHeight = $('.main-search').outerHeight();

    //         if(only_search_sticky === 0) {
    //             return;
    //         }

    //         //if( admin_nav == 'null' ) { admin_nav = 0; }

    //         if (scroll  >= make_search_sticky_position ) { 
    //             homey_main_search.addClass('sticky-search-area');
    //             homey_main_search.css('top', admin_nav);
    //             if (scroll >= make_search_sticky_position + searchStickyPlus ) { 
    //                 homey_main_search.addClass('homey-in-view');

    //                 if(is_top_header || !homey_is_transparent) {
    //                     section_body.css('padding-top',thisHeight);
    //                 }
    //             }
    //         } else { 
    //             homey_main_search.removeClass('sticky-search-area');
    //             homey_main_search.removeAttr("style");
    //             if (scroll <= make_search_sticky_position + 20 ) { 
    //                 homey_main_search.removeClass('homey-in-view');
    //             }
    //             if(is_top_header || !homey_is_transparent) {
    //                 section_body.css('padding-top',0);
    //             }
    //         }
    //     });
    // }

    // function homey_sticky_nav_search() {
    //     $(window).scroll(function() {
    //         var scroll = $(window).scrollTop();
    //         var thisHeight = header_nav.outerHeight();
    //         var admin_nav = $('#wpadminbar').height();

    //         if( admin_nav == 'null' ) { admin_nav = 0; }

    //         if (scroll >= header_area_height ) { 
    //             header_area.addClass('sticky-nav-area');
    //             header_area.css('top', admin_nav);
    //             if (scroll >= header_area_height + 20 ) { 
    //                 header_area.addClass('homey-in-view');
    //                 if(is_top_header || !homey_is_transparent) {
    //                     section_body.css('padding-top',thisHeight);
    //                 }
    //             }
    //         } else { 
    //             header_area.removeClass('sticky-nav-area');
    //             header_area.removeAttr("style");
    //             if (scroll <= header_area_height + 20 ) { 
    //                 header_area.removeClass('homey-in-view');
    //             }
    //             if(is_top_header || !homey_is_transparent) {
    //                 section_body.css('padding-top',0);
    //             }
    //         }
    //     });
    // }

    // if(!homey_is_mobile && homey_is_dashboard != 1) {
    //     if(only_nav_sticky === 1 && only_search_sticky === 1) {
    //         homey_sticky_nav_search();

    //     } else if(only_nav_sticky === 1) {
    //         homey_sticky_nav();

    //     } else if(only_search_sticky === 1) {
    //         homey_sticky_search();
    //     }
    // }

    /* ------------------------------------------------------------------------ */
    /*  MAP VIEW TABER
    /* ------------------------------------------------------------------------ */
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e) {
        var this_e = e;
        this_e.target // newly activated tab
        this_e.relatedTarget // previous active tab
    });

    /* ------------------------------------------------------------------------ */
    /*  HOMY TABERS
    /* ------------------------------------------------------------------------ */
    function houzez_tabers(ele_tab, ele_tab_content, ele_delay) {
        var tab = $(ele_tab);
        var tab_content = $(ele_tab_content);

        tab.on('click', function() {
            var this_tab = $(this);

            if (this_tab.hasClass('active') == false) {
                tab.removeClass('active');
                this_tab.addClass('active');
                tab_content.removeClass('active in');
                tab_content.eq(this_tab.index()).addClass('active').delay(ele_delay).queue(function(next) {
                    tab_content.eq(this_tab.index()).addClass('in');
                    next();
                });
            }
        });
    }

    
    /* ------------------------------------------------------------------------ */
    /* carousel - property page gallery module
    /* ------------------------------------------------------------------------ */
    // $(document).ready(function() {
    //     $('.swipebox').swipebox({
    //         useCSS : true,
    //         useSVG : true,
    //         initialIndexOnArray : 0,
    //         hideCloseButtonOnMobile : false,
    //         removeBarsOnMobile : false,
    //         hideBarsDelay : 3000, 
    //     });
    // });
    $(document).ready(function(){
        $('.listing-slider').slick({
            lazyLoad: 'ondemand',
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            fade: false,
            asNavFor: '.listing-slider-nav'
        });
        $('.listing-slider-nav').slick({
            lazyLoad: 'ondemand',
            slidesToShow: 9,
            slidesToScroll: 1,
            asNavFor: '.listing-slider',
            dots: false,
            focusOnSelect: true,
            variableWidth: true,
            arrows: false
        });
    });

    $(document).ready(function(){
        $('.listing-slider-variable-width').slick({
            lazyLoad: 'ondemand',
            infinite: true,
            speed: 300,
            slidesToShow: 1,
            centerMode: true,
            variableWidth: true,
            arrows: true,
            adaptiveHeight: true
        });
    });

    $(document).ready(function(){
        $('.header-slider').slick({
            lazyLoad: 'ondemand',
            infinite: true,
            speed: 300,
            slidesToShow: 1,
            arrows: true,
            adaptiveHeight: true
        });
    });


    $(document).ready(function(){
        $('.widget-slider').slick({
            lazyLoad: 'ondemand',
            infinite: true,
            speed: 300,
            slidesToShow: 1,
            arrows: true,
            adaptiveHeight: true
        });
    });

    $(document).ready(function(){
        $('.item-grid-slider-view-3cols').slick({
            lazyLoad: 'ondemand',
            infinite: true,
            speed: 300,
            slidesToShow: 3,
            arrows: true,
            adaptiveHeight: true,
            dots: true,
            appendArrows: '.property-module-grid-slider-3cols',
            prevArrow: '<button type="button" class="slick-prev">Prev</button>',
            nextArrow: '<button type="button" class="slick-next">Next</button>',
            responsive: [
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 769,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }]
        });
    });

    $(document).ready(function(){
        $('.item-grid-slider-view-4cols').slick({
            lazyLoad: 'ondemand',
            infinite: true,
            speed: 300,
            slidesToShow: 4,
            arrows: true,
            adaptiveHeight: true,
            dots: true,
            appendArrows: '.property-module-grid-slider-4cols',
            prevArrow: '<button type="button" class="slick-prev">Prev</button>',
            nextArrow: '<button type="button" class="slick-next">Next</button>',
            responsive: [
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 769,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }]
        });
    });

    $(document).ready(function(){
        $('.item-card-slider-view-3cols').slick({
            lazyLoad: 'ondemand',
            infinite: true,
            speed: 300,
            slidesToShow: 3,
            arrows: true,
            adaptiveHeight: true,
            dots: true,
            appendArrows: '.property-module-card-slider-3cols',
            prevArrow: '<button type="button" class="slick-prev">Prev</button>',
            nextArrow: '<button type="button" class="slick-next">Next</button>',
            responsive: [
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 769,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }]
        });
    });

    $(document).ready(function(){
        $('.item-card-slider-view-4cols').slick({
            lazyLoad: 'ondemand',
            infinite: true,
            speed: 300,
            slidesToShow: 4,
            arrows: true,
            adaptiveHeight: true,
            dots: true,
            appendArrows: '.property-module-card-slider-4cols',
            prevArrow: '<button type="button" class="slick-prev">Prev</button>',
            nextArrow: '<button type="button" class="slick-next">Next</button>',
            responsive: [
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 769,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }]
        });
    });

    $(document).ready(function(){
        $('.testimonials-slider').slick({
            lazyLoad: 'ondemand',
            infinite: true,
            speed: 300,
            slidesToShow: 4,
            arrows: true,
            adaptiveHeight: true,
            dots: true,
            appendArrows: '.testimonials-module-slider',
            prevArrow: '<button type="button" class="slick-prev">Prev</button>',
            nextArrow: '<button type="button" class="slick-next">Next</button>',
            responsive: [
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 769,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }]
        });
    });

    $(document).ready(function(){
        $('.partners-slider').slick({
            lazyLoad: 'ondemand',
            infinite: true,
            speed: 300,
            slidesToShow: 4,
            arrows: true,
            adaptiveHeight: true,
            dots: true,
            appendArrows: '.partners-module-slider',
            prevArrow: '<button type="button" class="slick-prev">Prev</button>',
            nextArrow: '<button type="button" class="slick-next">Next</button>',
            responsive: [
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3
                }
            },
            {
                breakpoint: 769,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            }]
        });
    });

    $(document).ready(function(){
        $('.blog-module-slider-view').slick({
            lazyLoad: 'ondemand',
            infinite: true,
            speed: 300,
            slidesToShow: 3,
            arrows: true,
            adaptiveHeight: true,
            dots: true,
            appendArrows: '.blog-module-slider',
            prevArrow: '<button type="button" class="slick-prev">Prev</button>',
            nextArrow: '<button type="button" class="slick-next">Next</button>',
            responsive: [
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 769,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }]
        });
    });

    $(document).ready(function(){
        $('.taxonomy-grid-module-v2-grid-v2-slider').slick({
            lazyLoad: 'ondemand',
            infinite: true,
            speed: 300,
            slidesToShow: 4,
            arrows: true,
            adaptiveHeight: true,
            dots: true,
            appendArrows: '.taxonomy-grid-module-v2-grid-v2-slider',
            prevArrow: '<button type="button" class="slick-prev">Prev</button>',
            nextArrow: '<button type="button" class="slick-next">Next</button>',
            responsive: [
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 769,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }]
        });
    });

    $(document).ready(function(){
        $('.splash-slider').slick({
            lazyLoad: 'ondemand',
            adaptiveHeight: true,
            autoplay: true,
            infinite: true,
            speed: 300,
            slidesToShow: 1,
            arrows: false,
        });
    });
    

    /* ------------------------------------------------------------------------ */
    /*  HOMEY EXTENDED MEGA MENU
    /* ------------------------------------------------------------------------ */
    var extended_menu_btn = $('.extended-menu-btn');
    var extended_menu = $('.header-extended-menu');

    extended_menu_btn.on('click', function() {

        if ($(this).hasClass('active') == true) {
            $(this).parents('.header-wrap').find('.header-extended-menu').slideUp().removeClass('menu-open');
            $(this).removeClass('active');
        } else {
            $(this).addClass('active');
            $(this).parents('.header-wrap').find('.header-extended-menu').slideDown().addClass('menu-open');
        }
    });


    /* ------------------------------------------------------------------------ */
    /* Dropdown Search Menu
    /* ------------------------------------------------------------------------ */
    var search_filter_btn = $('.search-filter-btn');
    var search_filter = $('.search-filter');

    search_filter_btn.on('click', function() {

        if ($(this).hasClass('active') == true) {
            $(this).parents('.nav-area').find('.search-filter').removeClass('search-filter-open');
            $(this).removeClass('active');
        } else {
            $(this).addClass('active');
            $(this).parents('.nav-area').find('.search-filter').addClass('search-filter-open');
        }
    });

    /* ------------------------------------------------------------------------ */
    /* Dropdown Search Menu Mobile
    /* ------------------------------------------------------------------------ */
    var search_filter_mobile_btn = $('.search-filter-mobile-btn');
    var search_filter_mobile = $('.search-filter');

    search_filter_mobile_btn.on('touchstart', function() {

        if ($(this).hasClass('active') == true) {
            $(this).parents('.search-button').find('.search-filter').removeClass('search-filter-open');
            $(this).removeClass('active');
        } else {
            $(this).addClass('active');
            $(this).parents('.search-button').find('.search-filter').addClass('search-filter-open');
        }
    });

    /* ------------------------------------------------------------------------ */
    /*  SEARCH AUTO COMPLETE
    /* ------------------------------------------------------------------------ */
    function auto_complete() {
        var search_input = $(".input-search");
        var auto_complete_box = $(".search-auto-complete");

        search_input.on('keyup', function() {
            var this_input = $(this);
            var value = this_input.val();
            var closest_search = this_input.closest("form").find(auto_complete_box);

            if (value.length > 3) {
                if (auto_complete_box.is(":hidden")) {
                    //auto_complete_box.fadeIn(500);
                    closest_search.fadeIn(0);
                }
            } else {
                //if (!auto_complete_box.is(":hidden")) {
                    closest_search.fadeOut(0);
                //}
            }
        });

        $(document).mouseup(function(e) {
            var input_plus_auto_complete = $('.input-search,.search-auto-complete');
            if (!input_plus_auto_complete.is(e.target) // if the target of the click isn't the container...
                &&
                input_plus_auto_complete.has(e.target).length === 0 // ... nor a descendant of the container
                ) {
                auto_complete_box.fadeOut(0);
        }
    });
    }
    auto_complete();

    /* ------------------------------------------------------------------------ */
    /*  sticky search bar
    /* ------------------------------------------------------------------------ */
    $(document).ready(function(){
        $(".header-search-sticky").sticky({
            topSpacing: 0,
            zIndex: 9999,
        });
        $(".mobile-header-search-sticky").sticky({
            topSpacing: 0,
            zIndex: 7,
        });
        if($(window).width()<992){
            $(".sticky-map").sticky({
                topSpacing: search_area_height,
                zIndex: 2,
            });
        }
        else{
            $(".sticky-map").sticky({
                topSpacing: search_area_height + 30,
                zIndex: 2,
            });
        }
    });

    /* ------------------------------------------------------------------------ */
    /*  listing nav bar page scroll
    /* ------------------------------------------------------------------------ */
    $(document).scroll(function() {
        var y = $(this).scrollTop();
        if (y > 200) {
            $('.listing-nav').fadeIn(200);
        } else {
            $('.listing-nav').fadeOut(0);
        }
    });

    var search_area_height = $('.header-search').innerHeight();
    var listing_nav_area_height = $('.listing-nav').innerHeight();

    // Select all links with hashes
    $('a[href*="#"]')
        // Remove links that don't actually link to anything
        .not('[href="#"]')
        .not('[href="#0"]')
        .click(function(event) {
            // On-page links
            if (
                location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
                && 
                location.hostname == this.hostname
                ) {
                // Figure out element to scroll to
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                // Does a scroll target exist?
                if (target.length) {
                // Only prevent default if animation is actually gonna happen
                event.preventDefault();
                $('html, body').animate({
                    scrollTop: target.offset().top - (search_area_height + listing_nav_area_height),
                }, 1000, 'easeOutExpo', function() {
                });
            }
        }
    });

        /* ------------------------------------------------------------------------ */
    /* Datepicker
    /* ------------------------------------------------------------------------ */
    // $('.date-range, .overlay-date-range').daterangepicker({
    //     "autoApply": true,
    //     "opens": "center",
    // });
    // $('.mobile-date-range').daterangepicker({
    //     "autoApply": true,
    //     "opens": "right"
    // });
    // $('.sidebar-date-range').daterangepicker({
    //     "autoApply": true,
    //     "opens": "left",
    // });
    // $('.overlay-date-range').daterangepicker({
    //     "autoApply": true,
    //     "opens": "center",
    // });
    // $('.overlay-search-module-date-range').daterangepicker({
    //     "autoApply": true,
    //     "opens": "center",
    // });

    /* ------------------------------------------------------------------------ */
    /*  half map elements size
    /* ------------------------------------------------------------------------ */
    function setSectionHeight() {
        var window_height = $(window).innerHeight();
        var sections_height =  window_height - header_area_height;

        if ($(window).width() >= 767){
            $('.half-map-left-wrap, .half-map-right-wrap').css('height', sections_height);
        } else {
            $('.map-on-right .half-map-right-wrap').css('height', sections_height);
            $('.map-on-right .half-map-left-wrap').css('height', 'auto');
            $('.map-on-left .half-map-right-wrap').css('height', sections_height);
            $('.map-on-left .half-map-left-wrap').css('height', 'auto');
        }
    }
    setSectionHeight();
    $win.on('resize', function() {
        setSectionHeight();
    });

    /* ------------------------------------------------------------------------ */
    /*  availability calendar cells height
    /* ------------------------------------------------------------------------ */
    function setcalendarCellHeight() {
        var calendarCellWidth = $('.availability-section .search-calendar li').innerWidth();
        $('.availability-section .search-calendar li').css('height', calendarCellWidth);
        $('.availability-section .search-calendar li').css('line-height', calendarCellWidth + 'px' );
    }
    setcalendarCellHeight();
    $win.on('resize', function() {
        setcalendarCellHeight();
    });


    /* ------------------------------------------------------------------------ */
    /* transparent header
    /* ------------------------------------------------------------------------ */
    function setTransparentHeaderMarginBottom() {
        var desktop_transparent_header_height = $('.transparent-header .header-nav.hidden-sm').innerHeight();
        var mobile_transparent_header_height = $('.transparent-header .header-nav.hidden-md').innerHeight();

        if ($(window).width() >= 767){
            $('.transparent-header .header-nav.hidden-sm').css('margin-bottom', -desktop_transparent_header_height);
        } else {
            $('.transparent-header .header-nav.hidden-md').css('margin-bottom', -mobile_transparent_header_height);
        }
    }
    setTransparentHeaderMarginBottom();
    $win.on('resize', function() {
        setTransparentHeaderMarginBottom();
    });

    /* ------------------------------------------------------------------------ */
    /* fullscreen banner
    /* ------------------------------------------------------------------------ */
    function fullscreenBanner() {
        var window_height = $(window).innerHeight();
        var desktop_header_height = $('.header-nav.hidden-sm').innerHeight();
        var mobile_header_height = $('.header-nav.hidden-md').innerHeight();

        if ($(window).width() >= 767){
            //parallax  and vide banner
            $('.top-banner-wrap-fullscreen').css('height', window_height - desktop_header_height);
            $('.transparent-header + .top-banner-wrap-fullscreen').css('height', window_height);
            // property slider banner
            $('.top-banner-wrap-fullscreen .slick-list, .top-banner-wrap-fullscreen .header-slider-item').css('height', window_height - desktop_header_height);
            $('.transparent-header + .top-banner-wrap-fullscreen .slick-list, .transparent-header + .top-banner-wrap-fullscreen .header-slider-item').css('height', window_height);

        } else {
            //parallax  and vide banner
            $('.top-banner-wrap-fullscreen').css('height', window_height - mobile_header_height);
            $('.transparent-header + .top-banner-wrap-fullscreen').css('height', window_height);
            // property slider banner
            $('.top-banner-wrap-fullscreen .slick-list, .top-banner-wrap-fullscreen .header-slider-item').css('height', window_height - mobile_header_height);
            $('.transparent-header + .top-banner-wrap-fullscreen .slick-list, .transparent-header + .top-banner-wrap-fullscreen .header-slider-item').css('height', window_height);
        }
    }
    fullscreenBanner();
    $win.on('resize', function() {
        fullscreenBanner();
    });

    /* ------------------------------------------------------------------------ */
    /*  parallax
    /* ------------------------------------------------------------------------ */
    $(document).ready(function () {
        $('.parallax').parallaxBackground({
            parallaxBgPosition: "center center",
            parallaxBgRepeat: "no-repeat",
            parallaxBgSize: "cover",
            parallaxSpeed: "0.25",
        });
    });

    /* ------------------------------------------------------------------------ */
    /* search for banners
    /* ------------------------------------------------------------------------ */
    $(document).ready(function() {
        $(".search-banner input").focus(function() {
            $(this).prev("label").css("display", "block");
            $(this).addClass("on-focus");
        });

        $(".search-destination input").focus(function() {
            $('.search-destination .clear-input-btn').css("display", "block");
        });

        $('.clear-input-btn').click(function() {
            $('.search-destination input').val('');
            $('.search-destination label, .search-destination .clear-input-btn').css("display", "none");
            $('.search-destination input').removeClass("on-focus");
        });

        $(".search-date-range input").focus(function() {
            $('.search-calendar').css("display", "block");
            $('.search-guests-wrap').css("display", "none");
        });

        $(".search-destination input").focus(function() {
            $('.search-calendar').css("display", "none");
            $('.search-guests-wrap').css("display", "none");
        });

        $(".search-guests input").focus(function() {
            $('.search-calendar').css("display", "none");
        });

        $('.btn-clear-calendar').click(function() {
            $('.search-date-range input').val('');
            $('.search-date-range label').css("display", "none");
            $('.search-date-range input').removeClass("on-focus");
        });

        $('.guest-apply-btn .btn').click(function() {
            $('.search-guests-wrap').css("display", "none");
        });

        $(".search-guests input").focus(function() {
            $(this).prev("label").css("display", "block");
            $(this).addClass("on-focus");
            $('.search-guests-wrap').css("display", "block");
        });
    });



    /* ------------------------------------------------------------------------ */
    /* mobile booking form overlay
    /* ------------------------------------------------------------------------ */
    $(document).ready(function() {
        $( "#trigger-overlay-booking-form, .overlay-booking-module-close" ).click(function() {
            $("#overlay-booking-module").toggleClass( "open" );
        });
    });
    
    /* ------------------------------------------------------------------------ */
    /* mobile search form overlay
    /* ------------------------------------------------------------------------ */
    $(document).ready(function() {
        $( ".search-banner-mobile, .overlay-search-module-close" ).click(function() {
            $("#overlay-search-module").toggleClass( "open" );
        });
    });

    $(document).ready(function() {
        $( ".search-banner-mobile-experiences, .overlay-search-module-close" ).click(function() {
            $("#overlay-search-module-experiences").toggleClass( "open" );
        });
    });

    /* ------------------------------------------------------------------------ */
    /* mobile search form overlay
    /* ------------------------------------------------------------------------ */
    $(document).ready(function() {
        $( ".main-search .search-banner-mobile, .half-map-search .search-banner-mobile, .overlay-search-module-close" ).click(function() {
            $("#overlay-search-advanced-module").toggleClass( "open" );
        });
    });

    /* ------------------------------------------------------------------------ */
    /* compare properties
    /* ------------------------------------------------------------------------ */
    $(document).ready(function() {    
        $('.show-compare-panel').click(function() {
            $(this).toggleClass('active');
            $('.compare-property-active').addClass('compare-property-active-push-toleft' );
            $('#compare-property-panel').addClass('compare-property-panel-open');
            //disableOther( 'show-compare-panel' );
        });
        $('.close-compare-panel').click(function() {
            $(this).toggleClass('active');
            $('.compare-property-active').removeClass('compare-property-active-push-toleft' );
            $('#compare-property-panel').removeClass('compare-property-panel-open');
            //disableOther( 'show-compare-panel' );
        });
    });

    /* ------------------------------------------------------------------------ */
    /* side menu
    /* ------------------------------------------------------------------------ */
    $(document).ready(function() {    
        $('.side-nav-trigger').click(function() {
            $(this).toggleClass('active');
            $('.side-nav-active').toggleClass('side-nav-active-push-toright' );
            $('#side-nav-panel').toggleClass('side-nav-panel-open');
        });
    });

    /* ------------------------------------------------------------------------ */
    /*  sticky search bar
    /* ------------------------------------------------------------------------ */
    $(document).ready(function(){
        $('.homey_sticky').theiaStickySidebar({
            additionalMarginTop: stickySidebarTop + listing_nav_area_height,
            minWidth: 768,
            updateSidebarHeight: false,
            additionalMarginTop: 30
        });
    });
    
    // $(document).ready(function(){
    //     $("selector").swipebox({
    //       afterOpen: function(){
    //         var $selectorClose = $("#swipebox-close");
    //         var clickAction = "touchend click";

    //         $selectorClose.unbind(clickAction);

    //         $selectorClose.bind(clickAction, function(event){
    //           event.preventDefault();
    //           event.stopPropagation();

    //           $.swipebox.close();
    //       });
    //     }
    // });
    // });


    /* ------------------------------------------------------------------------ */
    /*  search distance slider
    /* ------------------------------------------------------------------------ */
    $(function () {
        $(".distance-range").slider();
    });



    
})(jQuery);