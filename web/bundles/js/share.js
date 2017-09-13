/**
 * Created by gamboa on 25/06/17.
 */

(function($) {
	var share={
	        share_face:function shareFace(element){
            $.ajax({
                method: "GET",
                url: location.pathname+"ajax/post-info/"+element.attr('data-id'),
                dataType: 'json',
                success: function(data)
                {
                    if(data.hasOwnProperty("response") && data.response === "success")
                    {
                        if(data.hasOwnProperty("post"))
                        {
                            //http://stackoverflow.com/questions/3710204/how-to-check-if-a-string-is-a-valid-json-string-in-javascript-without-using-try/3710226
                            if (/^[\],:{}\s]*$/.test(data.post.replace(/\\["\\\/bfnrtu]/g, '@').
                                replace(/"[^"\\\n\r]*"|true|false|null|-?\d+(?:\.\d*)?(?:[eE][+\-]?\d+)?/g, ']').
                                replace(/(?:^|:|,)(?:\s*\[)+/g, '')))
                            {
                                var post = JSON.parse(data.post);
                                /*var div=$('<div/>').addClass('share_face')
                                .css({'position':'absolute','top':'0'});
                                var row=$('<div/>').addClass('row').appendTo(div);
                                var uno=$('<div/>').addClass('col-xs-12 col-sm-12 col-md-4').appendTo(row);
                                var dos=$('<div/>').addClass('col-xs-12 col-sm-12 col-md-8').appendTo(row);
                                $('<img/>').addClass('img-thumbnail').attr({'width':'100','height':'100','src':'web/bundles/images/post/'+post[0].imgPost}).appendTo(uno);
                                $('<a/>').attr({'href':location.pathname+"/"+post[0].slug}).text(post[0].title).appendTo(uno);
                                $('<p>').text(post[0].shortContent).appendTo(dos);*/
                                
                                console.log(post);
                                
                            }
                            else
                            {
                                console.log("Json no válido");
                            }
                        }
                        else
                        {
                            console.log("NO existe ningun post");
                        }
                    }
                },
                error: function(jqXHR, exception)
                {
                    if(jqXHR.status === 405)
                    {
                        console.error("metodo no permitido!");
                    }
                }
            });
	    }
	};
	
	
	
	$('.facebook').click(function(event){
		console.log("viamos");
	    share.share_face($(this));
	});


})(jQuery);
