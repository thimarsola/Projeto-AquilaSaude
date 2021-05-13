$(function () {
    const prevIcon = "<i class=\"aquila-arrow\"></i>";
    const nextIcon = "<i class=\"aquila-small-arrow\"></i>";

    $(".testimonial__carousel").owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        autoplay: true,
        autoplayTimeout: 3500,
        autoplayHoverPause: true,
        autoHeight:true,
        navText:[
            nextIcon,
            prevIcon
        ],
        items: 1
    });
});