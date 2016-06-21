$(document).ready(function() {

    $('.nav__button').click(function(){
      if ($(this).attr('src') === 'assets/images/nav.png'){
        $(this).attr("src", 'assets/images/nav_close.png');
      } else {
        $(this).attr("src", 'assets/images/nav.png');
      }

      $('body').toggleClass('nav-visible');
    });

    $('.project').mouseenter(function(){
    	$(this).addClass('desc--visible');
    });

    $('.project').mouseleave(function(){
    	$(this).removeClass('desc--visible');
    });

  });