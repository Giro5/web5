$(function () {

    $('.nl1').on('click', function (e) {
        $('html,body').stop().animate({ scrollTop: $('#scr1').offset().top }, 500);
        e.preventDefault();
    });

    $('.nl2').on('click', function (e) {
        $('html,body').stop().animate({ scrollTop: $('#scr2').offset().top }, 500);
        e.preventDefault();
    });

    $('.nl3').on('click', function (e) {
        $('html,body').stop().animate({ scrollTop: $('#scr3').offset().top }, 500);
        e.preventDefault();
    });

    $('.nl4').on('click', function (e) {
        $('html,body').stop().animate({ scrollTop: $('#coments').offset().top }, 500);
        e.preventDefault();
    });

    $('#scr1').on('click', function (e) {
        $('html,body').stop().animate({ scrollTop: $('#nav').offset().top }, 500);
        e.preventDefault();
    });

    $('#scr2').on('click', function (e) {
        $('html,body').stop().animate({ scrollTop: $('#scr1').offset().top }, 500);
        e.preventDefault();
    });

    $('#scr3').on('click', function (e) {
        $('html,body').stop().animate({ scrollTop: $('#scr2').offset().top }, 500);
        e.preventDefault();
    });

    $('#scr4').on('click', function (e) {
        $('html,body').stop().animate({ scrollTop: $('#scr1').offset().top }, 500);
        e.preventDefault();
    });

    $('#scr5').on('click', function (e) {
        $('html,body').stop().animate({ scrollTop: $('#scr2').offset().top }, 500);
        e.preventDefault();
    });

    $('#scr6').on('click', function (e) {
        $('html,body').stop().animate({ scrollTop: $('#scr3').offset().top }, 500);
        e.preventDefault();
    });

    $('#scr7').on('click', function (e) {
        $('html,body').stop().animate({ scrollTop: $('#nav').offset().top }, 500);
        e.preventDefault();
    });
});
