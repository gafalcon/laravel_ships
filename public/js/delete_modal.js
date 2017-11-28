function deleteModal(model, nombre) {
    $("#model_eliminar").text(nombre).attr("model_id", model);
    $('#exampleModal').modal("show");
}
function deleteModel(){
    var model_id = $("#model_eliminar").attr("model_id");
    $("#form_"+model_id).submit();
}
