<?php
	require_once('functions/function.php');
	$oPageContents->get_header();
	$oPageContents->get_nav(); 
	$oPageContents->get_part('ofc_gal_det.php');
?>
<div class="container ptBdr"></div>
<?php
	$oPageContents->get_part('partner_part.php');
	$oPageContents->get_footer();
?>
