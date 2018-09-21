$(function() {
  var header = $('.menu');
  var stickyHeaderTop = header.offset().top;

  $(window).scroll(function() {
    if ($(window).scrollTop() > stickyHeaderTop) {
      header.css({
        position: 'fixed',
        top: '0px' 
		
      });
    } else {
      header.css({
        position: 'static',
        top: '0px',
      
      });
    }
  });
});