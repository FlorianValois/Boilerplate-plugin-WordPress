// By Florian VALOIS

jQuery(document).ready(function ($) {

  $('#scrollTop').on('click', function () {
    $("html, body").animate({
      scrollTop: $('body').offset().top - 100
    }, 1000);
  });
  
});
