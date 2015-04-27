
<?php
	require_once('functions/function.php');
	$oPageContents->get_header();
	$oPageContents->get_nav(); 
?>	
	<section>
		<div class="full" id="placementBanner">
			<div class="container">
                <h1 class="bnrHdr" id="link">student's placements</h1>
				<p class="bnrTxt">Achievement & Awards of Creative IT Students</p>
			</div>
			<div class="container">
				<div class="bnrBdr"></div>
			</div>
		</div>
		<!--container end-->
	</section>
	<!--banner part end-->
	<section class="stuPlMnt">
		<div class="container">
			<div class="col-md-9 col-sm-6 pd0">
				<p class="stWrksH1">
					Our students are placed with some of the top online marketplace, production house, advertising agency, & corporate organizations in the industry:
				</p>
			</div>
			<div class="col-md-3 col-sm-6 pd0">
				<img src="images/stu-placement/placement01.jpg" alt="placement01">
			</div>
		</div>
		<div class="container marB20">
			<p class="cengHtx pdB20"><strong>ONLINE </strong><span>PLACEMENTS</span>
			</p>
			<div class="col-md-12 pd0">
				<div class="col-md-3 col-sm-3 col-xs-6 pd0 placement">
                    <a target="_blank" href="http://www.envato.com/">
						<img src="images/stu-placement/pl-logos_08.jpg" alt="" class="img-responsive">
					</a>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-6 pd0 placement">
                    <a target="_blank" href="http://www.odesk.com/">
						<img src="images/stu-placement/pl-logos_09.jpg" alt="" class="img-responsive">
					</a>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-6 pd0 placement">
                    <a target="_blank" href="http://www.elance.com/">
						<img src="images/stu-placement/pl-logos_10.jpg" alt="" class="img-responsive">
					</a>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-6 pd0 placement">
                    <a target="_blank" href="http://www.freelancer.com/">
						<img src="images/stu-placement/pl-logos_11.jpg" alt="" class="img-responsive">
					</a>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-6 pd0 placement">
                    <a target="_blank" href="http://99designs.com/">
						<img src="images/stu-placement/pl-logos_14.jpg" alt="" class="img-responsive">
					</a>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-6 pd0 placement">
                    <a target="_blank" href="http://peopleperhour.com/">
						<img src="images/stu-placement/pl-logos_15.jpg" alt="" class="img-responsive">
					</a>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-6 pd0 placement">
                    <a target="_blank" href="http://creativedeviser.com/">
						<img src="images/stu-placement/pl-logos_16.jpg" alt="" class="img-responsive">
					</a>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-6 pd0 placement">
                    <a target="_blank" href="http://genesisblogs.com/">
						<img src="images/stu-placement/pl-logos_17.jpg" alt="" class="img-responsive">
					</a>
				</div>
			</div>
		</div>
		<div class="container marB80">
			<p class="cengHtx pdB20"><strong>job  </strong><span>PLACEMENTS</span>
			</p>
			<div class="col-md-12 pd0">
				<div class="col-md-3 col-sm-3 col-xs-6 pd0 placement">
                    <a target="_blank" href="http://www.ntvbd.com/">
						<img src="images/stu-placement/pl-logos_26.jpg" alt="" class="img-responsive">
					</a>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-6 pd0 placement">
					<a href="#">
						<img src="images/stu-placement/pl-logos_27.jpg" alt="" class="img-responsive">
					</a>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-6 pd0 placement">
                    <a target="_blank" href="http://banglavision.tv/">
						<img src="images/stu-placement/pl-logos_28.jpg" alt="" class="img-responsive">
					</a>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-6 pd0 placement">
                    <a target="_blank" href="http://independent24.tv/">
						<img src="images/stu-placement/pl-logos_29.jpg" alt="" class="img-responsive">
					</a>
				</div>
			</div>
		</div>
</section>
<div class="container ptBdr"></div>
<?php 
	$oPageContents->get_part('partner_part.php');
	$oPageContents->get_footer();
?>