<?php
	require_once('functions/function.php');
	$oPageContents->get_header();
	$oPageContents->get_nav(); 
?>
    <section>
        <div class="full" id="aplyBanner">
            <div class="container">
                <h1 class="bnrHdr" id="link">Apply for Scholarship</h1>
                <p class="bnrTxt">Creative IT graduate scholarship program</p>
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
                    <p class="contH1 marB20 text-center">new student</p>
                    <form class="aplyFrm" action="" method="post" enctype="multipart/form-data" data-type="ajax">
                        <div class="col-sm-12 pd0">
                            <div class="col-sm-3 pd0 frmLbl">
                                <label for="name">Student's Name <span>*</span></label>
                            </div>
                            <div class="col-sm-9">
                                <input type="text" id="name" class="form-control" data-require="name">
                            </div>
                        </div>
                        <div class="col-sm-12 pd0 marT10">
                            <div class="col-sm-3 pd0 frmLbl">
                                <label for="gender">Gender <span>*</span></label>
                                
                            </div>
                            <div class="col-sm-9">
                                <input type="radio" id="gender" name="gender"> Male
                                <input type="radio" id="gender" name="gender"> Female
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
                                <label for="dob">Date of Birth <span>*</span></label>
                            </div>
                            <div class="col-sm-9">
                                <input type="text" id="dob" class="form-control" >
                            </div>
                        </div>
                        <div class="col-sm-12 pd0 marT10">
                            <div class="col-sm-3 pd0 frmLbl">
                                <label for="occupation">Ocupation <span>*</span></label>
                            </div>
                            <div class="col-sm-9">
                                <input type="text" id="occupation" class="form-control" data-require="blank">
                            </div>
                        </div>
                        <div class="col-sm-12 pd0 marT10">
                            <div class="col-sm-3 pd0 frmLbl" valign="top">
                                <label for="address">Present Address <span>*</span></label>
                            </div>
                            <div class="col-sm-9">
                                <textarea type="text" id="address" class="form-control" data-require="blank"></textarea>
                            </div>
                        </div>
                        <div class="col-sm-12 pd0 marT10">
                            <div class="col-sm-3 pd0 frmLbl" valign="top">
                                <label>Preferred Fields <span>*</span></label>
                                
                            </div>
                            <div class="col-sm-9">
                                <div class="prfFld">
                                    <input type="checkbox" name="pff" id="ck1"> <label for="ck1">HGD - Graphics Design</label>
                                    <br> 
                                    <input type="checkbox" name="pff" id="ck2"> <label for="ck2"> HOM - Practical Search Engine Optimization </label>
                                    <br>
                                    <input type="checkbox" name="pff" id="ck3"> <label for="ck3"> NET - Basic Networking</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 pd0 marT10">
                            <div class="col-sm-3 pd0 frmLbl" valign="top">
                                <label>Known about CIT from <span>*</span>
                                </label>
                            </div>
                            <div class="col-sm-9">
                                <div class="prfFld">
                                    <input type="checkbox" name="kwfrm" id="ck4"> <label for="ck4">CIT Student</label>
                                    <br>
                                    <input type="checkbox" name="kwfrm" id="ck5"> <label for="ck5">Newspaper</label>
                                    <br>
                                    <input type="checkbox" name="kwfrm" id="ck6"> <label for="ck6">Magazine</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 pd0 marT10">
                            <div class="col-sm-3 pd0 frmLbl" valign="top">
                                <label for="deg">Last Academic Info <span>*</span></label>
                            </div>
                            <div class="col-sm-9">
                                <div class="degree">
                                    <div class="col-md-5 pd0">
                                        <input type="text" id="deg" class="form-control" placeholder="Degree">
                                    </div>
                                    <div class="col-md-4 pd0">
                                        <input type="text" class="form-control" placeholder="Year">
                                    </div>
                                    <div class="col-md-3 pd0">
                                        <input type="text" class="form-control" placeholder="Result">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 pd0 marT10">
                            <div class="col-sm-3 pd0 frmLbl" valign="top">
                                <label for="address">Photo <span>*</span></label>
                            </div>
                            <div class="col-sm-9">
                                <input type="file">
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