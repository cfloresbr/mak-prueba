function verificarFormulario(){
    var nombre = document.getElementById("name");
    var correo = document.getElementById("mail");
    var comentario = document.getElementById("comentario");
    if(nombre != null && nombre.value.trim().length != 0
    && correo != null && correo.value.trim().length != 0
    && comentario != null && comentario.value.trim().length != 0){
        return true;
    }else{
        alert("Para enviar correo al contacto, debe ingresar nombre, correo y comentario.");
        return false;
    }
}