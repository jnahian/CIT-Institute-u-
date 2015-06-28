$(function(){
    $('#m_addmenu').hide();
    $('button#addmenu').click(function(){
        $('#m_addmenu').fadeIn(500);
    });
    
    $("a.n_course").click(function(e){
        e.preventDefault();
        $target = $(this).attr('href'); 
        
        $($target).slideDown(500);
        
        $($target).siblings('.n-cor').fadeOut(100);
    });
    
//    $n = "1";
//    
//    $name = 'c-module'+$n ;
//    $row = '<div class="input-group m-b-sm"><input type="text" name="'+$name+'" class="form-control" id="c-module" placeholder="Course Module"><span class="input-group-btn"><a href="#" class="btn btn-success btn-add"><i class="icon-plus"></i></a></span></div>';
//
//    //    alert($row);
//
//    $('a.btn-add').on('click',function(e){
//        e.preventDefault();
//        $(this).parents('.col-sm-10').append($row);
//        $(this).children('i').removeClass('icon-plus').addClass('icon-close');
//        $(this).removeClass('btn-add').addClass('btn-remove');
//        $(this).removeClass('btn-success').addClass('btn-danger');
//    });
//
//    $('a.btn-remove').on('click',function(){
//        $(this).parents('.input-group').remove();                    
//    });
//        
//    $n++;
});