<?php require_once('functions/functions.php');
    
    $oTools->get_part('header');

?>
<?php 

    $oTools->get_part('navbar'); 
    $oTools->get_part('sidebar');
?>


<div id="main-wrapper">
    <div class="panel panel-white">
        <div class="panel-heading clearfix">
            <h4 class="panel-title">Manage All courses here</h4>
        </div>             
        <div class="panel-body">
            <div class="row pt20">
                <div class="col-sm-4">
                    <button type="button" class="btn btn-lg btn-success btn-addon"><i class="fa fa-pencil"></i>Add Courses</button>
                </div>
                <div class="col-sm-4">
                    <button type="button" class="btn btn-lg btn-primary btn-addon"><i class="fa fa-eye"></i>View Courses</button>
                </div>
                <div class="col-sm-4">
                    <button type="button" class="btn btn-lg btn-info btn-addon"><i class="fa fa-edit"></i>Edit Courses</button>
                </div>
            </div>
        </div>
    </div>
    <div class="panel panel-white">
        <div class="panel-heading clearfix">
            <h4 class="panel-title">Add Course</h4>
        </div>             
        <div class="panel-body">
            <div class="row pt20">
                <div class="col-md-12">
                    <form action="" method="post" class="form-horizontal">
                        <div class="form-group">
                            <label for="c-title" class="col-sm-2 control-label">Course Title</label>
                            <div class="col-sm-10">
                                <input type="text" name="c-title" class="form-control" id="c-title" placeholder="Course Title">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="c-s-title" class="col-sm-2 control-label">Course Sub-Title</label>
                            <div class="col-sm-10">
                                <input type="text" name="c-s-title" class="form-control" id="c-s-title" placeholder="Course Sub-Title">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="c-overview" class="col-sm-2 control-label">Course Overview</label>
                            <div class="col-sm-10">
                                <textarea name="c-overview" class="form-control" id="c-overview" placeholder="Course Overview"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="c-module" class="col-sm-2 control-label">Course Module</label>
                            <div class="col-sm-10">
                                <div class="input-group m-b-sm">
                                    <input type="text" name="c-module" class="form-control" id="c-module" placeholder="Course Module">
                                    <span class="input-group-btn">
                                        <a href="#" class="btn btn-success btn-add"><i class="icon-plus"></i></a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
<?php $oTools->get_part('footer');?>