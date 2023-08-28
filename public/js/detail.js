

    $(document).ready(function() {
        $('.slider').slick({
            dots: true,
            prevArrow: '<button type="button"><i class="fas fa-chevron-left"></i></button>',
            nextArrow: '<button type="button"><i class="fas fa-chevron-right"></i></button>',
            slidesToShow: 1,
            slidesToScroll: 1,
            centerMode: true,
            centerPadding: '0',
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,
                    }
                }
            ]
        });
    });
