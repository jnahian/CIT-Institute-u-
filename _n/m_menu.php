<?php require_once('functions/functions.php');
    
    $oTools->get_part('header');

?>
<?php 

    $oTools->get_part('navbar'); 
    $oTools->get_part('sidebar');
?>

<div class="page-title">
    <h3>Menu Manager</h3>
    
</div>
<div id="main-wrapper">
   <div class="row">
       <div class="col-md-12">
           <div class="panel panel-white">
               
               <div class="panel-body">
                  
                   <div class="row">
                       <div class="col-md-12">
                           <h3 class="no-m m-b-xs">Add Menu</h3>
                       </div>
                       <div class="col-md-12">
                           <button type="button" class="btn btn-lg btn-success btn-addon" id="addmenu"><i class="fa fa-edit"></i>Add Menu</button>
                       </div>
                   </div>
               </div>
           </div>
           <div class="panel panel-white" id="m_addmenu">
               <div class="panel-heading clearfix">
                   <h4 class="panel-title">Add a menu here</h4>
               </div>             
               <div class="panel-body">
                   <div class="row">
                       <div class="col-md-12 pt20">
                           <form class="form-inline">
                               <div class="form-group col-sm-4">
                                   <label for="exampleInputEmail2">Menu Name</label>
                                   <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Menu Name">
                               </div>
                               <div class="form-group col-sm-3">
                                   <label for="m_category">Parent</label>
                                   <select name="" id="m_category" class="form-control">
                                       <option value="">-- select parent --</option>
                                       <option value="">-- parent 01 --</option>
                                       <option value="">-- parent 02 --</option>
                                   </select>

                               </div>
                               <button type="submit" class="btn btn-success col-sm-2">Create</button>
                           </form>

                       </div>

                   </div>
               </div>
           </div>
           <div class="panel panel-white">
               <div class="panel-heading clearfix">
                   <h4 class="panel-title">Existing Menu</h4>
               </div>   
               <div class="panel-body">              
                   <div class="table-responsive">
                       <table id="example" class="display table" cellspacing="0" width="100%">
                           <thead>
                               <tr>
                                   <th>Name</th>
                                   <th>Parent</th>
                                   <th>Category</th>
                                   <th>Manage</th>
                               </tr>
                           </thead>
                           <tbody>
                               <tr>
                                   <td>Tiger Nixon</td>
                                   <td>System Architect</td>
                                   <td>Edinburgh</td>
                                   <td>
                                       <div class="btn-group">
                                           <button type="button" class="btn btn-danger"><i class="icon-trash"></i></button>
                                           <button type="button" class="btn btn-info"><i class="icon-note"></i></button>
                                       </div>
                                   </td>
                               </tr>
                               <tr>
                                   <td>Tiger Nixon</td>
                                   <td>System Architect</td>
                                   <td>Edinburgh</td>
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
   </div>
</div>
    
    
<?php $oTools->get_part('footer');?>