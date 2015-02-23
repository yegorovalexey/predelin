function mute_head_video(btn){
	var muted = true;
	if($("video").prop('muted')){
		muted = false;
        $(btn).html("ЗВУК ВЫКЛ");
	}else{
        $(btn).html("ЗВУК ВКЛ");
    }
	$("video").prop('muted', muted); 
}

function scrollTopage_start(){
    $.scrollTo("#page_start",1000);
}


$(document).ready(function() {
    $(".fancybox").fancybox();

    /*var feed = new Instafeed({
        get: 'tagged',
        tagName: 'andreypredelin',
        clientId: ' 	4a355b525f874ae3ad2088254e83ed0c'
     userId:1485681255
    });*/
    var feed = new Instafeed({
        get: 'user',
        userId: 256184017,
        clientId: ' 	4a355b525f874ae3ad2088254e83ed0c',
        accessToken: '1485681255.467ede5.bc5b3e9121034b358e422a1179eb52b0',
        template: '<div class="np item"><a class="fancybox_insta" rel="group_insta" href="{{link}}"><img class="insta_img"  src="{{image}}"></a></div>',
        after: function() {
            $(".fancybox_insta").fancybox();
			$(".insta_img").each(function(){
				$(this).attr("src","http://" + $(this).attr("src").replace("//",""));
			});
        }
    });
    feed.run();

    $("#main-menu").sticky({topSpacing:0});
});



