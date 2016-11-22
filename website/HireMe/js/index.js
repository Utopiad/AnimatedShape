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


    /* -------------------------------------- */
    /* ---------------- FORM ---------------- */
    /* -------------------------------------- */


        /* --- WHO YOU ARE --- */


            $('.form_lab_data_choice_style_1').click(function(){

              $('.form_lab_data_choice_style_1').removeClass('active');

              $(this).addClass('active');

              if ($('.form_lab_data_choice_style_1:nth-child(1)').hasClass('active')) {

                document.getElementById("whoYouAre").value = "I’m someone";

              }else if ($('.form_lab_data_choice_style_1:nth-child(2)').hasClass('active')) {

                document.getElementById("whoYouAre").value = "I’m a Company";

              }

            })


        /* --- END WHO YOU ARE --- */


        /* --- I'M LOOKING FOR --- */

            $('.form_lab_data_choice_style_3').click(function(){

              $(this).toggleClass('active');

            })

            var imLookingFor_value1 = "Identity + "
            var imLookingFor_value2 = "Design + "
            var imLookingFor_value3 = "Code + "

            $('.form_lab_data_choice_style_3:nth-child(1)').click(function(){

                if ($(this).hasClass('active')) {
                    document.getElementById("imLookingFor").value = document.getElementById("imLookingFor").value + imLookingFor_value1;
                } else {
                    document.getElementById("imLookingFor").value = document.getElementById("imLookingFor").value.replace(imLookingFor_value1, '');
                }

            })

            $('.form_lab_data_choice_style_3:nth-child(2)').click(function(){

                if ($(this).hasClass('active')) {
                    document.getElementById("imLookingFor").value = document.getElementById("imLookingFor").value + imLookingFor_value2;
                        $('.form_lab:nth-child(4)').show();
                } else {
                    document.getElementById("imLookingFor").value = document.getElementById("imLookingFor").value.replace(imLookingFor_value2, '');
                }
                

            })

            $('.form_lab_data_choice_style_3:nth-child(3)').click(function(){

                if ($(this).hasClass('active')) {
                    document.getElementById("imLookingFor").value = document.getElementById("imLookingFor").value + imLookingFor_value3;
                    $('.form_lab:nth-child(4)').show();
                } else {
                    document.getElementById("imLookingFor").value = document.getElementById("imLookingFor").value.replace(imLookingFor_value3, '');
                }

            })

        /* --- END I'M LOOKING FOR --- */


        /* --- WHAT KIND OF DESIGN --- */

            $('.form_lab_data_choice_style_7').click(function(){
                $(this).toggleClass('active');
            })

            var whatKinfOfDesign_value1 = "Web + "
            var whatKinfOfDesign_value2 = "App + "
            var whatKinfOfDesign_value3 = "Watch + "
            var whatKinfOfDesign_value4 = "Motion + "

            $('.form_lab_data_choice_style_7:nth-child(1)').click(function(){

                if ($(this).hasClass('active')) {
                    document.getElementById("whatKinfOfDesign").value = document.getElementById("whatKinfOfDesign").value + whatKinfOfDesign_value1;
                } else {
                    document.getElementById("whatKinfOfDesign").value = document.getElementById("whatKinfOfDesign").value.replace(whatKinfOfDesign_value1, '');
                }

            })

            $('.form_lab_data_choice_style_7:nth-child(2)').click(function(){

                if ($(this).hasClass('active')) {
                    document.getElementById("whatKinfOfDesign").value = document.getElementById("whatKinfOfDesign").value + whatKinfOfDesign_value2;
                } else {
                    document.getElementById("whatKinfOfDesign").value = document.getElementById("whatKinfOfDesign").value.replace(whatKinfOfDesign_value2, '');
                }
                

            })

            $('.form_lab_data_choice_style_7:nth-child(3)').click(function(){

                if ($(this).hasClass('active')) {
                    document.getElementById("whatKinfOfDesign").value = document.getElementById("whatKinfOfDesign").value + whatKinfOfDesign_value3;
                } else {
                    document.getElementById("whatKinfOfDesign").value = document.getElementById("whatKinfOfDesign").value.replace(whatKinfOfDesign_value3, '');
                }

            })

            $('.form_lab_data_choice_style_7:nth-child(4)').click(function(){

                if ($(this).hasClass('active')) {
                    document.getElementById("whatKinfOfDesign").value = document.getElementById("whatKinfOfDesign").value + whatKinfOfDesign_value4;
                } else {
                    document.getElementById("whatKinfOfDesign").value = document.getElementById("whatKinfOfDesign").value.replace(whatKinfOfDesign_value4, '');
                }

            })

        /* --- END WHAT KIND OF DESIGN --- */


        /* --- TIME GOAL --- */

            $('.form_lab_data_choice_style_4 input').click(function(){
                if (!$('.form_lab_data_choice_style_4 .dropdown').hasClass('show')) {
                    $('.form_lab_data_choice_style_4 .dropdown').show();
                    setTimeout(function() {
                        $('.form_lab_data_choice_style_4 .dropdown').addClass('show');
                    }, 50);
                } else {
                    $('.form_lab_data_choice_style_4 .dropdown').removeClass('show');
                    setTimeout(function() {
                        $('.form_lab_data_choice_style_4 .dropdown').hide();
                    }, 450);
                }
                
            })


            var valDropDown = $(this).data('val');

            $('.form_lab_data_choice_style_4 .dropdown .el').click(function(){

                $('#timeGoal').removeAttr('placeholder');

                $('.form_lab_data_choice_style_4 .dropdown .el').removeClass('active');

                $(this).addClass('active');

                var elems = document.querySelector('.form_lab_data_choice_style_4 .dropdown .el.active');

                var categoryFreebies = elems.innerText || elems.textContent;

                document.getElementById("timeGoal").value = categoryFreebies;

                $('.form_lab_data_choice_style_4 .dropdown').removeClass('show');
                setTimeout(function() {
                    $('.form_lab_data_choice_style_4 .dropdown').hide();
                }, 450);

            })

        /* --- END TIME GOAL --- */


        /* --- BUDGET --- */

            $('.form_lab_data_choice_style_5 input').click(function(){
                if (!$('.form_lab_data_choice_style_5 .dropdown').hasClass('show')) {
                    $('.form_lab_data_choice_style_5 .dropdown').show();
                    setTimeout(function() {
                        $('.form_lab_data_choice_style_5 .dropdown').addClass('show');
                    }, 50);
                } else {
                    $('.form_lab_data_choice_style_5 .dropdown').removeClass('show');
                    setTimeout(function() {
                        $('.form_lab_data_choice_style_5 .dropdown').hide();
                    }, 450);
                }
                
            })


            var valDropDown = $(this).data('val');

            $('.form_lab_data_choice_style_5 .dropdown .el').click(function(){

                $('#budget').removeAttr('placeholder');

                $('.form_lab_data_choice_style_5 .dropdown .el').removeClass('active');

                $(this).addClass('active');

                var elems = document.querySelector('.form_lab_data_choice_style_5 .dropdown .el.active');

                var categoryFreebies = elems.innerText || elems.textContent;

                document.getElementById("budget").value = categoryFreebies;

                $('.form_lab_data_choice_style_5 .dropdown').removeClass('show');
                setTimeout(function() {
                    $('.form_lab_data_choice_style_5 .dropdown').hide();
                }, 450);

            })

        /* --- END BUDGET --- */


        /* --- CHECK ---  */

            var checkForm = true;

            $('#form .submit').click(function(){

                checkForm = true;


                /* WHAT’S YOUR NAME */

                if ($('#fullName').val()=="") {

                    $($('#fullName')).closest('.form_lab').addClass('error');
                    checkForm = false;

                }else{

                    $($('#fullName')).closest('.form_lab').removeClass('error');

                };

                /* END WHAT’S YOUR NAME */


                /* WHAT’S YOUR NAME */

                if ($('#emailAdress').val()=="") {

                    $($('#emailAdress')).closest('.form_lab').addClass('error');
                    checkForm = false;

                }else{

                    $($('#emailAdress')).closest('.form_lab').removeClass('error');

                };

                /* END WHAT’S YOUR NAME */

                if (checkForm==true) {
                    $('#form .submit').addClass('loading');
                    setTimeout(function() {
                        $('#form .submit').removeClass('loading').addClass('valid');
                        setTimeout(function() {
                            $("form").submit();
                        }, 500);
                    }, 1000);
                } else {
                    $('#form .submit').addClass('error');
                    setTimeout(function() {
                        $('#form .submit').removeClass('error');
                    }, 1500);
                }
                

            })
            

        /* --- CHECK ---  */


    /* -------------------------------------- */
    /* ---------------- FORM ---------------- */
    /* -------------------------------------- */


});

