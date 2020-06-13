$(function(){
    $("strong").click(function(e){
        e.preventDefault();
        var id = $(this).attr('id');
        $("input[name=category_id]").val(id);
        var instance = M.Modal.getInstance(eliminar);
        instance.open();
    });
});
