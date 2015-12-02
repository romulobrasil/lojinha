$('.menu-item').click(function() {
    //alert($(this).next());
    $('.menu-item').removeClass('active');
    $('.menu-item').find('.sub-menu').css('display', 'none');
  //  $('.menu-item').removeClass('active')
    $(this).find('.sub-menu').slideToggle();
    $(this).find('.sub-menu').addClass('active');
    //$('.menu').slideToggle('slow');
});

