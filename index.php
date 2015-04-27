<?php
	require_once('functions/function.php');
	$oPageContents->get_header();
?>
<section id="loader">
    <div id="squircle">
        <div id="outer-squircle"></div>
        <div id="inner-squircle"></div>
        <div id="inner-squircle2"></div>
        <p class="text-center">Loading</p>
    </div>
</section>
<section id="popup">
    <div class="popupbox">
       <button><span class="fa fa-close"></span></button>
        <a href="seminer_details.php">
            <img class="img-responsive" src="images/procourse.jpg" alt="">
        </a>
    </div>
</section>
<?php
	$oPageContents->get_nav(); 
	$oPageContents->get_banner();
	$oPageContents->get_part('highlight_part.php');
	$oPageContents->get_part('home_body.php');
	$oPageContents->get_part('student_part.php');
	$oPageContents->get_part('pearson_part.php');
	$oPageContents->get_part('partner_part.php');
	$oPageContents->get_footer();
?>
