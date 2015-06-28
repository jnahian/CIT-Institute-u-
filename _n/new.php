<?php require_once('functions/functions.php');
    
    $oTools->get_part('header');

?>
<?php 

    $oTools->get_part('navbar'); 
    $oTools->get_part('sidebar');
?>

<div class="page-title">
    <h3>Dashboard</h3>
    <div class="page-breadcrumb">
        <ol class="breadcrumb">
            <li><a href="index.php">Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </div>
</div>
<div id="main-wrapper">
    <div class="row">
        <div class="col-lg-3 col-md-6">
            <div class="panel info-box panel-white">
                <div class="panel-heading clearfix">
                    <h4 class="panel-title">
                        
                    </h4>
                </div>   
                <div class="panel-body">
                    
                </div>
            </div>
        </div>
        
    </div><!-- Row -->
    
<?php $oTools->get_part('footer');?>