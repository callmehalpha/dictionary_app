$navbar = $('.navbar');
$(window).on('load resize',function() {
  $('body').css('padding-top',$navbar.outerHeight());
})
