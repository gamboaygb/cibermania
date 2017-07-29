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

        $('.food').hover(
            function () {
                $(this).find('.recipe').show(500);
                $(this).find('.content').css('left','154px');
            },
            function () {
                $(this).find('.recipe').hide(500);
                $(this).find('.content').css('left','22px');
            }
        );

    });


    if ($('#back-to-top').length) {
        var scrollTrigger = 100, // px
            backToTop = function () {
                var scrollTop = $(window).scrollTop();
                if (scrollTop > scrollTrigger) {
                    $('#back-to-top').addClass('show');
                } else {
                    $('#back-to-top').removeClass('show');
                }
            };
        backToTop();
        $(window).on('scroll', function () {
            backToTop();
        });
        $('#back-to-top').on('click', function (e) {
            e.preventDefault();
            $('html,body').animate({
                scrollTop: 0
            }, 700);
        });
    }


    if($('.pagination-index').length>0){
        $('.pagination-index li').each(function (index) {
            if($(this).hasClass('active')){
                var selected=index;
            }
           $(this).bind("click",function () {
               $(this).addClass('active');
              var num=parseInt($(this).first().text())*3;

               $('.loading').addClass('overlay').toggle();

               $('.card-home').each(function (index) {
                   if(index<(num-3) || index>num){
                       $(this).removeClass('show').addClass('hide');
                   }else{

                       $(this).removeClass('hide').addClass('show');
                   }
               });

               setTimeout(function () {
                   $('.loading').hide().removeClass('overlay');
               },1000)
           })
        });
    }

    

})(jQuery);
