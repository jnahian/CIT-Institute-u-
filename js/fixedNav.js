$(document).ready(function(){
    $ww = $(window).width();
    if( $ww >= 767){
        $navOffest = $("nav").offset().top; 
        $crs = $('.naCrs').offset().top;
        $p = $('.crsBtn').offset().top;
        $q = $p-$crs;
        $d = $crs - $navOffest;
        $(window).scroll(function(){
            $scrollPos  = $(window).scrollTop();
            if( $scrollPos >= $d && $scrollPos <= $q ){
                $(".naCrs").addClass("crsFix");
            }
            else{
                $(".naCrs").removeClass("crsFix");
            }
        });
    }
});