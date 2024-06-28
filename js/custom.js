$(document).ready(function(){
    $('.reviewslider').slick({
        dots: false,
        arrow:true,
       infinite: false,
        speed: 300,
        slidesToShow: 4,
        infinite: true,
        slidesToScroll: 1,
        prevArrow: '<button type="button" class="slick-custom-arrow slick-prev"> </button>',
  nextArrow: '<button type="button" class="slick-custom-arrow slick-next">  </button>',
        responsive: [
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 3,
    
            }
          },
          {
            breakpoint: 767,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2
            }
          },
          {
            breakpoint: 680,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }
        ]
      });

      $('.jj').slick({
        dots: false,
        arrow:true,
       infinite: false,
        speed: 300,
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        prevArrow: '<button type="button" class="slick-custom-arrow slick-prev"> </button>',
  nextArrow: '<button type="button" class="slick-custom-arrow slick-next">  </button>',
        responsive: [
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1,
    
            }
          },
          {
            breakpoint: 768,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          },
      
        ]
      });


  

      // add active class in nav section

      $(".mob--navbar").click(function(){
        $(".header-navbar").toggleClass("active");
        $(".hamburger--mpb .fa-bars").toggleClass("fa-times");

      });



      
  });
  
  $(window).scroll(function() {    
    var scroll = $(window).scrollTop();

    if (scroll >= 50) {
        $(".product--header-sec").addClass("pro--active");
        $(".heade--parent--sec").addClass("fixed--header");
    } else {
        $(".product--header-sec").removeClass("pro--active");
        $(".heade--parent--sec").removeClass("fixed--header");
    }
});
//   header section add class

// window.onscroll = function() {myFunction()};
// var header = document.getElementsByClassName("heade--parent--sec")[0];
// var sticky = header.offsetTop + 50;
// function myFunction() {
//   if (window.pageYOffset > sticky) {
//     header.classList.add("fixed--header");
//   } else {
//     header.classList.remove("fixed--header");
//   }
// }

// counter start
let cust_counter = 0;
$(window).scroll(function() {
  // console.log($('.counter--section').length);
if($('.counter--section').length > 0){
  let oTop = $('.counter--section').offset().top - window.innerHeight;
  if (cust_counter == 0 && $(window).scrollTop() > oTop) {
    $('.counter-number').each(function() {
        let $this = $(this);
        jQuery({ Counter: 0 }).animate({ Counter: $this.text() }, {
            duration: 2000,
            easing: 'swing',
            step: function () {
                $this.text(Math.ceil(this.Counter));
            }
        });
    });
    cust_counter = 1;
  }
}
  
});



// tabbing 

function openCity(evt, productname) {

  if($('.tabcontent').length > 0){
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(productname).style.display = "block";
    evt.currentTarget.className += " active";
  }
}


document.addEventListener("DOMContentLoaded", function() {
  let tablinks = document.getElementsByClassName("tablinks")[0];
  tablinks.click();
});




