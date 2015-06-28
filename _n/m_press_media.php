<?php require_once('functions/functions.php');
    
    $oTools->get_part('header');

?>
<?php 

    $oTools->get_part('navbar'); 
    $oTools->get_part('sidebar');
?>

<div id="main-wrapper">
    <div class="row">
        <div class="col-md-12">
            <div class="panel info-box panel-white">
                <div class="panel-heading clearfix">
                    <h4 class="panel-title">
                        Add New Press &amp; Media
                    </h4>
                </div>   
                <div class="panel-body">
                    <form action="" method="post" class="form-horizontal">
                        <div class="form-group pt20">
                            <label for="n-title" class="col-sm-2 control-label">News Title <span>*</span></label>
                            <div class="col-sm-10">
                                <input type="text" name="n-title" class="form-control" id="n-title" required placeholder="News Title">
                            </div>
                        </div>   
                    </form>                 
                </div>
            </div>
        </div>
        
    </div><!-- Row -->
    
<?php $oTools->get_part('footer');?>