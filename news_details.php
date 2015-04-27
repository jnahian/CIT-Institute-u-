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
    <div class="container prsMedia" id="prsMedia">
        
        <div class="col-sm-6">
            <p class="prsH1">
                10 Best women’s freelancers Achievement in outsourcing
            </p>
            <p class="prsB1">
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Etiam sit amet urna nec pede tristique volutpat. Etiam posuere felis nec arcu. Morbi elementum. Aenean ipsum diam, congue et, fermentum suscipit, placerat eu, elit.' Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores debitis cum, perferendis fugiat quisquam, fugit dicta earum inventore eos odit unde. Repellendus a blanditiis magnam velit atque tempora quaerat perferendis! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero repudiandae beatae dicta officiis delectus, perspiciatis animi, optio est modi sunt sed, sapiente? Repudiandae doloremque non, iste quod ad similique tempore assumenda eum laborum facere dicta molestiae distinctio at accusantium architecto saepe est rem unde, illo incidunt adipisci cum atque excepturi!
            </p>
        </div>
        <div class="col-sm-6 pd0">
            <img src="images/prsMedia01.jpg" alt="prsMedia01">
        </div>
    </div>    
</section>
<div class="container ptBdr"></div>
<?php 
$oPageContents->get_part('partner_part.php');
$oPageContents->get_footer();
?>

