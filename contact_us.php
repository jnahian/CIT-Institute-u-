<?php
	require_once('functions/function.php');
	$oPageContents->get_header();
	$oPageContents->get_nav(); 
?>
	<section>
		<div class="full" id="contactBanner">
			<div class="container">
                <h1 class="bnrHdr" id="link">Contact Us</h1>
				<p class="bnrTxt">Questions? Send us an email or give us a call</p>
			</div>
			<div class="container">
				<div class="bnrBdr"></div>
			</div>
		</div>
		<!--container end-->
	</section>
	<!--banner part end-->
	<section class="contact">
		<div class="container marT20 marB20">
			<div class="col-md-3 col-sm-6 wow fadeInUp" data-nahian-offset="200" data-nahian-delay=".2s">
				<p class="contH1">Address</p>
				<p class="contH2"><span class="fa fa-map-marker"></span>
				</p>
				<p class="contH3">
					Creative IT Institute
				</p>
				<p class="contB1">
					Momtaz Plaza (4th floor)
					<br>(Opposite of Labaid Hospital)
					<br>House#7, Road#4
					<br>Dhanmondi, Dhaka
					<br>Bangladesh
				</p>
			</div>
			<div class="col-md-3 col-sm-6 wow fadeInUp" data-nahian-offset="200" data-nahian-delay=".4s">
				<p class="contH1">office hours & visits</p>
				<p class="contH2"><span class="fa fa-clock-o"></span>
				</p>
				<p class="contH3">
					SATURDAY to FRIDAY
					<br>
					<span>9AM - 6PM</span>
				</p>
				<p class="contH2"><span class="fa fa-male"></span>
				</p>
				<p class="contB1">
					You can visit the institute anytime during office hours.
					<br>CREATIVE IT reception is on the Momtaz Plaza (4th floor) Dhaka</p>
			</div>
			<div class="col-md-3 col-sm-6 wow fadeInUp" data-nahian-offset="200" data-nahian-delay=".6s">
				<p class="contH1">SPEAK TO CREATIVE IT STAFF</p>
				<p class="contH2"><span class="fa fa-envelope-o"></span>
				</p>
				<p class="contH3">
					email
					<br>
					<a href="#">info@creativeit-inst.com</a>
				</p>
				<p class="contH2"><span class="fa fa-phone"></span>
				</p>
				<p class="contH3">
					TELEPHONE
					<br>
                    <span> +880 1624666000 <br> +880 1624888444 <br>+880 1625555444</span>
				</p>
			</div>
			<div class="col-md-3 col-sm-6 wow fadeInUp" data-nahian-offset="200" data-nahian-delay=".8s">
				<p class="contH1">follow</p>
				<p class="contH2"><span class="fa fa-facebook"></span>
				</p>
				<p class="contH3">
					facebook
					<br>
                    <a href="https://www.facebook.com/CreativeBangladesh" target="_blank">Facebook.com/CreativeBangladesh</a>
				</p>
				<p class="contH2"><span class="fa fa-twitter"></span>
				</p>
				<p class="contH3">
					twitter
					<br>
                    <a href="https://twitter.com/Creative_IT_Ltd" target="_blank">Twitter.com/Creative_IT_Ltd</a>
				</p>
				<p class="contH2"><span class="fa fa-youtube"></span>
				</p>
				<p class="contH3">
					youtube
					<br>
                    <a href="https://www.youtube.com/channel/UCzP9m2bZE9x4t9eQoSZhTlg" target="_blank">Youtube.com/Creative IT Institute</a>
				</p>
			</div>
		</div>
		<!--container end-->
		<div class="container marB20">
			<p class="contH1 text-center">We’d love to hear from you! Send us a message using the from below.</p>
			<div class="col-md-12 cForm pd0">
				<div class="col-md-6 marB20 wow fadeInLeft" data-nahian-offset="200" data-nahian-delay="0">
					<input type="text" placeholder="NAME">
					<input type="email" placeholder="EMAIL">
					<input type="text" placeholder="SUBJECT">
				</div>
				<div class="col-md-6 wow fadeInRight" data-nahian-offset="200" data-nahian-delay=".4s">
					<textarea name="" id="" placeholder="MESSAGE"></textarea>
				</div>
			</div>
			<div class="col-md-12 marT20 marB20 wow lightSpeedIn" data-nahian-offset="200">
				<input class="btn btn-danger bgBd070e pull-right" type="submit" value="SEND MESSAGE">
			</div>
		</div>
		<!--container end-->
		<div class="container marB20">
            <div id="googleMap"></div>
<!--			<iframe class="marB20" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3652.170097090439!2d90.38258999999998!3d23.741313000000016!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8b7a55cd36f%3A0xfcc5b021faff43ea!2sCreative+I+T+Institute+of+Bangladesh!5e0!3m2!1sen!2sbd!4v1420447851118" width="100%" height="450" frameborder="0" style="border:0"></iframe>-->
		</div>
</section>
<div class="container ptBdr"></div>
<?php 
	$oPageContents->get_part('partner_part.php');
	$oPageContents->get_footer();
?>