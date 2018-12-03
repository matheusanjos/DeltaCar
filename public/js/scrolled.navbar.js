$(window).scroll(function(){
    $('nav').toggleClass('scrolled', $(this).scrollTop() > 60);
});

$('.js-scroll-trigger').click(function() {
    $('.navbar-collapse').collapse('hide');
});
