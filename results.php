<?php
	require_once('functions/function.php');
	$oPageContents->get_header();
	$oPageContents->get_nav(); 
?>
<div class="container ptBdr"></div>
<?php
	$oPageContents->get_part('results_page.php');
	$oPageContents->get_footer();
?>