$(document).ready(function(){
	var swiper = new Swiper('.intro-slide', {
	  navigation: {
	    nextEl: '.swiper-button-next',
	    prevEl: '.swiper-button-prev',
	  },
	});

	var swiper = new Swiper('.home-slider', {
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
    });

    var swiper = new Swiper('.partner-slider', {
    	slidesPerView: 4,
      spaceBetween: 30,
      breakpoints: {
        640: {
          slidesPerView: 1,
        },
        768: {
          slidesPerView: 3,
        },
        1024: {
          slidesPerView: 4,
        },
      }
    });


    $("a.page-scroll").click(function() {
	    var targetDiv = $(this).attr('href');
	    $('html, body').animate({
	        scrollTop: $(targetDiv).offset().top
	    }, 1000);
	});
    

    $('.count').each(function () {
	    $(this).prop('Counter',0).animate({
	        Counter: $(this).text()
	    }, {
	        duration: 4000,
	        easing: 'swing',
	        step: function (now) {
	            $(this).text(Math.ceil(now));
	        }
	    });
	});

    AOS.init();
    
})


