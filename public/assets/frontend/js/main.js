//   function joinUs() {
//         $(".reg-from").css("display","block");
//     };
// const content = document.getElementsByClassName("prof-container");
// const targetDiv = document.getElementById("prof-set");
// content.onclick = function () {
//   if (targetDiv.style.display !== "none") {
//     targetDiv.style.display = "none";
//   } else {
//     targetDiv.style.display = "block";
//   }
// };

$(document).ready(function () {  
    $('[data-toggle="tooltip"]').tooltip();
 $('.messageUP').on('click', function (e) {
        e.preventDefault();
        $('.message').toggleClass('show');

    });    
    $('.notifyUP').on('click', function (e) {
        e.preventDefault();
        $('.notification').toggleClass('show');

    });  
    $('.prof-container').on('click', function (e) {
        e.preventDefault();
        $('.prof-set').toggleClass('show');

    });  

    function tglClass() {    
        $('[data-toggle="tooltip"]').tooltip(); 
        $(".icon-wishlist").click(function () {
            $(".icon-wishlist").toggleClass("in-wishlist");
        });

    }
    $(".moreText").shorten({
        showChars: 220,
        moreText: `<button style="font-size: 12px;color: #fff;background: crimson;line-height: 12px;">read more</button>`,
        lessText: `<button style="font-size: 12px;color: #fff;background: #8bd51f;line-height: 12px;">read less</button>`,
    });
    $(function () {
        var lastScrollTop = 0,
            delta = 15;
        $(window).scroll(function (event) {
            var st = $(this).scrollTop();

            if (Math.abs(lastScrollTop - st) <= delta)
                return;
            if ((st > lastScrollTop) && (lastScrollTop > 0)) {
                // downscroll code
                $(".subject-header").css("top", "-200px");
                $(".subject-header").css("z-index", "999");

            } else {
                // upscroll code
                $(".subject-header").css("top", "0px");
            }
            lastScrollTop = st;
        });
    });
    $('.previewCTD').on('click', function (e) {
        e.preventDefault();
        // console.log('hi');
        $('body').removeClass('overflow-auto');
        $('.preview-popup-modal').addClass('is-visible');

        if ($('.preview-popup-modal').hasClass('is-visible')) {
            $('body').css('overflow', 'hidden');
        } else {
            $('body').css('overflow-x', 'none');
        }

    });
    $('.PreviewCTDclose').on('click', function (e) {
        e.preventDefault();
        $('body').addClass('overflow-auto');
        $('.preview-popup-modal').removeClass('is-visible');
    });    
    $('.shareTo').on('click', function (e) {
        e.preventDefault();
        $('body').removeClass('overflow-auto');
        $('.share-popup-modal').addClass('is-visible');

        if ($('.share-popup-modal').hasClass('is-visible')) {
            $('body').css('overflow', 'hidden');
        } else {
            $('body').css('overflow-x', 'none');
        }
    });    
    $('.multi-lot').on('click', function (e) {
        e.preventDefault();
        $('body').removeClass('overflow-auto');
        $('.MultiLotCTD-modal').addClass('is-visible');

        if ($('.MultiLotCTD-modal').hasClass('is-visible')) {
            $('body').css('overflow', 'hidden');
        } else {
            $('body').css('overflow-x', 'none');
        }
    });
    $('.modal-close').on('click', function (e) {
        e.preventDefault();
        $('body').addClass('overflow-auto');
        $('.share-popup-modal').removeClass('is-visible');
    });
    function confirmDelete() {
        console.log("Deleting...");
        $('.kk').addClass('hide');
        $('.confirm-delete').removeClass('hide');
        //$('.myModal').modal('hide');
        setTimeout(function () {
            window.location.href =
                "../online.html"; //will redirect to a page (an ex: blog.html)
        }, 2000);
    };
    function openModal() {
        $('.kk').removeClass('hide');
        $('.confirm-delete').addClass('hide');
        $('.myModal .modal-header, .modal-footer, .modal-body').removeClass('hide');
        $('.myModal').modal('show');
    };



    $('.MultiLotCTDclose').on('click', function (e) {
        e.preventDefault();
        $('body').addClass('overflow-auto');
        $('.MultiLotCTD-modal').removeClass('is-visible');
    });



    $('.cart-modal-toggle').on('click', function (e) {
        e.preventDefault();
        $('body').removeClass('overflow-auto');
        $('.SingleLot-AddToCart-modal').addClass('is-visible');

        if ($('.SingleLot-AddToCart-modal').hasClass('is-visible')) {
            $('body').css('overflow', 'hidden');
        } else {
            $('body').css('overflow-x', 'none');
        }
    });
    $('.modal-close').on('click', function (e) {
        e.preventDefault();
        $('body').addClass('overflow-auto');
        $('.SingleLot-AddToCart-modal').removeClass('is-visible');
    }); 
    $(".to-signin").on("click", function () {
        $(this)
          .addClass("top-active-button")
          .siblings()
          .removeClass("top-active-button");
        $(".form-signup").slideUp(500);
        $(".form-signin").slideDown(500);
      });

      $(".to-signup").on("click", function () {
        $(this)
          .addClass("top-active-button")
          .siblings()
          .removeClass("top-active-button");
        $(".form-signin").slideUp(500);
        $(".form-signup").slideDown(500);
      });

      $(".to-signin-link").on("click", function () {
        $(".to-signin")
          .addClass("top-active-button")
          .siblings()
          .removeClass("top-active-button");
        $(".form-signup").slideUp(200);
        $(".form-signin").slideDown(200);
      });

      $(".to-signup-link").on("click", function () {
        $(".to-signup")
          .addClass("top-active-button")
          .siblings()
          .removeClass("top-active-button");
        $(".form-signin").slideUp(200);
        $(".form-signup").slideDown(200);
      });
    function isInArray(value, array) {
        return array.indexOf(value) > -1;
    }
    $('#example').DataTable();
    $('.table').DataTable({
        //disable sorting on last column
        "columnDefs": [{
            "orderable": false,
            "targets": 5
        }],
        language: {
            //customize pagination prev and next buttons: use arrows instead of words
            'paginate': {
                'previous': '<span class="fa fa-chevron-left"></span>',
                'next': '<span class="fa fa-chevron-right"></span>'
            },
            //customize number of elements to be displayed
            "lengthMenu": 'Display <select class="form-control form-select-sm">' +
                '<option value="10">10</option>' +
                '<option value="20">20</option>' +
                '<option value="30">30</option>' +
                '<option value="40">40</option>' +
                '<option value="50">50</option>' +
                '<option value="-1">All</option>' +
                '</select> results'
        }
    });
    var featureList = new List('items', {
        valueNames: [{
                data: ['industry']
            },
            {
                data: ['type']
            },
            {
                data: ['funding']
            },
            {
                data: ['lang']
            },
            {
                data: ['year']
            }
        ],
        page: 4,
        pagination: false
    });
    var dart = [];
    $("input:checkbox").change(function () {
        // alert("The text has been changed.");            
        var $filters = $(".filter");

        updateList($filters);

        console.log(dart);

        $('.clear').on('click', function (event) {
            $filters.prop('checked', false);
            featureList.filter();
        });
    });

    var $filters = $(".filter");

    updateList($filters);


    function updateList(filter) {

        filter.change(function () {
            var selection = this.value;
            var radio = this.name;
            console.log(radio);

            if (selection) {
                featureList.filter(function (item) {
                    //console.log(item.values()[radio]);        
                    if (item.values()[radio] != null) {
                        var array = item.values()[radio].split(',');
                        return (isInArray(selection, array));
                    }

                });
            } else {
                featureList.filter();
            }
        });

    }


    $('.clear').on('click', function (event) {
        $filters.prop('checked', false);
        featureList.filter();
    });
    var BALL = {};

    BALL.init = function () {
        var tabs = $('.ball-wrap .nav-item'),
            ball = $('.ball'),
            activeTab = $('.ball-wrap .active').parents('.nav-item'),
            defaultPos = $(activeTab).offset().left + (activeTab.width() / 2) - (
                ball.width() / 2);

        $('.ball').offset({
            left: defaultPos
        }); //initial positon

        tabs.on('mousedown', function (e) {

            var targetTab = $(this),
                left = $(e.target).offset().left + (targetTab.width() / 2) -
                (ball.width() /
                    2);

            $('.ball').offset({
                left: left
            }).addClass('moving');

            $('.ball').on('transitionend', function () {
                $(this).removeClass('moving');
            })

        });

    }

    BALL.init();
    var timeout;

    function hide() {
        timeout = setTimeout(function () {
            $('.info-details').fadeOut(400);
        }, 400);
    };

    $('.info-point').mouseover(function () {
        clearTimeout(timeout);
        $(this).siblings('.info-details').fadeIn(400);
    }).mouseout(hide);

    $('.info-details').mouseover(function () {
        clearTimeout(timeout);
    }).mouseout(hide);

    jQuery('.gallery').mixItUp();

    //----- OPEN
    $("[data-pd-popup-open]").on("click", function (e) {
        var targeted_popup_class = $(this).attr("data-pd-popup-open");
        $('[data-pd-popup="' + targeted_popup_class + '"]').fadeIn(100);
        $("body").addClass("popup-open");
        e.preventDefault();
    });

    //----- CLOSE
    $("[data-pd-popup-close]").on("click", function (e) {
        var targeted_popup_class = $(this).attr("data-pd-popup-close");
        $('[data-pd-popup="' + targeted_popup_class + '"]').fadeOut(200);
        $("body").removeClass("popup-open");
        e.preventDefault();
    });

    $('.switch label').on('click', function () {
        var indicator = $(this).parent('.switch').find('span');
        if ($(this).hasClass('right')) {
            $(indicator).addClass('right');
        } else {
            $(indicator).removeClass('right');
        }
    });
   




   
    function ratingStar(star) {
        star.click(function () {
            var stars = $('.ratingW').find('li')
            stars.removeClass('on');
            var thisIndex = $(this).parents('li').index();
            for (var i = 0; i <= thisIndex; i++) {
                stars.eq(i).addClass('on');
            }
            putScoreNow(thisIndex + 1);
        });
    }

    function putScoreNow(i) {
        $('.scoreNow').html(i);
    }


    $(function () {
        if ($('.ratingW').length > 0) {
            ratingStar($('.ratingW li a'));
        }
    });
    const viewBtn = document.querySelector(".view-modal"),
    popup = document.querySelector(".popup-share"),
    close = popup.querySelector(".close-share"),
    field = popup.querySelector(".field-share"),
    input = field.querySelector(".input-share"),
    copy = field.querySelector(".button-share");

// viewBtn.onclick = () => {
//     popup.classList.toggle("show");
// }
// close.onclick = () => {
//     viewBtn.click();
// }

copy.onclick = () => {
    input.select(); //select input value
    if (document.execCommand("copy")) { //if the selected text copy
        field.classList.add("active");
        copy.innerText = "Copied";
        setTimeout(() => {
            window.getSelection().removeAllRanges(); //remove selection from document
            field.classList.remove("active");
            copy.innerText = "Copy";
        }, 3000);
    }
}
    $('.switch label').on('click', function () {
        var indicator = $(this).parent('.switch').find('span');
        if ($(this).hasClass('right')) {
            $(indicator).addClass('right');
        } else {
            $(indicator).removeClass('right');
        }
    });
    $("#charNum").html(350 - $("#sort_bio").val().length);
            if ($("#sort_bio").val().length >= 350) {
                $(".character-counter").css({
                    "color": "rgb(255, 0, 0)"
                });
            } else {
                $(".character-counter").css({
                    "color": "rgb(92, 92, 92)"
                });
            }

            $("#sort_bio").keyup(function () {
                el = $(this);
                if (el.val().length >= 350) {
                    $(".character-counter").css({
                        "color": "rgb(255, 0, 0)"
                    });
                } else {
                    $(".character-counter").css({
                        "color": "rgb(92, 92, 92)"
                    });
                }
                $("#charNum").html(350 - el.val().length);
            });

            jQuery.validator.addMethod("noSpace", function (value, element) {
                return value.indexOf(" ") < 0 && value != "";
            }, "Space are not allowed");
            jQuery.validator.addMethod("alphanumeric", function (value, element) {
                return this.optional(element) || /^\w+$/i.test(value);
            }, "Use letters, numbers and underscores only");


            jQuery.validator.addMethod("nameRegex", function (value, element) {
                return this.optional(element) || /^[a-z\ \s]+$/i.test(value);
            }, "Name should not contain letters & space");



            $('#profile_picture').change(function () {
                var path = $("#profile_picture").val();
                $("#fileName").html($('input[type=file]').val().replace(
                    /C:\\fakepath\\/i, ''));
            });
            jQuery('#reset_password').change(function () {
                var checked = jQuery(this).prop('checked');
                jQuery('#passwordCont').hide();

                if (checked == true)
                    jQuery('#passwordCont').show();
            }).trigger('change');

            // $('#dob').datetimepicker({ 
            //   format:"DD-MM-YYYY"
            // });

            jQuery('#frmProfile').validate({
                onfocusout: function (element) {
                    this.element(element);
                },
                rules: {
                    name: {
                        required: true,
                        nameRegex: true,
                        maxlength: 40,
                    },

                    telephone1: {
                        required: true,
                        maxlength: 20,
                    }
                }
            });

            jQuery('#frmEditProfile').validate({
                onfocusout: function (element) {
                    this.element(element);
                },
                rules: {
                    email: {
                        required: true,
                        email: true
                    },
                    /*username: {
                        required: true,
                        noSpace: true,
                      	alphanumeric: true,
                      	maxlength:12
                    },*/

                    current_password: {
                        required: function () {
                            if (jQuery('#frmEditProfile #reset_password').prop(
                                    'checked') ==
                                false) {
                                return false;
                            } else {
                                return true;
                            }
                        }
                    },
                    password: {
                        required: function () {
                            if (jQuery('#frmEditProfile #reset_password').prop(
                                    'checked') ==
                                false) {
                                return false;
                            } else {
                                return true;
                            }
                        }
                    },
                    password_confirmation: {
                        required: function () {
                            if (jQuery('#frmEditProfile #reset_password').prop(
                                    'checked') ==
                                false) {
                                return false;
                            } else {
                                return true;
                            }
                        },
                        equalTo: "#password"
                    }
                }
            });
});

function searchToggle(obj, evt) {
    var container = $(obj).closest('.search-wrapper');
    var closer = $(obj).closest('.search-wrapper .close');
    if (!container.hasClass('active')) {
        container.addClass('active');
        // closer.style("opacity", "1");
        evt.preventDefault();
    } else if (container.hasClass('active') && $(obj).closest('.input-holder').length == 0) {
        container.removeClass('active');
        // closer.css("opacity", "0");
        // clear input
        container.find('.search-input').val('');
    }
}
$(function () {
    var inputs = $('input');
    var checked = inputs.filter(':checked').val();
    inputs.on('click', function () {

        if ($(this).val() === checked) {
            $(this).prop('checked', false);
            checked = '';

        } else {
            $(this).prop('checked', true);
            checked = $(this).val();
        }
    });

});

( function( window, $, undefined ) {

    'use strict';

    ////////////// Begin jQuery and grab the $ ////////////////////////////////////////

      function is_scrolling() {

        var $element = $('.main-header'),
            $nav_height = $element.outerHeight( true );
  
        if ($(this).scrollTop() >= $nav_height ) { //if scrolling is equal to or greater than the nav height add a class
      
          $element.addClass( 'is-scrolling');
    
        } else { //is back at the top again, remove the class
       
          $element.removeClass( 'is-scrolling');
        }
        
      }//end is_scrolling();

    $( window ).scroll(_.throttle(is_scrolling, 200))
})(this, jQuery);
$(document).ready(function () {
    $("#testimonial-slider").owlCarousel({
        loop: true,
        items: 3,
        itemsDesktop: [1000, 3],
        itemsDesktopSmall: [980, 2],
        itemsTablet: [768, 2],
        itemsMobile: [650, 1],
        autoPlay: true,
    });
});
$(document).ready(function () {
    $("#testimonial-slider2").owlCarousel({
        loop: true,
        items: 3,
        itemsDesktop: [1000, 3],
        itemsDesktopSmall: [980, 2],
        itemsTablet: [768, 2],
        itemsMobile: [650, 1],
        autoPlay: true,
    });
});
$(document).ready(function () {
    $('.ct-box-slider').slick({
        autoplay: true,
        autoplaySpeed: 4000,
        arrows: false,
    });
    $('#ct-js-box-slider--prev').on('click', function () {
        $('.ct-js-box-slider').slick('slickPrev');
    });
    $('#ct-js-box-slider--next').on('click', function () {
        $('.ct-js-box-slider').slick('slickNext');
    });
});

$(function () {
    $('.slick').slick({
        arrows: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        vertical: true,
        verticalSwiping: true,
        autoplay: true,
        autoplaySpeed: 3000,
        verticalSwiping: true,
    });
    $('.slick-horizontal').slick({
        arrows: false,
        slidesToShow: 3,
        slidesToScroll: 2,
        dots: false,
        autoplay: true,
        autoplaySpeed: 2000,
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 2,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });
    $('.slick-horizontal-cart').slick({
        arrows: false,
        slidesToShow: 2,
        slidesToScroll: 1,
        dots: false,
        autoplay: true,
        autoplaySpeed: 2000,
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });

    // https://github.com/kenwheeler/slick/issues/1803
    var maxHeight = -1;
    $('.slick-slide').each(function () {
        if ($(this).height() > maxHeight) {
            maxHeight = $(this).height();
        }
    });

    $('.slick-slide').each(function () {
        if ($(this).height() < maxHeight) {
            $(this).css('margin', Math.ceil((maxHeight - $(this).height()) / 2) + 'px 0');
        }
    });

});

// const header = document.querySelector('.main-header');

// window.addEventListener('scroll', () => {
//     const scrollPos = window.scrollY;
//     if (scrollPos > 10) {
//         header.classList.add('scrolled');
//     } else {
//         header.classList.remove('scrolled');
//     }
// });
(function () {

    $("#cart").on("click", function () {
        $(".shopping-cart").fadeToggle("slow");
    });

})();
(function ($) {
    $(".language a").click(function () {
        var lng = $(this).attr("lang");
        console.log(lng);
        $(".Langcontainer").attr("lang", lng);
        return false;
    });
    // $('.prof-container').on('click', function () {
    //     $('.prof-set').fadeToggle("fast");
    // });
})(jQuery);

$('.counter').counterUp({
    time: 3000,
    easing: 'linear',
    step: function () {
        $this.text(Math.floor(this.countNum));
    }
});

$('.icon-wishlist').on('click', function () {
    $(this).toggleClass('in-wishlist');
});
new ClipboardJS(".copy-btn");
function pressBtn() {
    $(".reg-view").show();
    $("body").css("overflow-y", "hidden");
};

function closeReg() {
    $(".reg-popup").hide();
    $("body").css("overflow-y", "auto");
};

function poReg() {
    $(".reg-view").hide();
    $(".poRegistration").show();
    $("body").css("overflow-y", "hidden");
};

function bReg() {
    $(".reg-view").hide();
    $(".bRegistration").show();
    $("body").css("overflow-y", "hidden");
};

function toLogIn() {
    $(".poRegistration").hide();
    $(".bRegistration").hide();
    $(".logInpopIn").show();
    $("body").css("overflow-y", "hidden");
};

(function ($) {

    "use strict";

    /*=========================
     Active flickr
    ===========================*/
    $('#flickr_feed').jflickrfeed({
        limit: 12,
        qstrings: {
            id: '95572727@N00'
        },
        itemTemplate:
            '' +

            '<a data-gal="fancybox[flickrgallery]" href="{{image}}" title="{{title}}">' +

            '<img src="{{image_s}}" alt="{{title}}" />' +

            '</a>' +

            ''
    }, function (data) {
        $('.flickr_feed a').fancybox();
    });

    /*=========================
     fancybox
    ===========================*/
    $('.fancybox').fancybox();

    /*=========================
     screenshot-image-median
    ===========================*/
    $(".screenshot-image-meddin").owlCarousel({
        autoPlay: 6000,
        slideSpeed: 1000,
        paginationSpeed: 1000,
        navigation: false,
        pagination: false,
        items: 1,
        itemsDesktop: [1199, 1],
        itemsDesktopSmall: [979, 1],
        itemsTablet: [767, 1],
        itemsMobile: [480, 1]
    });

    /*=========================
     testimonial carosel
    ===========================*/

    $(".testimonial-carosel").owlCarousel({
        autoPlay: 6000,
        slideSpeed: 1000,
        paginationSpeed: 1000,
        navigation: false,
        pagination: true,
        singleItem: true,
        transitionStyle: "fadeUp",
        items: 1,
        itemsDesktop: [1199, 1],
        itemsDesktopSmall: [979, 1]
    });

    /*=========================
     demane-slide
    ==========================*/
    $(".demane-slide").owlCarousel({
        autoPlay: 6000000,
        slideSpeed: 1000,
        paginationSpeed: 1000,
        items: 3,
        itemsDesktop: [1199, 3],
        itemsDesktopSmall: [979, 3],
        itemsTablet: [767, 2],
        itemsMobile: [480, 1],
    });

    /*=========================
     popular-slide6
    ===========================*/

    $(".popular-slide6").owlCarousel({
        navigation: true,
        pagination: true,
        slideSpeed: 600,
        paginationSpeed: 400,
        items: 3,
        itemsDesktop: [1199, 3],
        itemsDesktopSmall: [979, 3],
        itemsTablet: [767, 2],
        itemsMobile: [480, 1],
        navigationText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>']
    });

    /*=========================
     recent-post-slide6
    ===========================*/

    $(".recent-post-slide6").owlCarousel({
        navigation: true,
        pagination: true,
        slideSpeed: 600,
        paginationSpeed: 400,
        items: 1,
        itemsDesktop: [1199, 1],
        itemsDesktopSmall: [979, 1],
        itemsTablet: [767, 1],
        itemsMobile: [480, 1],
        navigationText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>']
    });

    /*=========================
     testimonial4
    ===========================*/

    $(".testimonial4").owlCarousel({
        autoPlay: 600000000,
        slideSpeed: 1000,
        paginationSpeed: 1500,
        navigation: false,
        pagination: false,
        items: 1,
        itemsDesktop: [1199, 1],
        itemsDesktopSmall: [979, 1],
        itemsTablet: [767, 1],
        itemsMobile: [480, 1]
    });

    /*=========================
     testimonial4
    ===========================*/

    $(".work-freame9").owlCarousel({
        autoPlay: 6000,
        slideSpeed: 1000,
        paginationSpeed: 1500,
        navigation: false,
        pagination: true,
        items: 1,
        itemsDesktop: [1199, 1],
        itemsDesktopSmall: [979, 1],
        itemsTablet: [767, 1],
        itemsMobile: [480, 1]
    });

    /*=========================
     emargency-carosel
    ===========================*/

    $(".emargency-carosel").owlCarousel({
        autoPlay: 6000000,
        slideSpeed: 1000,
        paginationSpeed: 1500,
        navigation: false,
        pagination: true,
        items: 3,
        itemsDesktop: [1199, 3],
        itemsDesktopSmall: [979, 3]
    });

    /*=========================
     owl carosel for Our Office page
    ===========================*/

    $("#owl-demo-two").owlCarousel({
        autoPlay: 6000000,
        slideSpeed: 1000,
        paginationSpeed: 1500,
        navigation: true,
        pagination: false,
        items: 1,
        itemsDesktop: [1199, 1],
        itemsDesktopSmall: [979, 1],
        itemsTablet: [767, 1],
        itemsMobile: [480, 1]
    });

    /*---------------------
     team-2-curosel
    --------------------- */

    $(".team-2-curosel").owlCarousel({
        autoPlay: 6000000,
        slideSpeed: 1000,
        paginationSpeed: 1500,
        navigation: true,
        pagination: false,
        items: 5,
        itemsDesktop: [1199, 5],
        itemsDesktopSmall: [979, 5]
    });


    /*=========================
     about2-slide-baner
    ===========================*/

    $(".about2-slide-baner").owlCarousel({
        autoPlay: 6000000,
        slideSpeed: 1000,
        paginationSpeed: 1500,
        navigation: false,
        pagination: false,
        items: 1,
        itemsDesktop: [1199, 1],
        itemsDesktopSmall: [979, 1],
        itemsTablet: [767, 1],
        itemsMobile: [480, 1]
    });

    /*=========================
     testimonial-list
    ===========================*/

    $(".testimonial-list").owlCarousel({
        autoPlay: 6000000,
        slideSpeed: 1000,
        paginationSpeed: 1500,
        navigation: false,
        pagination: false,
        items: 1,
        itemsDesktop: [1199, 1],
        itemsDesktopSmall: [979, 1],
        itemsTablet: [767, 1],
        itemsMobile: [480, 1]
    });

    /*=================================
     Owl Carousel for Our Office page
    ===================================*/

    $(".showcase-slider").owlCarousel({
        autoPlay: 6000000,
        slideSpeed: 1000,
        paginationSpeed: 1500,
        navigation: false,
        pagination: true,
        items: 4,
        itemsDesktop: [1199, 4],
        itemsDesktopSmall: [979, 4]
    });

    /*=========================
     tooltip
    ===========================*/

    // $('[data-bs-toggle="tooltip"]').tooltip();
    const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    const tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
    })

    /*=========================
     countdown
    ===========================*/

    $('[data-countdown]').each(function () {
        const $this = $(this), finalDate = $(this).data('countdown');
        $this.countdown(finalDate, function (event) {
            $this.html(event.strftime('<span class="cdown days"><span class="time-count">%-D :</span> <p>Days</p></span> <span class="cdown hour"><span class="time-count">%-H :</span> <p>Hour</p></span> <span class="cdown minutes"><span class="time-count">%M :</span> <p>Min</p></span> <span class="cdown second"> <span><span class="time-count">%S</span> <p>Sec</p></span>'));
        });
    });

    /*=========================
     mixitup
    ===========================*/

    // $(".work-item7").mixitup({
    //     effects: ['fade', 'rotateZ'],
    //     easing: 'snap'
    // });

    jQuery('.work-item7').mixItUp({
        "animation": {
            "duration": 643,
            "nudge": true,
            "reverseOut": false,
            "effects": "fade rotateZ(180deg)"
        }
    });

    /*=========================
     counterUp
    ===========================*/

    $('.counter').counterUp({
        delay: 10,
        time: 1000
    });

    /*=========================
     scrollUp
    ==========================*/

    $.scrollUp({
        scrollText: '<i class="fa fa-chevron-up"></i>',
        easingType: 'linear',
        scrollSpeed: 900,
        animation: 'fade'
    });

    /*=========================
     accordion
    ===========================*/

    function toggleChevron(e) {
        $(e.target)
            .prev('.panel-heading')
            .find("i.indicator")
            .toggleClass('glyphicon glyphicon-plus glyphicon glyphicon-minus');
    }

    const accordion = document.querySelector('#accordion');
    if (accordion) {
        accordion.addEventListener('hidden.bs.collapse', toggleChevron)
        accordion.addEventListener('shown.bs.collapse', toggleChevron)
    }

    /*=========================
     Circular Bars - Knob
    ===========================*/

    if (typeof ($.fn.knob) != 'undefined') {
        $('.knob').each(function () {
            const $this = $(this),
                knobVal = $this.attr('data-rel');

            $this.knob({
                'draw': function () {
                    $(this.i).val(this.cv + '%');
                }
            });


            $this.appear(function () {
                $({
                    value: 0
                }).animate({
                    value: knobVal
                }, {
                    duration: 2000,
                    easing: 'swing',
                    step: function () {
                        $this.val(Math.ceil(this.value)).trigger('change');
                    }
                });
            }, {accX: 0, accY: -150});
        });
    }

    /*--------------------------
       faq-accordion
    *--------------------------*/
    const faqAccordion = $(".faq-accordion");
    if (faqAccordion.length > 0) {
        faqAccordion.collapse({
            accordion: true,
            open: function () {
                this.slideDown(550);
            },

            close: function () {
                this.slideUp(550);
            }
        });
    }

    /*------------------------------
       contact-accordion
    *---------------------------*/
    const contactAccordion = $(".contact-accordion");
    if (contactAccordion.length > 0) {
        contactAccordion.collapse({
            accordion: true,
            open: function () {
                this.slideDown(550);
            },

            close: function () {
                this.slideUp(550);
            }
        });
    }

    /*-------------------------
       qa-accordion
    *------------------------*/
    const qaAccordion = $(".qa-accordion");
    if (qaAccordion.length > 0) {
        qaAccordion.collapse({
            accordion: true,
            open: function () {
                this.slideDown(550);
            },

            close: function () {
                this.slideUp(550);
            }
        });
    }

    /*=========================
     Sidr Responsive Menu
    ===========================*/
    const rightMenu = $('#right-menu');
    rightMenu.sidr({
        name: 'sidr-right',
        side: 'right'
    });

    $('#simple-menu').sidr();


    /*------------------------
      Side menu trigger icon
    *--------------------------*/

    rightMenu.on('click', function () {
        $(this).children('.fa').toggleClass('fa-close');
        $(this).children('.fa').toggleClass('fa-bars');
    });
    
    /*--------------------------------
    Ajax Contact Form
-------------------------------- */
$(function () {
    // Get the form.
    var form = $('#contact-form');
    // Get the messages div.
    var formMessages = $('.form-message');
    // Set up an event listener for the contact form.
    $(form).submit(function (e) {
        // Stop the browser from submitting the form.
        e.preventDefault();
        // Serialize the form data.
        var formData = $(form).serialize();
        // Submit the form using AJAX.
        $.ajax({
            type: 'POST',
            url: $(form).attr('action'),
            data: formData,
        })
            .done(function (response) {
                // Make sure that the formMessages div has the 'success' class.
                $(formMessages).removeClass('error');
                $(formMessages).addClass('success');

                // Set the message text.
                $(formMessages).text(response);

                // Clear the form.
                $('#contact-form input,#contact-form textarea').val('');
            })
            .fail(function (data) {
                // Make sure that the formMessages div has the 'error' class.
                $(formMessages).removeClass('success');
                $(formMessages).addClass('error');

                // Set the message text.
                if (data.responseText !== '') {
                    $(formMessages).text(data.responseText);
                } else {
                    $(formMessages).text(
                        'Oops! An error occured and your message could not be sent.'
                    );
                }
            });
    });
});


})(jQuery);

   