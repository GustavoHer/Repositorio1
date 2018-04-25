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

function validarCont(elemento){
    if(elemento.value!==''){
        var data=elemento.value;
        var exp= ^(?=\w*\d)(?=\w*[A-Z])(?=\w*[a-z])\S{8,16}$
        if(!exp.test(data)){
            elemento.className='error';
        }else{
            elemento.className='input';
        }
    }
}

function validar2(){
    var cont=true;
    var exp= ^(?=\w*\d)(?=\w*[A-Z])(?=\w*[a-z])\S{8,16}$
    if(!exp.test(document.getElementById("pass").value)){
        user=false;
        alert("La contraseña debe tener al menos 8 dígitos, una letra mayúscula, al menos una letra minuscula, al menos un dígito y al menos un caracter especial");
    }
    return cont;
}