$(window).scroll(function(){
    $('nav').toggleClass('scrolled', $(this).scrollTop() > $('nav').height());
});

$(window).scroll(function(){
    $('#navbar-img').toggleClass('scrolled', $(this).scrollTop() > $('nav').height());
});

$(window).scroll(function(){
    $('.nav-item').toggleClass('scrolled', $(this).scrollTop() > $('nav').height());
});

$(window).scroll(function(){
    $('.nav-link').toggleClass('scrolled', $(this).scrollTop() > $('nav').height());
});

$(window).scroll(function(){
    $('.fa-bars').toggleClass('scrolled', $(this).scrollTop() > $('nav').height());
});
