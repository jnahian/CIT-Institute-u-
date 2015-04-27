<?php
	require_once('functions/function.php');
	$oPageContents->get_header();
	$oPageContents->get_nav(); 
?>
	<section>
		<div class="full" id="ceBanner">
			<div class="container">
                <h1 class="bnrHdr" id="link">communicative english</h1>
				<p class="bnrTxt">For outsourcing (CEO)</p>
			</div>
			<div class="container">
				<div class="bnrBdr"></div>
			</div>
		</div><!--container end-->
	</section>
	<!--banner part end-->
	<section class="comuEng">
		<div class="container">
			<div class="col-md-9 col-sm-6 cEng pd0">
				<p class="cengHtx"><strong>your chance to  </strong><span>fly high!</span></p>
				<p class="cengTxt1">First time in Bangladesh</p>
				<p class="cengTite">TOPICS</p>
				<p class="cengBody">Basic English, Communicative language Vocabulary, Writing Process, Listening Ability Speaking Style.</p>
				<p class="cengTite">DURATION</p>
				<p class="cengBody">2 months (16 Classes)</p>
				<p class="cengTite">DAY AND TIMES</p>
				<p class="cengBody">2 hours a day & 2 days a week.</p>
				<p class="cengTite">COURSE FEE</p>
				<p class="cengBody">6,000 Taka <del>12,000 Taka</del></p>
				<p id="dipBdr"></p>
			</div>
			<div class="col-md-3 col-sm-6 pd0">
				<img src="images/ce01.jpg" alt="">
			</div>
		</div>
</section>
<div class="container ptBdr"></div>
<?php 
	$oPageContents->get_part('partner_part.php');
	$oPageContents->get_footer();
?>
