// Abrir modal eliminar
$(function(){
    $("strong").click(function(e){
        e.preventDefault();
        var id = $(this).attr('id');
        $("input[name=book_id]").val(id);
        var instance = M.Modal.getInstance(eliminar);
        instance.open();
    });
});

// Funcion de autocompletado
function bindData (data) {
    $('input.autocomplete').autocomplete({
        data: data,
        onAutocomplete: function(text) {
            /* alert(`Diste clic ${texto}`); */
            location.href=`/list/${text}`;
        }
    });
}

// Obtener todos los libros
$(document).ready(function(){
    const compatibleData = {};

    fetch('/list')
    .then(data => data.json())
    .then(data=> {
        data.forEach(element => {
            compatibleData[element["book_name"]] = "https://i.pinimg.com/originals/2c/fc/93/2cfc93d7665f5d7728782700e50596e3.png";
        });

        bindData(compatibleData);
    });
});
