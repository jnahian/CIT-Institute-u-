$(function(){
    $('#m_addmenu').hide();
    $('button#addmenu').click(function(){
        $('#m_addmenu').fadeIn(500);
    });
    
    
    $row = '<div class="input-group m-b-sm"><input type="text" name="c-module" class="form-control" id="c-module" placeholder="Course Module"><span class="input-group-btn"><a href="#" class="btn btn-success btn-add"><i class="icon-plus"></i></a></span></div>';
    
    $('a.btn-add').on('click',function(e){
        e.preventDefault();
        $(this).parents('.col-sm-10').append($row);
        
    });
});