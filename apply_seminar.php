<?php
	require_once('functions/function.php');
	$oPageContents->get_header();
	$oPageContents->get_nav(); 
?>
    <section>
        <div class="full" id="aplyBanner">
            <div class="container">
                <h1 class="bnrHdr" id="link">Apply for Free seminar</h1>
                <p class="bnrTxt">Creative IT offers free seminar in every week</p>
            </div>
            <div class="container">
                <div class="bnrBdr"></div>
            </div>
        </div>
        <!--container end-->
    </section>
    <!--banner part end-->
    <section class="applySc">
        <div class="container">
            <div class="col-md-12 pd0">
                <div class="col-md-3 col-sm-3 pd0">
                    <img src="images/apply01.jpg" alt="apply01">
                </div>
                <div class="col-md-8 col-sm-9 aply marB20">
                    <p class="aplyH1"><b>APPLICATION </b>FORM</p>
                    <p class="aplyTx1">All information are kept strictly confidential.
                        <br><span>* Required Fields</span>
                    </p>
                    
                    <form class="aplyFrm" action="" method="post" enctype="multipart/form-data" data-type="ajax">
                        <div class="col-sm-12 pd0">
                            <div class="col-sm-3 pd0 frmLbl">
                                <label for="name">Full Name <span>*</span></label>
                            </div>
                            <div class="col-sm-9">
                                <input type="text" id="name" class="form-control" data-require="name">
                            </div>
                        </div>
                        <div class="col-sm-12 pd0 marT10">
                            <div class="col-sm-3 pd0 frmLbl" valign="top">
                                <label for="address">Address <span>*</span></label>
                            </div>
                            <div class="col-sm-9">
                                <textarea type="text" id="address" class="form-control" data-require="blank"></textarea>
                            </div>
                        </div>
                        <div class="col-sm-12 pd0 marT10">
                            <div class="col-sm-3 pd0 frmLbl">
                                <label for="phn">Mobile Number <span>*</span></label>
                            </div>
                            <div class="col-sm-9">
                                <input type="text" id="phn" class="form-control" placeholder="+880" data-require="phone" >
                            </div>
                        </div>
                        <div class="col-sm-12 pd0 marT10">
                            <div class="col-sm-3 pd0 frmLbl">
                                <label for="email">Email <span>*</span></label>

                            </div>
                            <div class="col-sm-9">
                                <input type="text" id="email" class="form-control" data-require="email" placeholder="something@example.com">
                            </div>
                        </div>
                        <div class="col-sm-12 pd0 marT10">
                            <div class="col-sm-3 pd0 frmLbl">
                                <label for="gender">How did you know about us ? <span>*</span></label>
                            </div>
                            <div class="col-sm-9">
                                <input type="radio" id="gender1" name="gender"> <label for="gender1">Facebook Fanpage</label> <br>
                                <input type="radio" id="gender2" name="gender"> <label for="gender2">News Paper/Magazines</label>
                            </div>
                        </div>
                                                
                        <div class="col-sm-12 pd0 marT10">
                            <div class="col-sm-3 pd0 frmLbl" valign="top">
                                <label>Interested in <span>*</span></label>
                                
                            </div>
                            <div class="col-sm-9">
                                <div class=""> 
                                    <input type="checkbox" name="pff" id="ck1"> <label for="ck1">Graphic Design</label>
                                    <br> 
                                    <input type="checkbox" name="pff" id="ck2"> <label for="ck2"> Web Design</label>
                                    <br>
                                    <input type="checkbox" name="pff" id="ck3"> <label for="ck3"> Web Development</label>
                                    <br>
                                    <input type="checkbox" name="pff" id="ck4"> <label for="ck4"> E-mail Marketing</label>
                                    <br>
                                    <input type="checkbox" name="pff" id="ck5"> <label for="ck5"> Search Engine Optimization (S.E.O)</label>
                                    <br>
                                    <input type="checkbox" name="pff" id="ck6"> <label for="ck6"> Cisco Certified Network Associate (CCNA)</label>
                                    <br>
                                    <input type="checkbox" name="pff" id="ck7"> <label for="ck7">Certified Ethical Hacker (CEH)</label>
                                    <br>
                                    <input type="checkbox" name="pff" id="ck8"> <label for="ck8">Interior Design &amp; 3D Animation</label>
                                    <br>
                                    <input type="checkbox" name="pff" id="ck9"> <label for="ck9">Communicative English for Outsourcing</label>
                                    <br>
                                    <input type="checkbox" name="pff" id="ck10"> <label for="ck10">Apps Development</label>
                                </div>
                                <span>(You can choose more than one option)</span>
                            </div>
                        </div>
                        
                        <div class="col-sm-12 pd0 marT10">
                            <div class="col-sm-3 pd0 frmLbl" valign="top">
                                <label for="address" class="sr-only"></label>
                            </div>
                            <div class="col-sm-9">
                                <input class="btn-save" type="submit" value="Apply">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div><!--container end-->
</section>
<div class="container ptBdr"></div>
<?php 
	$oPageContents->get_part('partner_part.php');
	$oPageContents->get_footer();
?>