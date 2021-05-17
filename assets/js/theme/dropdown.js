$(function(){
    $('.menu-item-has-children').click(function (){
        $(this).toggleClass('rotate');
        $('.sub-menu').toggleClass('active');
    });
});