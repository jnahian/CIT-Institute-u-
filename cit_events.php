<?php
	require_once('functions/function.php');
	$oPageContents->get_header();
	$oPageContents->get_nav(); 
?>
	<section>
		<div class="full" id="evntsBanner">
			<div class="container">
                <h1 class="bnrHdr" id="link">creative it event</h1>
				<p class="bnrTxt">Event of Creative IT Institute</p>
			</div>
			<div class="container">
				<div class="bnrBdr"></div>
			</div>
		</div>
		<!--container end-->
	</section>
	<!--banner part end-->
	<section>
		<div class="container" id="citEvents">
			<p class="evntHtx"><strong>upcoming </strong><span>event</span>
			</p>
			<div class="col-md-3 col-sm-6 pd0 text-center discount">
				<h3>December 2014</h3>
				<h4>December</h4>
				<h1>25</h1>
				<p>Announced on the occasion of the Christmas holidays</p>
			</div>
			<!--discount end-->
			<div class="col-md-3 col-sm-6 pd0">
				<img src="images/cit-events/event01.jpg" alt="event01" class="img-responsive">
			</div>
			<div class="col-md-3 col-sm-6 pd0 text-center discount">
				<h3>January 2015</h3>
				<h4>January</h4>
				<h1>01</h1>
				<p>Getting cakes utsab with poor and impoverished children</p>
			</div>
			<!--discount end-->
			<div class="col-md-3 col-sm-6 pd0">
				<img src="images/cit-events/event02.jpg" alt="event02" class="img-responsive">
			</div>
		</div>
		<div class="container">
			<div class="evntHtx"><strong>previous </strong><span>event gallery</span>
			</div>
		</div>
		<div class="container superbox">
		
            <div id="port1" class="gallery">
                <a class="col-md-3 col-sm-4 col-xs-6 pd0" href="images/cit-events/prEv01.jpg">
                    <img class="img-responsive" src="images/cit-events/prEv01.jpg" />
                </a>
                <a class="col-md-3 col-sm-4 col-xs-6 pd0" href="images/cit-events/prEv02.jpg">
                    <img class="img-responsive" src="images/cit-events/prEv02.jpg" />
                </a>
                <a class="col-md-3 col-sm-4 col-xs-6 pd0" href="images/cit-events/prEv03.jpg">
                    <img class="img-responsive" src="images/cit-events/prEv03.jpg" />
                </a>
                <a class="col-md-3 col-sm-4 col-xs-6 pd0" href="images/cit-events/prEv04.jpg">
                    <img class="img-responsive" src="images/cit-events/prEv04.jpg" />
                </a>
                <a class="col-md-3 col-sm-4 col-xs-6 pd0" href="images/cit-events/prEv05.jpg">
                    <img class="img-responsive" src="images/cit-events/prEv05.jpg" />
                </a>
                <a class="col-md-3 col-sm-4 col-xs-6 pd0" href="images/cit-events/prEv06.jpg">
                    <img class="img-responsive" src="images/cit-events/prEv06.jpg" />
                </a>
                <a class="col-md-3 col-sm-4 col-xs-6 pd0" href="images/cit-events/prEv07.jpg">
                    <img class="img-responsive" src="images/cit-events/prEv07.jpg" />
                </a>
                <a class="col-md-3 col-sm-4 col-xs-6 pd0" href="images/cit-events/prEv08.jpg">
                    <img class="img-responsive" src="images/cit-events/prEv08.jpg" />
                </a>
            </div>
			<div class="superbox-float"></div>
		</div>
</section>
<div class="container ptBdr"></div>
<?php 
	$oPageContents->get_part('partner_part.php');
	$oPageContents->get_footer();
?>
