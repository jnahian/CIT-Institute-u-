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
                    <a href="#view" class="n_course btn btn-lg btn-primary btn-addon"><i class="fa fa-eye"></i>View Courses</a>
                </div>
                <div class="col-sm-4">
                    <a href="#add" class="n_course btn btn-lg btn-success btn-addon"><i class="fa fa-pencil"></i>Add Courses</a>
                </div>
                <div class="col-sm-4">
                    <a href="#edit" class="n_course btn btn-lg btn-info btn-addon"><i class="fa fa-edit"></i>Edit Courses</a>
                </div>
            </div>
        </div>
    </div>
    <div class="panel panel-white n-cor" id="view">
        <div class="panel-heading clearfix">
            <h4 class="panel-title">View Courses</h4>
        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <table id="example" class="display table" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Course Name</th>
                            <th>Overview</th>
                            <th>Fee</th>
                            <th>Manage</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Graphic Design</td>
                            <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi, quos.</td>
                            <td>20000 /=</td>
                            <td>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-danger"><i class="icon-trash"></i></button>
                                    <button type="button" class="btn btn-info"><i class="icon-note"></i></button>
                                </div>
                            </td>
                        </tr>

                    </tbody>
                </table>  
            </div>
        </div>
    </div>
    <div class="panel panel-white n-cor" id="add">
        <div class="panel-heading clearfix">
            <h4 class="panel-title">Add Course</h4>
        </div>             
        <div class="panel-body">
            <div class="row pt20">
                <div class="col-md-12">
                    <form action="" method="post" class="form-horizontal">
                        <div class="form-group">
                            <label for="c-title" class="col-sm-2 control-label">Course Title <span>*</span></label>
                            <div class="col-sm-4">
                                <input type="text" name="c-title" class="form-control" id="c-title" placeholder="Course Title">
                            </div>
                        
                            <label for="c-s-title" class="col-sm-2 control-label">Course Sub-Title <span>*</span></label>
                            <div class="col-sm-4">
                                <input type="text" name="c-s-title" class="form-control" id="c-s-title" placeholder="Course Sub-Title">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="c-overview" class="col-sm-2 control-label">Course Overview <span>*</span></label>
                            <div class="col-sm-10">
                                <textarea name="c-overview" class="form-control" id="c-overview" placeholder="Course Overview"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="c-module" class="col-sm-2 control-label">Course Module <span>*</span></label>
                            <div class="col-sm-4">
                                <textarea name="c-module" class="form-control" id="c-module" placeholder="Course Module"></textarea>
                                <span class="help-block">Seperate each item with "comma ( , )"</span>
                            </div>
                            <label for="c-staught" class="col-sm-2 control-label">Software Taught <span>*</span></label>
                            <div class="col-sm-4">
                                <textarea name="c-staught" class="form-control" id="c-staught" placeholder="Software Taught"></textarea>
                                <span class="help-block">Seperate each item with "comma ( , )"</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="c-highlights" class="col-sm-2 control-label">Course highlights <span>*</span></label>
                            <div class="col-sm-4">
                                <textarea name="c-highlights" class="form-control" id="c-highlights" placeholder="Course Highlights"></textarea>
                                <span class="help-block">Seperate each item with "comma ( , )"</span>
                            </div>
                            <label for="c-support" class="col-sm-2 control-label">Career Support <span>*</span></label>
                            <div class="col-sm-4">
                                <textarea name="c-support" class="form-control" id="c-support" placeholder="Career Support"></textarea>
                                <span class="help-block">Seperate each item with "comma ( , )"</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="c-duration" class="col-sm-2 control-label">Course Duration <span>*</span></label>
                            <div class="col-sm-4">
                                <input type="text" name="c-duration" class="form-control" id="c-duration" placeholder="Course Duration">
                                <p class="help-block">Hint:- 4 months (2 hours a day, 2 days a week)</p>
                            </div>

                            <label for="c-fee" class="col-sm-2 control-label">Course Fee <span>*</span></label>
                            <div class="col-sm-4">
                                <input type="text" name="c-fee" class="form-control" id="c-fee" placeholder="Course Fee">
                                <p class="help-block">Hint:- 20000 ( Just enter the amount. )</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="sr-only col-sm-2 control-label">Submit Button</label>
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-success btn-addon"><i class="icon-plus"></i>Add Course</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="panel panel-white n-cor" id="edit">
        <div class="panel-heading clearfix">
            <h4 class="panel-title">Edit Course</h4>
        </div>             
        <div class="panel-body">
            <div class="row pt20">
                <div class="col-md-12">
                    <form action="" method="post" class="form-horizontal">
                        <div class="form-group">
                            <label for="c-title" class="col-sm-2 control-label">Course Title <span>*</span></label>
                            <div class="col-sm-4">
                                <input type="text" name="c-title" class="form-control" id="c-title" placeholder="Course Title">
                            </div>

                            <label for="c-s-title" class="col-sm-2 control-label">Course Sub-Title <span>*</span></label>
                            <div class="col-sm-4">
                                <input type="text" name="c-s-title" class="form-control" id="c-s-title" placeholder="Course Sub-Title">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="c-overview" class="col-sm-2 control-label">Course Overview <span>*</span></label>
                            <div class="col-sm-10">
                                <textarea name="c-overview" class="form-control" id="c-overview" placeholder="Course Overview"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="c-module" class="col-sm-2 control-label">Course Module <span>*</span></label>
                            <div class="col-sm-4">
                                <textarea name="c-module" class="form-control" id="c-module" placeholder="Course Module"></textarea>
                                <span class="help-block">Seperate each item with "comma ( , )"</span>
                            </div>
                            <label for="c-staught" class="col-sm-2 control-label">Software Taught <span>*</span></label>
                            <div class="col-sm-4">
                                <textarea name="c-staught" class="form-control" id="c-staught" placeholder="Software Taught"></textarea>
                                <span class="help-block">Seperate each item with "comma ( , )"</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="c-highlights" class="col-sm-2 control-label">Course highlights <span>*</span></label>
                            <div class="col-sm-4">
                                <textarea name="c-highlights" class="form-control" id="c-highlights" placeholder="Course Highlights"></textarea>
                                <span class="help-block">Seperate each item with "comma ( , )"</span>
                            </div>
                            <label for="c-support" class="col-sm-2 control-label">Career Support <span>*</span></label>
                            <div class="col-sm-4">
                                <textarea name="c-support" class="form-control" id="c-support" placeholder="Career Support"></textarea>
                                <span class="help-block">Seperate each item with "comma ( , )"</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="c-duration" class="col-sm-2 control-label">Course Duration <span>*</span></label>
                            <div class="col-sm-4">
                                <input type="text" name="c-duration" class="form-control" id="c-duration" placeholder="Course Duration">
                                <p class="help-block">Hint:- 4 months (2 hours a day, 2 days a week)</p>
                            </div>

                            <label for="c-fee" class="col-sm-2 control-label">Course Fee <span>*</span></label>
                            <div class="col-sm-4">
                                <input type="text" name="c-fee" class="form-control" id="c-fee" placeholder="Course Fee">
                                <p class="help-block">Hint:- 20000 ( Just enter the amount. )</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="sr-only col-sm-2 control-label">Submit Button</label>
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-success btn-addon"><i class="icon-note"></i>Edit Course</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
<?php $oTools->get_part('footer');?>