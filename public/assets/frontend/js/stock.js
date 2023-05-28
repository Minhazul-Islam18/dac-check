// $(document).ready(function () {
//     jQuery('.galleryCaset').mixItUp();
// $('#caset').DataTable();
// });
$('#testimonial-slider').owlCarousel({
    loop: true,
    items: 3,
    itemsDesktop: [1000, 3],
    itemsDesktopSmall: [980, 2],
    itemsTablet: [768, 2],
    itemsMobile: [650, 1],
    autoPlay: true,
});
//var client = filestack.init('AKe34NwoJRdmod7ug4rKwz');
var client = filestack.init('AuWB5Ttx7REOmiThITYvQz');
var watermarkHandle = '';
var imageHandle = ''
var transformURL = "https://cdn.filestackcontent.com/watermark=file:";

client.onFileSelected(file);

function openPicker() {
    console.log("open Water Picker");
    client.pick({
        accept: 'image/*',
        maxFiles: 1,
        onFileSelected: function (file) {
            //console.log('file size: ', file.size);
            console.log('file: ', file);
            //throw new Error('Please select a file smaller than ' + 2097152 / 1024 / 1024 + 'MB');
        }
    }).then(function (result) {
        console.log(JSON.stringify(result));
        watermarkHandle = result.filesUploaded[0].handle;
        console.log(watermarkHandle);
    })
}

function openPhotoPicker() {
    console.log("open Photo Picker");
    client.pick({
        maxFiles: 1,
        fromSources: ["local_file_system", "facebook", "instagram", "googledrive", "dropbox",
            "evernote", "flickr", "box", "github", "gmail", "onedrive", "clouddrive"
        ],
        storeTo: {
            location: 's3',
            path: '/ATeam2.png',
            container: 'scim-s3-filestack-hackathon',
            region: 'eu-west-1',
            access: 'private'
        },
        onFileSelected: function (file) {
            //console.log('file: ', file);
        }
    }).then(function (result) {
        console.log(result);
        imageHandle = result.filesUploaded[0].handle;
        console.log(imageHandle);
    }).catch(function (reason) {
        console.log('Error: ', reason);
    });

};
$("#lot-select").select2({
    tags: true
});
// add row
$("#addRow").click(function () {
    // $('#newRow').append('');
    document.getElementById('newRow').innerHTML = '';
    var select = document.getElementById('lot-select').value;
    var html = '';

    for (let index = 1; index <= select; index++) {

        // html += 'hello'+index+'<br/>';

        html += `
        <div class="form-group" style="display: flex;align-items: center;gap: 14px;">
            <label for="">Lot ${index} Title</label>
            <input type="text" name="text" aria-invalid="false" placeholder="Write the title of Lot" value="">
        </div>
        <br/>
        `;


    }
    $('#newRow').append(html);
});

// remove row
$(document).on('click', '#removeRow', function () {
    $(this).closest('#inputFormRow').remove();
});
$(document).ready(function () {
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

    $("#owl-demo").owlCarousel({
        items: 1,
        itemsDesktop: [1000, 1],
        itemsDesktopSmall: [980, 1],
        itemsTablet: [768, 1],
        itemsMobile: [650, 1],
        autoPlay: true,
        autoPlaySpeed: 5000,
        autoPlayTimeout: 5000,
        autoplayHoverPause: true
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

const header = document.querySelector('.main-header');

window.addEventListener('scroll', () => {
    const scrollPos = window.scrollY;
    if (scrollPos > 10) {
        header.classList.add('scrolled');
    } else {
        header.classList.remove('scrolled');
    }
});
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
    $('.prof-container').on('click', function () {
        $('.prof-set').fadeToggle("fast");
    });
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