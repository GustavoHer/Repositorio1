<?php
    $user='alumno';
    $pass='160300098';
    $form_user=$_POST['usuario'];
    $form_pass=$_POST['contraseña'];
    if($user==$form_user){
        if($pass==$form_pass){
            echo 'Inicio de sesión correcto
                  <a href="./">Cerrar Sesión</a>';
        }else{
            echo 'Usuario o contraseña incorrectos
                  <a href="./">Intentar nuevamente</a>';
        }
    }else{
           echo 'Usuario o contraseña incorrectos
                  <a href="./">Intentar nuevamente</a>';
    }
?>