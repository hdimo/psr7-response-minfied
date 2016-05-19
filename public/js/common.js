/**
 * Created by khaled on 4/9/16.
 */



$(document).ready(
    function () {

        /*

        // Owl Carousel
        var owlCarousel = $('#owl-carousel'),
            owlItems = owlCarousel.attr('data-items'),
            owlCarouselSlider = $('#owl-carousel-slider'),
            owlNav = owlCarouselSlider.attr('data-nav');
        // owlSliderPagination = owlCarouselSlider.attr('data-pagination');


        owlCarousel.owlCarousel({
            items: owlItems,
            navigation: true,
            navigationText: ['', '']
        });

        owlCarouselSlider.owlCarousel({
            slideSpeed: 300,
            paginationSpeed: 400,
            // pagination: owlSliderPagination,
            singleItem: true,
            navigation: true,
            navigationText: ['', ''],
            transitionStyle: 'fade',
            autoPlay: 4500
        });
         */

        /*
        $('input').iCheck({
         checkboxClass: 'icheckbox_minimal',
         radioClass: 'iradio_minimal',
        });
         */


        // footer always on bottom
        var docHeight = $(window).height();
        var footerHeight = $('#main-footer').height();
        var footerTop = $('#main-footer').position().top + footerHeight;

        if (footerTop < docHeight) {
            $('#main-footer').css('margin-top', (docHeight - footerTop) + 'px');
        }


        $('.i-check, .i-radio').iCheck({
            checkboxClass: 'i-check',
            radioClass: 'i-radio'
        });
    }
);
