$(window).on('load', function() {

    $('#container-general').addClass('ready');

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

    var distanceThumb1 = $('.pres-pr:nth-child(1)').offset().top - $('#section-home').height()/1.5;

    var distanceThumb2 = $('.pres-pr:nth-child(2)').offset().top - $('#section-home').height()/1.5;

    var distanceThumb3 = $('.pres-pr:nth-child(3)').offset().top - $('#section-home').height()/1.5;

    var distanceThumb4 = $('.pres-pr:nth-child(4)').offset().top - $('#section-home').height()/1.5;

    var distanceThumb5 = $('.pres-pr:nth-child(5)').offset().top - $('#section-home').height()/1.5;

    var distanceThumb6 = $('.pres-pr:nth-child(6)').offset().top - $('#section-home').height()/1.5;

    
    var distanceThumb7 = $('.pres-pr:nth-child(7)').offset().top - $('#section-home').height()/1.5;

    
    var distanceThumb8 = $('.pres-pr:nth-child(8)').offset().top - $('#section-home').height()/1.5;
    
    var distanceThumb9 = $('.pres-pr:nth-child(9)').offset().top - $('#section-home').height()/1.5;
    
    var distanceThumb10 = $('.pres-pr:nth-child(10)').offset().top - $('#section-home').height()/1.5;


    $window.scroll(function() {


        if ( $window.scrollTop() <= 0 ) {

            $containerGeneral.removeClass('anim-thumb-1').removeClass('anim-thumb-2').removeClass('anim-thumb-3').removeClass('anim-thumb-4').removeClass('anim-thumb-5').removeClass('anim-thumb-6').removeClass('anim-thumb-7').removeClass('anim-thumb-8').removeClass('anim-thumb-9').removeClass('anim-thumb-10');

        }

        if ( $window.scrollTop() >= distanceThumb1 ) {

            if (!$containerGeneral.hasClass('anim-thumb-1')) {

              $containerGeneral.addClass('anim-thumb-1');
              
            }

        }

        if ( $window.scrollTop() >= distanceThumb2 ) {

            if (!$containerGeneral.hasClass('anim-thumb-2')) {

              $containerGeneral.addClass('anim-thumb-2');
              
            }

        }

        if ( $window.scrollTop() >= distanceThumb3 ) {

            if (!$containerGeneral.hasClass('anim-thumb-3')) {

              $containerGeneral.addClass('anim-thumb-3');
              
            }

        }

        if ( $window.scrollTop() >= distanceThumb4 ) {

            if (!$containerGeneral.hasClass('anim-thumb-4')) {

              $containerGeneral.addClass('anim-thumb-4');
              
            }

        }

        if ( $window.scrollTop() >= distanceThumb5 ) {

            if (!$containerGeneral.hasClass('anim-thumb-5')) {

              $containerGeneral.addClass('anim-thumb-5');
              
            }

        }

        if ( $window.scrollTop() >= distanceThumb6 ) {

            if (!$containerGeneral.hasClass('anim-thumb-6')) {

              $containerGeneral.addClass('anim-thumb-6');
              
            }

        }
        
        if ( $window.scrollTop() >= distanceThumb7 ) {

            if (!$containerGeneral.hasClass('anim-thumb-7')) {

              $containerGeneral.addClass('anim-thumb-7');
              
            }

        }

        
        if ( $window.scrollTop() >= distanceThumb8 ) {

            if (!$containerGeneral.hasClass('anim-thumb-8')) {

              $containerGeneral.addClass('anim-thumb-8');
              
            }

        }
        
        if ( $window.scrollTop() >= distanceThumb9 ) {

            if (!$containerGeneral.hasClass('anim-thumb-9')) {

              $containerGeneral.addClass('anim-thumb-9');
              
            }

        }
        
        if ( $window.scrollTop() >= distanceThumb10 ) {

            if (!$containerGeneral.hasClass('anim-thumb-10')) {

              $containerGeneral.addClass('anim-thumb-10');
              
            }

        }

    });


    /* SCROLL CLASS ANIMATION */


    /* SCROLL NAV ANIMATION */

    var distanceHref1 = $('#href-pres-1').offset().top - $('#section-home').height()/1.5;

    var distanceHref2 = $('#href-pres-2').offset().top - $('#section-home').height()/1.5;

    var distanceHref3 = $('#href-pres-3').offset().top - $('#section-home').height()/1.5;

    var distanceHref4 = $('#href-pres-4').offset().top - $('#section-home').height()/1.5;

    var distanceHref5 = $('#href-pres-5').offset().top - $('#section-home').height()/1.5;

    var distanceHref6 = $('#href-pres-6').offset().top - $('#section-home').height()/1.5;
    
    var distanceHref7 = $('#href-pres-7').offset().top - $('#section-home').height()/1.5;

    var distanceHref8 = $('#href-pres-8').offset().top - $('#section-home').height()/1.5;

    var distanceHref9 = $('#href-pres-9').offset().top - $('#section-home').height()/1.5;

    var distanceHref10 = $('#href-pres-10').offset().top - $('#section-home').height()/1.5;

    var distanceContact = $('#href-nav-contact').offset().top - $('#section-home').height()/1.5;

    $window = $(window);

    $window.scroll(function() {


        if ( $window.scrollTop() <= 0 ) {

            $containerGeneral.addClass('active-nav-home');
            $containerGeneral.removeClass('active-nav-thumb-1');

        }

        if ( $window.scrollTop() >= distanceHref1 && $window.scrollTop() <= distanceHref2 ) {

            $containerGeneral.removeClass('active-nav-home');
            $containerGeneral.addClass('active-nav-thumb-1');
            $containerGeneral.removeClass('active-nav-thumb-2');

        }

        if ( $window.scrollTop() >= distanceHref2 && $window.scrollTop() <= distanceHref3  ) {

            $containerGeneral.addClass('active-nav-thumb-2');
            $containerGeneral.removeClass('active-nav-thumb-1');
            $containerGeneral.removeClass('active-nav-thumb-3');

        }

        if ( $window.scrollTop() >= distanceHref3 && $window.scrollTop() <= distanceHref4 ) {

            $containerGeneral.addClass('active-nav-thumb-3');
            $containerGeneral.removeClass('active-nav-thumb-2');
            $containerGeneral.removeClass('active-nav-thumb-4');

        }

        if ( $window.scrollTop() >= distanceHref4 && $window.scrollTop() <= distanceHref5) {

            $containerGeneral.addClass('active-nav-thumb-4');
            $containerGeneral.removeClass('active-nav-thumb-3');
            $containerGeneral.removeClass('active-nav-thumb-5');

        }

        if ( $window.scrollTop() >= distanceHref5 && $window.scrollTop() <= distanceHref6 ) {

            $containerGeneral.addClass('active-nav-thumb-5');
            $containerGeneral.removeClass('active-nav-thumb-4');
            $containerGeneral.removeClass('active-nav-thumb-6');

        }

        if ( $window.scrollTop() >= distanceHref6 && $window.scrollTop() <= distanceHref7) {

            $containerGeneral.addClass('active-nav-thumb-6');
            $containerGeneral.removeClass('active-nav-thumb-5');
            $containerGeneral.removeClass('active-nav-thumb-7');

        }

        if ( $window.scrollTop() >= distanceHref7 && $window.scrollTop() <= distanceHref8 ) {

            $containerGeneral.addClass('active-nav-thumb-7');
            $containerGeneral.removeClass('active-nav-thumb-6');
            $containerGeneral.removeClass('active-nav-thumb-8');

        }

        if ( $window.scrollTop() >= distanceHref8 && $window.scrollTop() <= distanceHref9 ) {

            $containerGeneral.addClass('active-nav-thumb-8');
            $containerGeneral.removeClass('active-nav-thumb-7');
            $containerGeneral.removeClass('active-nav-thumb-9');

        }

        if ( $window.scrollTop() >= distanceHref9 && $window.scrollTop() <= distanceHref10) {

            $containerGeneral.addClass('active-nav-thumb-9');
            $containerGeneral.removeClass('active-nav-thumb-8');
            $containerGeneral.removeClass('active-nav-thumb-10');

        }

        if ( $window.scrollTop() >= distanceHref10 && $window.scrollTop() <= distanceContact) {

            $containerGeneral.addClass('active-nav-thumb-10');
            $containerGeneral.removeClass('active-nav-thumb-9');
            $containerGeneral.removeClass('active-nav-contact');

        }

        if ( $window.scrollTop() >= distanceContact ) {

            $containerGeneral.addClass('active-nav-contact');
            $containerGeneral.removeClass('active-nav-thumb-10');

        }

    });


    /* SCROLL NAV ANIMATION */


  });

