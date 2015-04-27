        <section>
            <div class="full footerTBg">
                <div class="container pd0">
                    <div class="col-md-4 col-sm-4 footerCourses wow bounceInLeft" data-nahian-delay=".3s">
                        <p>COURSES</p>
                        <ul class="col-sm-6 pd0 pull-left">
                            <li><a href="graphics_details.php#link">graphics design</a>
                            </li>
                            <li><a href="webdesign_details.php#link">web design</a>
                            </li>
                            <li><a href="webdevelopment_details.php#link">web development</a>
                            </li>
                            <li><a href="seo_details.php#link">seo</a>
                            </li>
                            <li><a href="emailmarket_details.php#link">email marketing</a>
                            </li>
                            <li><a href="tvcommerce_details.php#link">tv commercial</a>
                            </li>
                            <li><a href="archi_details.php#link">ARCHITECTURAL <br> &nbsp;&nbsp;&nbsp;&nbsp; VISUALIZATION</a>
                            </li>
                        </ul>
                        <ul class="col-sm-6 pd0 pull-right">
                            <li><a href="3d_details.php#link">3d animation</a>
                            </li>
                            <li><a href="apps_details.php#link">app development</a>
                            </li>
                            <li><a href="ce_details.php#link">communicative english</a>
                            </li>
                            <li><a href="ccna_details.php#link">ccna</a>
                            </li>
                            <li><a href="opnet_details.php#link">opnet</a>
                            </li>
                            <li><a href="autocad_details.php#link">Architectual Cad</a>
                            </li>
                        </ul>
                    </div><!--footerCourses end-->
                    <div class="col-md-4 col-sm-4 pd0 footerLogo text-center wow bounceInUp" data-nahian-delay=".1s">
                        <a href="index.php">
                            <img src="images/footer-logo.png" alt="">
                            <p>creative it institute</p>
                        </a>
                        <a href="#">
                            <img src="images/build_ur_career.png" alt="">
                        </a>
                        <ul class="list-inline marT10">
                            <li data-toggle="tooltip" data-placement="top" title="Facebook" class="wow flipInY" data-nahian-delay=".3s" data-nahian-offset="100">
                                <a href="https://www.facebook.com/CreativeBangladesh" target="_blank">
                                    <span class="fa fa-facebook-square"></span>
                                </a>
                            </li>
                            <li data-toggle="tooltip" data-placement="top" title="Twitter" class="wow flipInY" data-nahian-delay=".4s" data-nahian-offset="100">
                                <a href="https://twitter.com/Creative_IT_Ltd" target="_blank">
                                    <span class="fa fa-twitter-square"></span>
                                </a>
                            </li>
                            <li data-toggle="tooltip" data-placement="top" title="Google+" class="wow flipInY" data-nahian-delay=".5s" data-nahian-offset="100">
                                <a href="#" target="">
                                    <span class="fa fa-google-plus-square"></span>
                                </a>
                            </li>
                            <li data-toggle="tooltip" data-placement="top" title="LinkedIn" class="wow flipInY" data-nahian-delay=".6s" data-nahian-offset="100">
                                <a href="#">
                                    <span class="fa fa-linkedin-square"></span>
                                </a>
                            </li>
                        </ul>
                        <p>Copyright ©2005 Creative IT Institute. All Rights Reserved.</p>
                    </div><!--footerLogo end-->
                    <div class="col-md-4 col-sm-4 footerAddress wow bounceInRight" data-nahian-delay=".5s">
                        <p>address</p>
                        <ul class="col-sm-6 col-xs-6 pd0 pull-left">
                            <li>Momtaz Plaza (4th Floor)</li>
                            <li>House#7, Road#4, Dhanmondi</li>
                            <li>Dhaka-1205. Bangladesh</li>
                        </ul>
                        <ul class="col-sm-6 col-xs-6 pd0 pull-right">
<!--                            <li><span>P : </span> +880 1624666000</li>-->
                            <li><span>M : </span>  +880 1624666000 <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+880 1624888444 <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+880 1625555444
                            </li>
                            <li><span>E : </span> support@creativeit-inst.com</li>
                        </ul>
                    </div><!--footerAddress end-->
                </div><!--container end-->
            </div>
            <div class="full footerBtm">
                <div class="container text-center">
                    <p>
                        <i class="fa fa-phone"></i>
                        Call Us : <span> +880 1624666000, +880 1624888444 </span> (9am - 7pm Sat-Fri)
                    </p>
                    <p>
                        (If we miss your call, we'll call you back)
                    </p>
                </div>
            </div>
        </section>
        <a id="scrollTop" href="#">
            <img class="img-responsive" src="images/up.png" alt="">
        </a>
       <!-- <script src="../js/pd-youtube-lightbox.js" type="text/javascript"></script>-->
        <script>
        (function($){
            $(document).ready(function(){
                $('form').validate({
                    callbacks : {
                        ajax_success : function(data){
                            $(window.send_form).find('*:visible').val('');
                            sweetAlert("Success", "Thanks!", "success");
                        }
                    }
                });
            });
        }(jQuery))
    </script>
    <script>
        $(document).delegate('*[data-toggle="lightbox"]', 'click', function(event) { event.preventDefault(); $(this).ekkoLightbox(); }); 
    </script>
    </body>
</html>