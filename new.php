<?php
	require_once('functions/function.php');
	$oPageContents->get_header();
	$oPageContents->get_nav(); 
?>
	<section>
		<div class="full" id="dipBanner">
			<div class="container">
                <h1 class="bnrHdr" id="link">ONE YEAR DIPLOMA</h1>
				<p class="bnrTxt">12 Months extension course program</p>
			</div>
				<div class="container">
					<div class="bnrBdr"></div>
				</div>
		</div><!--container end-->
	</section> <!--banner part end-->
<?php 
	$oPageContents->get_part('partner_part.php');
	$oPageContents->get_footer();
?>