<?php
	require_once('functions/function.php');
	$oPageContents->get_header();
	$oPageContents->get_nav(); 
?>	
	<section>
		<div class="full" id="prsBanner">
			<div class="container">
                <h1 class="bnrHdr" id="link">press & media</h1>
				<p class="bnrTxt">Creative IT in Media</p>
			</div>
			<div class="container">
				<div class="bnrBdr"></div>
			</div>
		</div>
		<!--container end-->
	</section>
	<!--banner part end-->
	<section>
		<div class="container prsMedia">
			<div class="col-md-3 col-sm-4 pd0">
				<img src="images/prsMedia01.jpg" alt="prsMedia01">
			</div>
			<div class="col-md-9 col-sm-8">
				<p class="prsH1">
					10 Best women’s freelancers Achievement in outsourcing
				</p>
				<p class="prsB1">
					Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Etiam sit amet urna nec pede tristique volutpat. Etiam posuere felis nec arcu. Morbi elementum. Aenean ipsum diam, congue et, fermentum suscipit, placerat eu, elit.'
				</p>
                <a class="btn02 marB10" href="news_details.php#prsMedia">Learn more <span class="fa fa-angle-right"></span></a>
			</div>
		</div>
		<div class="container prsMedia">
			<div class="col-md-3 col-sm-4 pd0">
				<img src="images/prsMedia02.jpg" alt="prsMedia02">
			</div>
			<div class="col-md-9 col-sm-8">
				<p class="prsH1">
					Creative IT-monthly Quiz Competition
				</p>
				<p class="prsB1">
					Bengali New Year occasion online quiz competition was organized by the Institute of Creative IT. Anyone can take part in competitions in the month-long winning tablet computer, mobailaphonasaha much. Award winners will be announced on May 4.
				</p>
                <a class="btn02 marB10" href="news_details.php#prsMedia">Learn more <span class="fa fa-angle-right"></span></a>
			</div>
		</div>
		<div class="container prsMedia marB20">
			<div class="col-md-3 col-sm-4 pd0">
				<img src="images/prsMedia01.jpg" alt="prsMedia01">
			</div>
			<div class="col-md-9 col-sm-8 marB20">
				<p class="prsH1">
					10 Best women’s freelancers Achievement in outsourcing
				</p>
				<p class="prsB1">
					Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Etiam sit amet urna nec pede tristique volutpat. Etiam posuere felis nec arcu. Morbi elementum. Aenean ipsum diam, congue et, fermentum suscipit, placerat eu, elit. In vehicula erat nec ante. Aliquam erat volutpat.
				</p>
                <a class="btn02 marB10" href="news_details.php#prsMedia">Learn more <span class="fa fa-angle-right"></span></a>
			</div>
		</div>
</section>
<div class="container ptBdr"></div>
<?php 
	$oPageContents->get_part('partner_part.php');
	$oPageContents->get_footer();
?>

