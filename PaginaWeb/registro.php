<html>
    <head>
           <title>Registro</title>
           <link href="css/styles.css" rel="stylesheet" type="text/css">
           <meta name="description" content="Registro">
           <meta name="keywords" content="HTML,CSS,Javascript,Login,Universidad del caribe,Unicaribe,Menu de opciones">
           <script src="js/scripts.js"></script>
    </head>
    <body>
        <header>
            Formulario de Registro a Nuevo Usuario
        </header>
        <form method="post" action="validar2.php" onsubmit="return validar()" onsubmit="return validar2();">
        <input type="text" placeholder="Usuario" name="usuario" id="usuario" onblur="validarEmail(this)" onkeyup="validaEmail(this)">
        <input type="password" placeholder="Contraseña" name="contraseña" id="pass" onblur="validarCont(this)" onkeyup="validarCont(this)"> 
        <input type="password" placeholder="Confirme contraseña" name="pass2" >
        <input type="submit" value="Registrar">
        </form>
    </body>
</html>
