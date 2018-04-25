<?php
  $nombre=$_POST['usuario'];
  $pass1=$_POST['contraseña'];
  $passw=$_POST['pass2'];
  
  $conexion= mysqli_connect("fdb21.awardspace.net", "2701974_web", "gustavo98", "2701974_web");
 
  
  if($pass1 != $passw){
          echo "Las contraseñas no coinciden, favor de verificarlas";
  
  }else{
          $insertar = "INSERT INTO Usuarios(correo, passw) VALUES ('$nombre', '$passw')";

          $ejecutar = mysqli_query($conexion, $insertar);
  
          if(!$ejecutar){
          echo "No se pudo registrar";
          }else{
                 echo "Registrado exitosamente";
               }
 }
  mysqli_close($conexion);


?>