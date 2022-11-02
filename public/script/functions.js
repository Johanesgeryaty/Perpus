
jQuery(document).ready(function($) {

	'use strict';
    //***************************
    // Sticky Header Function
    //***************************
	  jQuery(window).scroll(function() {
	      if (jQuery(this).scrollTop() > 170){  
	          jQuery('body').addClass("ereaders-sticky");
	      }
	      else{
	          jQuery('body').removeClass("ereaders-sticky");
	      }
	  });
    
    //***************************
    // BannerOne Functions
    //***************************
      jQuery('.ereaders-banner').slick({
          slidesToShow: 1,
          slidesToScroll: 1,
          autoplay: true,
          autoplaySpeed: 2000,
          infinite: true,
          dots: false,
          arrows: false,
          fade: true,
          responsive: [
                {
                  breakpoint: 1024,
                  settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                  }
                },
                {
                  breakpoint: 800,
                  settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                  }
                },
                {
                  breakpoint: 400,
                  settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                  }
                }
              ]
        });

    //***************************
    // vehicle Functions
    //***************************
    jQuery('.ereaders-partner-slider').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        infinite: true,
        dots: false,
        arrows: false,
        responsive: [
              {
                breakpoint: 1024,
                settings: {
                  slidesToShow: 3,
                  slidesToScroll: 1,
                  infinite: true,
                }
              },
              {
                breakpoint: 800,
                settings: {
                  slidesToShow: 3,
                  slidesToScroll: 1
                }
              },
              {
                breakpoint: 400,
                settings: {
                  slidesToShow: 1,
                  slidesToScroll: 1
                }
              }
            ]
      });
    //***************************
    // Countdown Function
    //***************************
    jQuery(function() {
        var austDay = new Date();
        austDay = new Date(austDay.getFullYear() + 1, 1 - 1, 26);
        jQuery('#ereaders-countdown').countdown({
            until: austDay
        });
        jQuery('#year').text(austDay.getFullYear());
    });


    //***************************
    // vehicle Functions
    //***************************
    jQuery('.ereaders-testimonial-slide').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        infinite: true,
        dots: true,
        prevArrow: "<span class='slick-arrow-left'><i class='fa fa-angle-left'></i></span>",
        nextArrow: "<span class='slick-arrow-right'><i class='fa fa-angle-right'></i></span>",
        responsive: [
              {
                breakpoint: 1024,
                settings: {
                  slidesToShow: 1,
                  slidesToScroll: 1,
                  infinite: true,
                }
              },
              {
                breakpoint: 800,
                settings: {
                  slidesToShow: 1,
                  slidesToScroll: 1
                }
              },
              {
                breakpoint: 400,
                settings: {
                  slidesToShow: 1,
                  slidesToScroll: 1
                }
              }
            ]
      });

    $(function () {
          $('[data-toggle="tooltip"]').tooltip()
        })

    //***************************
    // slider Functions
    //***************************
      $( function() {
          $( "#slider-range" ).slider({
            range: true,
            min: 0,
            max: 200,
            values: [ 30, 100 ],
            slide: function( event, ui ) {
              $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
            }
          });
          $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
            " - $" + $( "#slider-range" ).slider( "values", 1 ) );
        } );

      //***************************
    // Progressbar Function
    //***************************
    jQuery('.progressbar1').progressBar({
      percentage : false,
      animation : true,
      backgroundColor : "#ececec",
      barColor : "#00aff0",
      height : "8",
    });


      //***************************
    // ThumbSlider Functions
    //***************************
    jQuery('.ereaders-shop-thumb').slick({
          slidesToShow: 1,
          autoplay: true,
          slidesToScroll: 1,
          arrows: false,
          fade: true,
          asNavFor: '.ereaders-shop-thumb-list'
        });
        jQuery('.ereaders-shop-thumb-list').slick({
          slidesToShow: 4,
          slidesToScroll: 1,
          autoplay: true,
          asNavFor: '.ereaders-shop-thumb',
          dots: false,
          arrows: false,
          vertical: true,
          centerMode: false,
          focusOnSelect: true,
          responsive: [
                {
                  breakpoint: 1024,
                  settings: {
                    slidesToShow: 4,
                    slidesToScroll: 1,
                    infinite: true,
                    vertical: false,
                  }
                },
                {
                  breakpoint: 800,
                  settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    vertical: true,
                  }
                },
                {
                  breakpoint: 400,
                  settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    vertical: false,
                  }
                }
              ],
        });

//***************************
    // Fancybox Function
    //***************************
    jQuery(".fancybox").fancybox({
      openEffect  : 'elastic',
      closeEffect : 'elastic',
    });



});



// When the window has finished loading create our google map below
google.maps.event.addDomListener(window, 'load', init);

function init() {
    // Basic options for a simple Google Map
    // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
    var mapOptions = {
        // How zoomed in you want the map to start at (always required)
        zoom: 11,

        // The latitude and longitude to center the map (always required)
        center: new google.maps.LatLng(40.6700, -73.9400), // New York

        // How you would like to style the map. 
        // This is where you would paste any style found on Snazzy Maps.
        styles: [{"featureType":"all","elementType":"all","stylers":[{"visibility":"on"}]},{"featureType":"all","elementType":"labels","stylers":[{"visibility":"on"}]},{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#444444"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2f2f2"},{"visibility":"on"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#00b5ff"},{"visibility":"on"}]},{"featureType":"water","elementType":"geometry.fill","stylers":[{"color":"#00aff0"}]},{"featureType":"water","elementType":"labels","stylers":[{"visibility":"simplified"},{"color":"#6c6c6c"}]}]
    };

    // Get the HTML DOM element that will contain your map 
    // We are using a div with id="map" seen below in the <body>
    var mapElement = document.getElementById('map');

    // Create the Google Map using our element and options defined above
    var map = new google.maps.Map(mapElement, mapOptions);

    // Let's also add a marker while we're at it
    var marker = new google.maps.Marker({
        position: new google.maps.LatLng(40.6700, -73.9400),
        map: map,
        title: 'Snazzy!'
    });
}


// Multi-Toggle Navigation
$(function() {
  $('body').addClass('js');
    var $menu = $('#menu'),
      $menulink = $('.menu-link'),
      $menuTrigger = $('.has-subnav');

  $menulink.on("click", function(e) {
    e.preventDefault();
    $menulink.toggleClass('active');
    $menu.toggleClass('active');
  });

  $menuTrigger.on("click", function(e) {
    e.preventDefault();
    var $this = $(this);
    $this.toggleClass('active').next('ul').toggleClass('active');
  });

});


//***************************
  // Masonry Functions
  //***************************
  jQuery(window).on('load', function() {
    jQuery('.grid').isotope({
      itemSelector: '.grid-item',
      percentPosition: true,
      masonry: {
        fitWidth: true
      }
    });
});


  //***************************
// ContactForm Function
//***************************
$('.myform').on('submit',function(){
    // Add text 'loading...' right after clicking on the submit button. 
    $('.output_message').text('Loading...'); 
     
    var form = $(this);
    $.ajax({
        url: form.attr('action'),
        method: form.attr('method'),
        data: form.serialize(),
        success: function(result){
            if (result == 'success'){
                $('.output_message').html('<span class="success-msg"><i class="fa fa-check-circle"></i> Message Sent successfully!</span>');
            } else if (result == 'validate'){
                $('.output_message').html('<span class="spam-error-msg"><i class="fa fa-warning"></i> You have already sent message. Try again after one hour.</span>');
            } else {
                $('.output_message').html('<span class="error-msg"><i class="fa fa-times-circle"></i> Error Sending email!</span>');
            }
        }
    });
     
    // Prevents default submission of the form after clicking on the submit button. 
    return false;   
});