<?php
	require_once('functions/function.php');
	$oPageContents->get_header();
	$oPageContents->get_nav(); 
?>
	<section>
		<div class="full" id="stuWrksBanner">
			<div class="container">
                <h1 class="bnrHdr" id="link">student's work</h1>
				<p class="bnrTxt">Latest amazing work by Creative IT students</p>
			</div>
			<div class="container">
				<div class="bnrBdr"></div>
			</div>
		</div>
		<!--container end-->
	</section>
	<!--banner part end-->
	<section class="stWrks">
		<div class="container">
			<p class="stWrksH1">
				Creative IT students take pride in the work they do. Check out the gallery of their work or watch as they share their experiences.
			</p>
		</div>
		<div class="container marB20">
			<p class="evntHtx"><b>VIDEO</b>
			</p>
			<div class="tGraphics ">
				<div class="col-md-3 col-sm-4 col-xs-6 pd0">
                    <a id="video" href="#">
                        <img src="images/tutorial/tut01.jpg" alt="">
					</a>
				</div>
				<div class="col-md-3 col-sm-4 col-xs-6 pd0">
                    <a id="video" href="#">
                        <img src="images/tutorial/tut02.jpg" alt="">
                    </a>
				</div>
				<div class="col-md-3 col-sm-4 col-xs-6 pd0">
                    <a id="video" href="#">
                        <img src="images/tutorial/tut01.jpg" alt="">
                    </a>
				</div>
				<div class="col-md-3 col-sm-4 col-xs-6 pd0">
                    <a id="video" href="#">
                        <img src="images/tutorial/tut02.jpg" alt="">
                    </a>
				</div>
			</div>
		</div>
        <!--Modal for Video-->
        <div class="modal video" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog"> 
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Students Activity</h4>
                    </div>
                    <iframe id="mVideo" width="100%" height="400" src="" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
        <!--Modal for Video End-->
		<div class="container portfolio_filter">
			<ul>
				<li>
					<button class="btn_filter filter" data-filter=".category-1, .category-2, .category-3, .category-4">ALL</button>
				</li>
				<li>
					<button class="btn_filter filter" data-filter=".category-1">Graphics</button>
				</li>
				<li>
					<button class="btn_filter filter" data-filter=".category-2">animation</button>
				</li>
				<li>
					<button class="btn_filter filter" data-filter=".category-3">interior</button>
				</li>
				<li>
					<button class="btn_filter filter" data-filter=".category-4">web</button>
				</li>
			</ul>
		</div>
		<div class="container portfolio_items">
			<div id="Container">
				<div id="port" class="gallery">
					<a class="col-md-3 col-sm-4 col-xs-6 pd0 mix category-1" href="images/students_works/stuWrks01.png" data-my-order="1">
						<img class="img-responsive" src="images/students_works/stuWrks01.png" title="Hello world" />
					</a>
					<a class="col-md-3 col-sm-4 col-xs-6 pd0 mix category-2" href="images/students_works/stuWrks02.png" data-my-order="2">
						<img class="img-responsive" src="images/students_works/stuWrks02.png" />
					</a>
					<a class="col-md-3 col-sm-4 col-xs-6 pd0 mix category-3" href="images/students_works/stuWrks03.png" data-my-order="3">
						<img class="img-responsive" src="images/students_works/stuWrks03.png" />
					</a>
					<a class="col-md-3 col-sm-4 col-xs-6 pd0 mix category-4" href="images/students_works/stuWrks04.png" data-my-order="4">
						<img class="img-responsive" src="images/students_works/stuWrks04.png" />
					</a>
					<a class="col-md-3 col-sm-4 col-xs-6 pd0 mix category-4" href="images/students_works/stuWrks04.png" data-my-order="5">
						<img class="img-responsive" src="images/students_works/stuWrks04.png" />
					</a>
					<a class="col-md-3 col-sm-4 col-xs-6 pd0 mix category-3" href="images/students_works/stuWrks03.png" data-my-order="6">
						<img class="img-responsive" src="images/students_works/stuWrks03.png" />
					</a>
					<a class="col-md-3 col-sm-4 col-xs-6 pd0 mix category-1" href="images/students_works/stuWrks01.png" data-my-order="7">
						<img class="img-responsive" src="images/students_works/stuWrks01.png" />
					</a>
					<a class="col-md-3 col-sm-4 col-xs-6 pd0 mix category-2" href="images/students_works/stuWrks02.png" data-my-order="8">
						<img class="img-responsive" src="images/students_works/stuWrks02.png" />
					</a>
				</div>
			</div>
		</div>
	</section>
<?php 
	$oPageContents->get_part('partner_part.php');
	$oPageContents->get_footer();
?>