// Scrolling navbar
var nav = document.querySelector('nav');
window.addEventListener('scroll', function() {
    if (window.scrollY > 200) {
        nav.classList.add('navbar-scroll');
    } else {
        nav.classList.remove('navbar-scroll');
    }
});
// end Scrolling Navbar

// Navbar Active
jQuery(function($) {
    var path = window.location.href; 
    // because the 'href' property of the DOM element is the absolute path
    $('ul a').each(function() {
      if (this.href === path) {
        $(this).addClass('active');
      }
    });
  });
// Navbar Active

// Owl Carousel
$(".owl-carousel").owlCarousel({
    autoplay: true,
    autoplayhoverpause: true,
    autoplaytimeout: 50,
    items: 3,
    nav: true,
    dots: false,
    loop: true,
    lazyLoad: true,
    responsive: {
        0 : {
            items : 1
        },
        485 : {
            items : 1
        },
        728 : {
            items : 2
        },
        960 : {
            items : 3
        },
        1200 : {
            items : 3
        }
    }
});
// End Owl Carousel