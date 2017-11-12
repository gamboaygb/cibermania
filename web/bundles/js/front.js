/**
 * Created by gamboa on 25/06/17.
 */

(function($) {
	var card_home=$('.card-home');

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
            initialize: function() {
                this.login_in();
                this.out();
                this.pagination();

            },
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
    		},
            pagination:function () {
                var num = card_home.length;

                console.log(card_home);

                if(num<5){
                    $('.paginate').hide();
                }else{
                    $('.paginate').show();
                    var paginas = num / 4;
                    paginas = Math.trunc(paginas);
                    var modulo = num % 4;
                    if (modulo > 0){
                        paginas++;
                    }

                    var html = "";
                    for (var i = 1; i <= paginas; i++) {

                            html+="<option value='"+i+"'>"+i+"</option>";

                    }
                    $('#paginador option').remove()
                    $('#paginador').append(html);
                }

                $('.change-paginate').click(function(event) {
                    var aux = $('#paginador').val();
                    var ultimo = $('#paginador option:last-child').val();
                    aux = parseInt(aux);
                    ultimo = parseInt(ultimo);

                    switch ($(this).attr('id')){
                        case 'first':
                            if(aux != 1){
                                mostrar(1);
                                //$("#paginador option[value='"+(aux-1)+"']").prop("selected",true);
                            }
                            break;
                        case 'anterior':
                            if(aux != 1){
                                mostrar(aux-1);
                               // $("#paginador option[value='"+(aux-1)+"']").prop("selected",true);
                            }
                            break;
                        case 'siguiente':
                            if(aux != ultimo){
                                mostrar(aux+1);
                                //$("#paginador option[value='"+(aux+1)+"']").prop("selected",true);
                            }
                            break;
                        case 'fin':
                            if(aux != ultimo){
                                mostrar(ultimo);
                            }
                            break;
                    }
                });


                $('#paginador').change(function(event) {
                    mostrar($(this).val());
                });


                function mostrar(pagina){
                    $('.show-card').each(function () {
                        $(this).removeClass('show-card').addClass('hide-card');
                    });
                    var seleccionado = $('#paginador').val();
                    var j = 0;

                    for (var i = ((pagina-1)*3); i < (pagina*3); i++) {
                        $(card_home[i]).addClass('show-card').removeClass('hide-card');

                        j++;
                    }

                    $("#paginador option[value='"+pagina+"']").prop("selected",true);

                }
            }


    	}

        cibermania.initialize();
    
    
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

/*pagination
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
