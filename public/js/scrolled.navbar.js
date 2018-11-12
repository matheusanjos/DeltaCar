$(window).scroll(function(){
    $('nav').toggleClass('scrolled', $(this).scrollTop() > 60);
});

$(window).scroll(function(){
    $('.navbar-brand img').toggleClass('scrolled', $(this).scrollTop() > 60);
});

$(window).scroll(function(){
    $('.nav-item').toggleClass('scrolled', $(this).scrollTop() > 60);
});

$(window).scroll(function(){
    $('.nav-link').toggleClass('scrolled', $(this).scrollTop() > 60);
});

$(window).scroll(function(){
    $('.navbar-toggler span').toggleClass('scrolled', $(this).scrollTop() > 60);
});
