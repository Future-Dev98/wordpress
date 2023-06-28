jQuery(document).ready(function ($) {
    // slider banner home
    $('.slider .items.owl-carousel').owlCarousel({
        loop: false,
        nav: false,
        items: 1
    })

    //training and news section
    $('.training .items.owl-carousel,.news .items.owl-carousel').owlCarousel({
        loop: false,
        nav: false,
        responsive : {
            0: {
                items: 1
            },
            425: {
                items: 2
            },
            1200: {
                items: 3
            }
        }
    })

    //partners
    $('.partners.owl-carousel').owlCarousel({
        loop: false,
        nav: true,
        responsive : {
            0: {
                items: 1
            },
            991: {
                items: 3
            },
            1200: {
                items: 4
            }
        }
    })
})