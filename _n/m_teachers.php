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
            <h4 class="panel-title">Manage All Teachers here</h4>
        </div>             
        <div class="panel-body">
            <div class="row pt20">
                <div class="col-sm-4">
                    <a href="#view" class="n_course btn btn-lg btn-primary btn-addon"><i class="fa fa-eye"></i>View Teachers</a>
                </div>
                <div class="col-sm-4">
                    <a href="#add" class="n_course btn btn-lg btn-success btn-addon"><i class="fa fa-pencil"></i>Add Teachers</a>
                </div>
                <div class="col-sm-4">
                    <a href="#edit" class="n_course btn btn-lg btn-info btn-addon"><i class="fa fa-edit"></i>Edit Teachers</a>
                </div>
            </div>
        </div>
    </div>
    <div class="panel panel-white n-cor" id="view">
        <div class="panel-heading clearfix">
            <h4 class="panel-title">View Teachers</h4>
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
            <h4 class="panel-title">Add a Teacher</h4>
        </div>             
        <div class="panel-body">
            <div class="row pt20">
                <div class="col-md-12">
                    <form action="" method="post" class="form-horizontal">
                       <h3>Basic Info</h3>
                        <div class="form-group">
                            <label for="t-name" class="col-sm-2 control-label">Teacher Name <span>*</span></label>
                            <div class="col-sm-4">
                                <input type="text" name="t-name" class="form-control" id="t-name" required placeholder="Teacher Name">
                            </div>
                        
                            <label for="t-designation" class="col-sm-2 control-label">Designation <span>*</span></label>
                            <div class="col-sm-4">
                                <input type="text" name="t-designation" class="form-control" id="t-designation" required placeholder="Designation">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="t-about" class="col-sm-2 control-label">About Teacher <span>*</span></label>
                            <div class="col-sm-10">
                                <textarea name="t-about" class="form-control" id="t-about" required placeholder="About Teacher"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="t-responsibilities" class="col-sm-2 control-label"> Responsibilities <span>*</span></label>
                            <div class="col-sm-4">
                                <textarea name="t-responsibilities" class="form-control" id="t-responsibilities" required placeholder="Teachers Responsibilities"></textarea>
                                <span class="help-block">Seperate each item with "comma ( , )"</span>
                            </div>
                            <label for="t-hobies" class="col-sm-2 control-label">Hobies <span>*</span></label>
                            <div class="col-sm-4">
                                <textarea name="t-hobies" class="form-control" id="t-hobies" required placeholder="Hobies"></textarea>
                                <span class="help-block">Seperate each item with "comma ( , )"</span>
                            </div>
                        </div>
                        <h3>Social Media and Contact</h3>
                        <div class="form-group">
                            <label for="t-fb" class="col-sm-2 control-label">Facebook <span>*</span></label>
                            <div class="col-sm-4">
                                <input type="text" name="t-fb" class="form-control" id="t-fb" placeholder="Facebook">
                            </div>
                            <label for="t-twitter" class="col-sm-2 control-label">Twitter</label>
                            <div class="col-sm-4">
                                <input type="text" name="t-twitter" class="form-control" id="t-twitter" placeholder="Twitter">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="t-linkedin" class="col-sm-2 control-label">LinkedIn</label>
                            <div class="col-sm-4">
                                <input type="text" name="t-linkedin" class="form-control" id="t-linkedin" placeholder="LinkedIn">
                            </div>
                            <label for="t-email" class="col-sm-2 control-label">Email <span>*</span></label>
                            <div class="col-sm-4">
                                <input type="text" name="t-email" class="form-control" id="t-email" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="t-mobile" class="col-sm-2 control-label">Phone/Mobile <span>*</span></label>
                            <div class="col-sm-4">
                                <input type="text" name="t-mobile" class="form-control" id="t-mobile" placeholder="Phone/Mobile" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="sr-only col-sm-2 control-label">Submit Button</label>
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-success btn-addon"><i class="icon-plus"></i>Add Teacher</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="panel panel-white n-cor" id="edit">
        <div class="panel-heading clearfix">
            <h4 class="panel-title">Edit a Teacher</h4>
        </div>             
        <div class="panel-body">
            <div class="row pt20">
                <div class="col-md-12">
                    <form action="" method="post" class="form-horizontal">
                       <h3>Basic Info</h3>
                        <div class="form-group">
                            <label for="t-name" class="col-sm-2 control-label">Teacher Name <span>*</span></label>
                            <div class="col-sm-4">
                                <input type="text" name="t-name" class="form-control" id="t-name" required placeholder="Teacher Name">
                            </div>
                        
                            <label for="t-designation" class="col-sm-2 control-label">Designation <span>*</span></label>
                            <div class="col-sm-4">
                                <input type="text" name="t-designation" class="form-control" id="t-designation" required placeholder="Designation">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="t-about" class="col-sm-2 control-label">About Teacher <span>*</span></label>
                            <div class="col-sm-10">
                                <textarea name="t-about" class="form-control" id="t-about" required placeholder="About Teacher"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="t-responsibilities" class="col-sm-2 control-label"> Responsibilities <span>*</span></label>
                            <div class="col-sm-4">
                                <textarea name="t-responsibilities" class="form-control" id="t-responsibilities" required placeholder="Teachers Responsibilities"></textarea>
                                <span class="help-block">Seperate each item with "comma ( , )"</span>
                            </div>
                            <label for="t-hobies" class="col-sm-2 control-label">Hobies <span>*</span></label>
                            <div class="col-sm-4">
                                <textarea name="t-hobies" class="form-control" id="t-hobies" required placeholder="Hobies"></textarea>
                                <span class="help-block">Seperate each item with "comma ( , )"</span>
                            </div>
                        </div>
                        <h3>Social Media and Contact</h3>
                        <div class="form-group">
                            <label for="t-fb" class="col-sm-2 control-label">Facebook <span>*</span></label>
                            <div class="col-sm-4">
                                <input type="text" name="t-fb" class="form-control" id="t-fb" placeholder="Facebook">
                            </div>
                            <label for="t-twitter" class="col-sm-2 control-label">Twitter</label>
                            <div class="col-sm-4">
                                <input type="text" name="t-twitter" class="form-control" id="t-twitter" placeholder="Twitter">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="t-linkedin" class="col-sm-2 control-label">LinkedIn</label>
                            <div class="col-sm-4">
                                <input type="text" name="t-linkedin" class="form-control" id="t-linkedin" placeholder="LinkedIn">
                            </div>
                            <label for="t-email" class="col-sm-2 control-label">Email <span>*</span></label>
                            <div class="col-sm-4">
                                <input type="text" name="t-email" class="form-control" id="t-email" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="t-mobile" class="col-sm-2 control-label">Phone/Mobile <span>*</span></label>
                            <div class="col-sm-4">
                                <input type="text" name="t-mobile" class="form-control" id="t-mobile" placeholder="Phone/Mobile" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="sr-only col-sm-2 control-label">Submit Button</label>
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-success btn-addon"><i class="icon-note"></i>Edit Teacher</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    
<?php $oTools->get_part('footer');?>