<?php
     $user=$_POST['usuario'];
     $pass=$_POST['contraseña'];
     $conexion= mysqli_connect("fdb21.awardspace.net", "2701974_web", "gustavo98", "2701974_web");
     $consulta="SELECT * FROM Usuarios where correo='$user' and passw='$pass'";
     $resultado=mysqli_query($conexion, $consulta);
     $valor=mysqli_num_rows($resultado);
     if($valor>0){
             echo "Sesión iniciada correctamente: bienvenido $user";
     }else{
             echo "Error en la autenticanción";
     }
     mysqli_free_result($resultado);
     mysqli_close($conexion);
     
   
?>