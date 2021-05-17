$(function(){
    $('.menu-item-has-children > a').removeAttr("href").click(function(e){
        e.preventDefault();
    });

    // $('.menu-item-has-children').click(function (){
    //     $(this).toggleClass('rotate');
    //     $('.sub-menu').toggleClass('active');
    // });

    $('.menu-item-has-children').on('click', function (e){
        e.stopPropagation();
        $(this).toggleClass('rotate');
        $('.sub-menu').stop().slideToggle(500);

        if( $('.menu-item-has-children').hasClass('rotate')){
            $(document).on('click', function (){
                $('.menu-item-has-children').removeClass('rotate');
                $('.sub-menu').slideUp(500);
            });
        }
    });
});