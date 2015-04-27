<?php
	require_once('functions/function.php');
	$oPageContents->get_header();
	$oPageContents->get_nav(); 
?>
	<section>
		<div class="full" id="fotBanner">
			<div class="container">
                <h1 class="bnrHdr" id="link">free Online Tutorials</h1>
				<p class="bnrTxt">Class tutorials created by creative IT Institute</p>
			</div>
			<div class="container bnr">
				<div class="bnrBdr"></div>
			</div>
		</div><!--container end-->
	</section>
	<!--banner part end-->
	<section>
		<div class="container marB20">
			<p class="evntHtx"><b>GRAPHIC</b>  <span>DESIGN</span>
			</p>
			<p class="freeTutTxt">PART - 1</p>
			<div class="tGraphics ">
				<div class="col-md-3">
                    <a href="" id="video" data-src="lR6sUcO02aA"> 
                        <img src="images/tutorial/t1.jpg" alt="">
					</a>
				</div>
                <div class="col-md-3">
                    <a href="" id="video" data-src="JpueWOdzmhE">
                        <img src="images/tutorial/t2.jpg" alt="">
                    </a>
				</div>
                <div class="col-md-3">
                    <a href="" id="video" data-src="9rNuSi4lXFE">
                        <img src="images/tutorial/t3.jpg" alt="">
                    </a>
				</div>
                <div class="col-md-3">
                    <a href="" id="video" data-src="PT1fAIcz91w">
                        <img src="images/tutorial/t4.jpg" alt="">
                    </a>
				</div>
			</div>
		</div>
		<div class="container marB20">
			<p class="evntHtx"><b>Web</b>  <span>DESIGN</span>
			</p>
			<p class="freeTutTxt">PART - 1</p>
            <div class="tGraphics ">
                <div class="col-md-3">
                    <a href="" id="video">
                        <img src="images/tutorial/tut01.jpg" alt="">
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="" id="video">
                        <img src="images/tutorial/tut02.jpg" alt="">
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="" id="video">
                        <img src="images/tutorial/tut03.jpg" alt="">
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="" id="video">
                        <img src="images/tutorial/tut02.jpg" alt="">
                    </a>
                </div>
            </div>
		</div>
		<div class="container marB20">
			<p class="evntHtx"><b>Web</b>  <span>development</span>
			</p>
			<p class="freeTutTxt">PART - 1</p>
            <div class="tGraphics ">
                <div class="col-md-3">
                    <a href="" id="video">
                        <img src="images/tutorial/tut01.jpg" alt="">
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="" id="video">
                        <img src="images/tutorial/tut02.jpg" alt="">
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="" id="video">
                        <img src="images/tutorial/tut03.jpg" alt="">
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="" id="video">
                        <img src="images/tutorial/tut02.jpg" alt="">
                    </a>
                </div>
            </div>
		</div>
        <!--Modal for Video-->
        <div class="modal video" tabindex="-1" role="dialog">
            <div class="modal-dialog"> 
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Online Tutorials</h4>
                    </div>
                    <iframe id="mVideo" width="100%" height="400" src="" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
        <!--Modal for Video End-->
</section>
<div class="container ptBdr"></div>
<?php 
	$oPageContents->get_part('partner_part.php');
	$oPageContents->get_footer();
?>