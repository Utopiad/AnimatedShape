$(document).ready(function() {

    /* LOADING ANIMATION */

    $('.loader').addClass('anim');

    var loaded = 0;
    var number_of_media = $('img').length;

    doProgress();

    // function for the progress bar
    function doProgress() {
      
      $('img').on('load', function() {
        
        loaded++;
        
        var newWidthPercentage = (loaded / number_of_media) * 100;

        animateLoader(newWidthPercentage + '%');

      });

    }

    //Animate the loader
    function animateLoader(newWidth) {

      $('.progress-bar').width(newWidth);

      if(loaded===(number_of_media)){

        setTimeout(function() {

          $('.loader .title').addClass('hide');
          $('.loader .date').addClass('show');
          $('.loader .progress-bar').addClass('hide');

          setTimeout(function() {

            $('.loader').fadeOut(500);

          }, 1000);


          setTimeout(function() {

            $('#section-home').addClass('show');

          }, 1500);

        }, 1000);
        
      }
    }

    window.onload = function () { 

        setTimeout(function() {

          $('.loader .title').addClass('hide');
          $('.loader .date').addClass('show');
          $('.loader .progress-bar').addClass('hide');

          setTimeout(function() {

            $('.loader').fadeOut(500);

          }, 1000);


          setTimeout(function() {

            $('#section-home').addClass('show');

          }, 1500);

        }, 1000);

    }

    /* END LOADING ANIMATION */

});

$(window).on('load', function() {

  $(function(){
      $("a.delay").click(function(e) {
          $('#container-general').addClass('hide');
          var link = $(this).attr("href");
          setTimeout(function() {
              window.location.href = link;
          }, 500);
          e.preventDefault();
      });
    });


  /* SCROLL CLASS ANIMATION */

  $window = $(window);

  var $containerGeneral = $('#container-general');

  var distancePr1 = $('#section-home').height()/4;

  var distancePr2 = $('#section-text').offset().top - $('#section-home').height()/1.5;
  
  var distancePr3 = $('#section-video').offset().top - $('#section-home').height()/1.5;

  var distancePr4 = $('#section-interface .section-interface_li:nth-child(2)').offset().top - $('#section-home').height()/1.5;

  var distancePr5 = $('#section-interface .section-interface_li:nth-child(3)').offset().top - $('#section-home').height()/1.5;

  var distancePr6 = $('#section-interface .section-interface_li:nth-child(4)').offset().top - $('#section-home').height()/1.5;

  var distancePr7 = $('#section-screenshot').offset().top - $('#section-home').height()/2;

  var distancePrNext = $('#section-next').offset().top - $('#section-home').height()/1.5;

  $window.scroll(function() {

      if ( $window.scrollTop() <= 0 ) {

          $containerGeneral.removeClass('anim-pr-1').removeClass('anim-pr-2').removeClass('anim-pr-3').removeClass('anim-pr-4').removeClass('anim-pr-5').removeClass('anim-pr-6').removeClass('anim-pr-7').removeClass('anim-pr-next');

      }

      if ( $window.scrollTop() >= distancePr1 ) {

          if (!$containerGeneral.hasClass('anim-pr-1')) {

            $containerGeneral.addClass('anim-pr-1');
            
          }

      }

      if ( $window.scrollTop() >= distancePr2 ) {

          if (!$containerGeneral.hasClass('anim-pr-2')) {

            $containerGeneral.addClass('anim-pr-2');
            
          }

      }

      if ( $window.scrollTop() >= distancePr3 ) {

          if (!$containerGeneral.hasClass('anim-pr-3')) {

            $containerGeneral.addClass('anim-pr-3');
            
          }

      }

      if ( $window.scrollTop() >= distancePr4 ) {

          if (!$containerGeneral.hasClass('anim-pr-4')) {

            $containerGeneral.addClass('anim-pr-4');
            
          }

      }

      if ( $window.scrollTop() >= distancePr5 ) {

          if (!$containerGeneral.hasClass('anim-pr-5')) {

            $containerGeneral.addClass('anim-pr-5');
            
          }

      }

      if ( $window.scrollTop() >= distancePr6 ) {

          if (!$containerGeneral.hasClass('anim-pr-6')) {

            $containerGeneral.addClass('anim-pr-6');
            
          }

      }

      if ( $window.scrollTop() >= distancePr7 ) {

          if (!$containerGeneral.hasClass('anim-pr-7')) {

            $containerGeneral.addClass('anim-pr-7');
            
          }

      }

      if ( $window.scrollTop() >= distancePrNext ) {

          if (!$containerGeneral.hasClass('anim-pr-next')) {

            $containerGeneral.addClass('anim-pr-next');
            
          }

      }

  });


  /* SCROLL CLASS ANIMATION */



});

