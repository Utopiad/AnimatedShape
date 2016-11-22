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

    

});