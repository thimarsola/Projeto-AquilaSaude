$(function () {
    $('.header__navbar__section__toggle').click(function () {
        var clicks = $(this).data('clicks');

        if (clicks) {
            $('body').css('overflow', 'auto');
        } else {
            $('body').css('overflow', 'hidden');
        }
        $(this).data("clicks", !clicks);

        $('.header').toggleClass('header--active');
    });
});