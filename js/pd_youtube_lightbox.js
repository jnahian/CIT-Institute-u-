// JavaScript Document
$(document).ready(function(e) {
	openInLightBox = function(that){
		$url = $(that).next("iframe").attr('src');
		if($url.match(/\?/))$url += "&autoplay=1";
		else $url += "?autoplay=1";
				
		$ph = $(window).height();
		$pw = $(window).width();
		
		$h = $ph - ($ph*0.10);
		$w = $pw - ($pw*0.10);
		
		$mt = ($ph - $h)/2;
		$ml = ($pw - $w)/2;
		
		$('.pd-youtube-lightbox').append('<iframe style="margin:'+$mt+'px 0 0 '+$ml+'px; width:'+$w+'px; height:'+$h+'px"  src="'+$url+'" ></iframe>');
		$('.pd-youtube-backface').fadeIn();
		$('.pd-youtube-lightbox').fadeIn();
	}
	
    $('iframe').each(function(index, element) {
		$h = $(this).height()+2;
		$w = $(this).width()+2;
        $(this).parent().prepend('<div class="pd-youtube-mask" style="width:'+$w+'px; height:'+$h+'px; " onclick="openInLightBox(this)"></div>');
    });
	$('.pd-youtube-lightbox').click(function(){
		$('.pd-youtube-lightbox iframe').remove();
		$('.pd-youtube-backface').fadeOut();
		$('.pd-youtube-lightbox').fadeOut();
	});
	
});