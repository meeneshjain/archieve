$(document).ready(function(){


	if(document.referrer.indexOf('carina') !== -1) {
	} else {
	    $('.preload').css({'display': 'table'});
	    $.preloadImages = function () {
	        for (var i = 0; i < arguments.length; i++) {
	            $("<img />").attr("src", arguments[i]);
	        }
	    }

	    //$.preloadImages("assets/images/tmp_people.jpg", "assets/images/case.png", "assets/images/team1.jpg", "assets/images/team2.jpg", "assets/images/team3.jpg", "assets/images/team4.jpg", "assets/images/team8.jpg", "assets/images/mosaic_person.jpg");

	    var percent = 0;
	    var int = null;
	    int = setInterval(function () {
	        percent += 20;
	        $('.loading-bar .bar').css({width: percent + "%"});
	        $('span.active').removeClass('active').next().addClass('active');
	        if (percent >= 100) {
	            clearInterval(int);
	            $('.preload').addClass('animate-out');
	            setTimeout(function () {
	                $('.preload').remove();
	            }, 1000);
	            //window.location = 'index2.html';
	        }
	    }, 500);
	}

	$(window).scroll(function() {    
	    var scroll = $(window).scrollTop();

	    if (scroll >= 800) {
	        $(".ct-header").addClass("sticky-header");
	    } else {
	        $(".ct-header").removeClass("sticky-header");
	    }
	});

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
  
     $("#contact_subject").typed({
        strings: ["Android app", "Virtual Reality", "Website Design", "Website Development"],
        typeSpeed: 100,
        loop: !0
    })
});


//svg icons script
;(function( window, document )
{
    'use strict';
 
    var file     = './assets/images/svg-sprite.html',
        revision = 1;
 
    if( !document.createElementNS || !document.createElementNS( 'http://www.w3.org/2000/svg', 'svg' ).createSVGRect )
        return true;
 
    var isLocalStorage = 'localStorage' in window && window[ 'localStorage' ] !== null,
        request,
        data,
        insertIT = function()
        {
            document.body.insertAdjacentHTML( 'afterbegin', data );
        },
        insert = function()
        {
            if( document.body ) insertIT();
            else document.addEventListener( 'DOMContentLoaded', insertIT );
        };
 
    if( isLocalStorage && localStorage.getItem( 'inlineSVGrev' ) == revision )
    {
        data = localStorage.getItem( 'inlineSVGdata' );
        if( data )
        {
            insert();
            return true;
        }
    }
 
    try
    {
        request = new XMLHttpRequest();
        request.open( 'GET', file, true );
        request.onload = function()
        {
            if( request.status >= 200 && request.status < 400 )
            {
                data = request.responseText;
                insert();
                if( isLocalStorage )
                {
                    localStorage.setItem( 'inlineSVGdata',  data );
                    localStorage.setItem( 'inlineSVGrev',   revision );
                }
            }
        }
        request.send();
    }
    catch( e ){}
 
}( window, document ) );
