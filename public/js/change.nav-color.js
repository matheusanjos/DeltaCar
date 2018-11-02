$(window).scroll(function(){
    $('nav').toggleClass('scrolled', $(this).scrollTop() > 60);
});

$(window).scroll(function(){
    $('#navbar-logo').toggleClass('scrolled', $(this).scrollTop() > 60);
});

$(window).scroll(function(){
    $('.nav-item').toggleClass('scrolled', $(this).scrollTop() > 60);
});

$(window).scroll(function(){
    $('.nav-link').toggleClass('scrolled', $(this).scrollTop() > 60);
});

$(window).scroll(function(){
    $('.fa-bars').toggleClass('scrolled', $(this).scrollTop() > 60);
});
