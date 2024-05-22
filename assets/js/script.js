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

//////////scroll indicator
window.onscroll = function() {myFunction()};
function myFunction() {
  var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
  var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
  var scrolled = (winScroll / height) * 100;
  document.getElementById("myBar").style.width = scrolled + "%";
}

////////////quick contact buttons 
document.addEventListener('DOMContentLoaded', function() {
  var navbar = document.getElementById('qk-contact-bar');
  window.addEventListener('scroll', function() {
    if (window.scrollY > 150) {
      navbar.classList.add('scrolled');
    } else {
      navbar.classList.remove('scrolled');
    }
  });
});


////////nav-button onclick (mobile/tab)
function showNav(a){
 a.classList.toggle('active')

 var navbar = document.getElementById('navbar');
 navbar.classList.toggle('show')

 let navbarCollapse =document.getElementById('navbarNavDropdown')
 navbarCollapse.classList.toggle('show')
 if (document.documentElement.style.overflow === 'hidden') {
  document.documentElement.style.overflow = '';
} else {
  document.documentElement.style.overflow = 'hidden';
}
}
////////dropdown-menu onclick(mobile/tab)
/* function showDrpdwnMenu(element){
  let dropdownMenu = document.getElementById(element);
  if (hasClass(dropdownMenu, 'show-l')) {
    dropdownMenu.classList.remove('show-l');
   }
   else{
    dropdownMenu.classList.add('show-l');
   }
} */
////////dropdown-menu onclick(mobile/tab)
function showDrpdwnMenu(element) {
  let dropdownMenu = document.getElementById(element);
  let navLogo=document.querySelector('.navbar-brand')
  if (!hasClass(dropdownMenu, 'show-l')) {
      dropdownMenu.classList.add('show-l');
      navLogo.classList.add('z-index');
  }
  else{
    dropdownMenu.classList.remove('show-l');
    navLogo.classList.remove('z-index');
  }
}
function hasClass(element, className) {
  return element.classList.contains(className);
}



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