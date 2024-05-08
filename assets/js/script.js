////navbar scroll-y
var prevScrollY = window.scrollY;

window.addEventListener('scroll', function() {
  var navbar = document.getElementById('navbar');
  var currentScrollY = window.scrollY;

  if (currentScrollY > prevScrollY) {
    // Scrolling down (scrollY increasing)
    navbar.classList.add('hide');
  } else if (currentScrollY < prevScrollY) {
    // Scrolling up (scrollY decreasing)
    navbar.classList.remove('hide');
  }

  // Update prevScrollY for the next scroll event
  prevScrollY = currentScrollY;
});



/////////number count
function visible(partial) {
    var $t = partial,
        $w = jQuery(window),
        viewTop = $w.scrollTop(),
        viewBottom = viewTop + $w.height(),
        _top = $t.offset().top,
        _bottom = _top + $t.height(),
        compareTop = partial === true ? _bottom : _top,
        compareBottom = partial === true ? _top : _bottom;
    return ((compareBottom <= viewBottom) && (compareTop >= viewTop) && $t.is(':visible'));
}
$(window).scroll(function(){
  if(visible($('.count-digit')))
    {
      if($('.count-digit').hasClass('counter-loaded')) return;
      $('.count-digit').addClass('counter-loaded');
$('.count-digit').each(function () {
  var $this = $(this);
  jQuery({ Counter: 0 }).animate({ Counter: $this.text() }, {
    duration: 1500,
    easing: 'swing',
    step: function () {
      $this.text(Math.ceil(this.Counter));
    }
  });
});
    }
})

////number count onhover
function hideNum(element) {
    element.querySelector('.count-digit').innerHTML = '';
}
function showNum(element, a) {
    let num = a;
    element.querySelector('.count-digit').innerHTML = num;
}


/////google review slider slider / section-5
$(document).ready(function(){
  $('.review-slider').slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 1000,
      speed:2000,
      arrows: false,
      dots: false,
      pauseOnHover: false,
      responsive: [{
          breakpoint: 992,
          settings: {
              slidesToShow: 2
          }
      }, {
          breakpoint: 720,
          settings: {
              slidesToShow: 1
          }
      }]
  });
});