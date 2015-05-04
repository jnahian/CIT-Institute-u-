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
                <div class="panel-body">
                    <div class="info-box-stats">
                        <h3>View Managed Data</h3>
                        <span class="info-box-title">User activity this month</span>
                    </div>
                    <div class="info-box-icon">
                        <i class="icon-users"></i>
                    </div>
                    <div class="info-box-progress">
                        <div class="progress progress-xs progress-squared bs-n">
                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div><!-- Row -->
    
<?php $oTools->get_part('footer');?>