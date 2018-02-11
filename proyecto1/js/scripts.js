function validarEmail(elemento){
    if(elemento.value!==''){
        var data=elemento.value;
        var exp=/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        if(!exp.test(data)){
            elemento.className='error';
        }else{
            elemento.className='input';
        }
    }
}
function validar(){
    var user=true;
    var exp=/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if(!exp.test(document.getElementById("usuario").value)){
        user=false;
        alert("El usuario debe de ser un correo");
    }
    return user;
}
function hacer_hover(){
    alert("Está por pulsar el botón");
}
function salir_hover(){
    alert("Está lejos de ingresar");
}
function cargar_pagina(){
    alert("BIENVENIDO A NUESTRA PÁGINA");
}
