$(document).ready(function(){
    $('#btnGuardar').click(function (e) {
        e.preventDefault();
        if($('#estado').val() == ''){
            alert('Dene indicar el estado');
            $('#estado').focus();
            $('#estado').fadeOut(500).fadeIn(500);
        } else {
            $('#frmEstado').submit();
        }
    });
})
