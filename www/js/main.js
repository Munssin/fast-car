
    //
    // var $nav = $('nav');
    // var $win = $(window);
    // var winH = $win.height(); // Get the window height.
    //
    // $win.on("scroll", function (e) {
    //     console.log(e);
    //     if ($win.scrollTop() > 500 ) {
    //         $nav.addClass("as");
    //         $nav.removeClass("main-nav");
    //     } else {
    //         $nav.removeClass("as");
    //     }
    // });

    // $(".go-main").click(function(){
    //     $(".focus-car").css({"background-image": "url(/img/car-item-2.png)"
    //     });
    // });

    $('.open-mob').click(function () {
        $(this).toggleClass('active');
        $('#mob-nav').toggleClass('open');
        // $('body').css('overflow-y', 'hidden');
    });

    $('.slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: '.slider-nav'
    });
    $('.slider-nav').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: '.slider',
        dots: false,
        centerMode: true,
        focusOnSelect: true
    });

    var map;
    function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: 49.8333929, lng: 24.0034763},
            zoom: 18
        });
    }