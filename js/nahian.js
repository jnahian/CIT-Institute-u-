$(document).ready(function(){
        
    $navOffest = $("nav.navBg").offset().top; 
	$(".row").height($("nav").outerHeight()); 
    $w = $(window).width();
	if( $w > 767){
        $(window).scroll(function(){
            $scrollPos  = $(window).scrollTop();
            if( $scrollPos >= $navOffest ){
                $("nav.navBg").addClass("navbar-fixed-top").css("margin-top","0");
                $(".navBg").css("background","rgba(0,0,0, 1)");
            }
            else{
                $("nav.navBg").removeClass("navbar-fixed-top");
                $(".navBg").css("background","rgba(0,0,0, 0.6)");
            }
        });
    }

	// Youtube Video
    
    /*$('a#video').click(function (){ 
        $vId = $(this).attr('href'); 
        $vlink = "https://www.youtube.com/embed/"+$vId+"?autoplay=1";
        //alert($vlink);
        $('.video iframe').attr('src', $vlink);
        
        $('.video').on('hidden.bs.modal', function(){
            $('.video iframe').attr('src', '');
        });
    });*/
    
    $('a#video').click(function(e){
        e.preventDefault();
        $vId = $(this).data('src');
        $vLink = "https://www.youtube.com/embed/"+$vId+"?autoplay=1&&rel=0";
//        alert($vLink);
        $('div.modal').show(500);
        $('iframe#mVideo').attr('src', $vLink);
    });
    $('div.modal button.close').click(function(){
        $(this).parents('div.modal').hide(500);
        $('iframe#mVideo').attr('src', '');
    });
    
});
$(window).load(function(){
	$("#loader").fadeOut();
    $('#popup').delay(2000).fadeIn(500);

    $('#popup .popupbox button').click(function(){
        $(this).parents('#popup').fadeOut(300); 
    });
});

new WOW().init();
$(document).ready(function () {
    $('.partners, .slick').slick({
		slidesToShow: 8,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 2000,
		responsive: [
		    {
		      breakpoint: 768,
		      settings: {
		        slidesToShow: 4,
		        slidesToScroll: 1
		      }
		    },
		    {
		      breakpoint: 520,
		      settings: {
		        slidesToShow: 3,
		        slidesToScroll: 1
		      }
		    },
		    {
		      breakpoint: 320,
		      settings: {
		        slidesToShow: 2,
		        slidesToScroll: 1
		      }
		    }
		]
	});
	$('#Container').mixItUp();
    $('#port, #port1').rebox({
        selector: 'a'
    });

});
$(function () {
	$('[data-toggle="tooltip"]').tooltip()
});
$(function () {
	$('.superbox').SuperBox();
});

//GOOGLE MAP CODES
$(function (){
    var myCenter=new google.maps.LatLng(23.7412777,90.3827105);
    var marker;

    function initialize()
    {
        var mapProp = {
            center:myCenter,
            zoom:15,
            scrollwheel: false,
            mapTypeId:google.maps.MapTypeId.ROADMAP
        };

        var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

        var marker=new google.maps.Marker({
            position:myCenter
        });
//        var infowindow = new google.maps.InfoWindow({
//            position: myCenter,
//            content: '<img src="images/map-logo.png">'
//        });
//
//        infowindow.open(map,marker);

        marker.setMap(map);
    }

    google.maps.event.addDomListener(window, 'load', initialize);
});
$(document).ready(function(){
    $('.sleekslider').sleekslider({
        thumbs: ['../images/banner.jpg', '../images/banner1.jpg', '../images/banner2.jpg','../images/banner3.jpg'],
        labels:['Slide 1', 'Slide 2', 'Slide 3', 'Slide 4'],
        speed: 1000
    });
});















