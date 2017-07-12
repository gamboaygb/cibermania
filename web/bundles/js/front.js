/**
 * Created by gamboa on 25/06/17.
 */

(function($) {
    /*sidebar*/
    if(localStorage.getItem("sidenav")=="open"){
        $('.sidenav').css({'width':'20rem'});
        $('.main').css({'margin-left':'20rem'});
    }
   $("#opennav").click(function () {
       $(this).css({'visibility':'hidden'});
       $('.sidenav').css({'width':'20rem'});
       $('.main').css({'margin-left':'20rem'});
       localStorage.setItem("sidenav", "open");
   });

   $('.closebtn').click(function () {
       $('#opennav').css({'visibility':'visible'});
       $('.sidenav').css({'width':'0rem'});
       $('.main').css({'margin-left':'0rem'});
       localStorage.removeItem("sidenav");
   });

   /*animate post*/

    $(window).ready(function() {
        $('.post-module').hover(function() {
            $(this).find('.description').stop().animate({
                height: "toggle",
                opacity: "toggle"
            }, 300);
        });

        /*Hover efect to each one*/
        $('.post-content .description').each(function () {
            console.log(this);
            $(this).hover(
                function () {
                    $(this).addClass('show-content')
                },
                function () {
                    $(this).removeClass('show-content');
                }

            );
        });

        /*share icon*/
        $('.card__share > a').on('click', function(e){
            e.preventDefault() // prevent default action - hash doesn't appear in url
            $(this).parent().find( 'div' ).toggleClass( 'card__social--active' );
            $(this).toggleClass('share-expanded');
        });
    });

    

})(jQuery);
