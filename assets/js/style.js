$(window).on('resize', function () {
    $('.div').toggleClass('my-glow', $(window).width() < 768);
});