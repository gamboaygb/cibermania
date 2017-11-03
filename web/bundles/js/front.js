/**
 * Created by gamboa on 25/06/17.
 */

(function($) {
	/*temporali*/

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

 /*   $('.modal').css({'background':'rgba(0, 0, 0, 0.6)','opacity':'1'}).show();
    $('.modal').css({'background':'rgba(0, 0, 0, 0.6)','opacity':'1'}).show();
    $('.btn-success').click(function(){
	$('.modal').hide(500);
    });*/

    $(window).ready(function() {
    	
    	
    	var cibermania={
    		login_in:function(){
    			$('.login-in').click(function(){
    					console.log($(this).attr('data-close'));
    				if($(this).attr('data-close')!=0){
    					$('.sign-in').show(500);
    					$(this).attr('data-close',0);
    					$(this).text('Cerrar');
    			     }else{
    			     	$('.sign-in').hide(500);
    			     	$(this).attr('data-close',1);
    					$(this).text('Acceso');
    			     }
    			
    				
    			});
    		},
    		out:function(){
    			$('.logout').click(function(){
    				$('.main').css({'margin-left':'0rem'});
       				localStorage.removeItem("sidenav");
    			});
    		}
    	}
    
    
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
        
        
            cibermania.login_in();
            cibermania.out();

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

/*pagination*/
    if($('.pagination-index').length>0){
        var active;
        $('.pagination-index li').each(function (index) {
            if($(this).hasClass('active')){
                active=this;
            }
           $(this).bind("click",function () {

               if($(this).attr('id')=='first'){
                    if(parseInt($(active).first().text())>1){
                        $(active).removeClass('active');
                        $(active).prev().addClass('active');
                        active=$(active).prev()[0];
                        loading(active,'prev');
                    }else{
                        $(this).addClass('disabled');
                    }
               }else if($(this).attr('id')=='last'){
                   if(!$(active).next().is("#last")){
                       $(active).removeClass('active');
                       $(active).next().addClass('active');
                       active=$(active).next()[0];
                       loading(active,'next');
                   }else {
                       $(this).addClass('disabled');
                   }
               }else{
               
               		prev= parseInt($('.pagination-index .active').first().text());
               		current=parseInt($(this).first().text());
               		if(current>prev){
               			loading($(this),'next');
               			$(this).prev().removeClass('active');
               		}else if(current<prev){
               			loading($(this),'prev');
               			$(this).next().removeClass('active');
               		}
               		$(this).addClass('active');
                   
               }


               if(parseInt($(active).first().text())>1){
                   $('#first').removeClass('disabled');
               }else {
                   $('#first').addClass('disabled');
               }
               if($(active).next().is("#last")){
                   $('#last').addClass('disabled');
               }else {
                   $('#last').removeClass('disabled');
               }
           })
        });

        function loading (element,action=null) {
            $('.loading').addClass('overlay').toggle();
            nextpage=$('.show-card');
            
            if(action=='next'){
            	$(nextpage[0]).removeClass('show-card').addClass('hide-card');
            	if($(nextpage[2]).next().length>0){
            		$(nextpage[2]).next().removeClass('hide-card').addClass('show-card');
            	}
            }else if(action=='prev'){
            	$(nextpage[2]).removeClass('show-card').addClass('hide-card');
            	if($(nextpage[0]).prev().length>0){
            		$(nextpage[0]).prev().removeClass('hide-card').addClass('show-card');
            	}
            
            }
            
            

            setTimeout(function () {
                $('.loading').hide().removeClass('overlay');
            },1000)
        }
    }


    /*upload file profile*/


    var fileInput  = $( ".input-file" ),
        button     = $( ".input-file-trigger" ),
        the_return = $(".file-return");

    $(button).bind( "keydown", function( event ) {
        if ( event.keyCode == 13 || event.keyCode == 32 ) {
            $(fileInput).focus();
        }
    });
    $(button).bind( "click", function( event ) {
        $(fileInput).bind.focus();
        return false;
    });
    $(fileInput).bind( "change", function( event ) {
        $(the_return).val($(this).val());
    });



})(jQuery);
