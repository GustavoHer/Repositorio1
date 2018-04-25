<html>
    <head>
           <title>Login</title>
           <link href="css/styles.css" rel="stylesheet" type="text/css">
           <meta name="description" content="Login">
           <meta name="keywords" content="HTML,CSS,Javascript,Login,Universidad del caribe,Unicaribe,Menu de opciones">
           <script src="js/scripts.js"></script>
    </head>
    <body>
        <header>
            Formulario de login con PHP
        </header>
        <p>usuario ya registrado: 160300098@ucaribe.edu.mx</p>
        <p>contraseña: Gustavo98</p>
        <form method="post" action="validar.php" onsubmit="return validar();">
        <input type="text" placeholder="Usuario" name="usuario" id="usuario" onblur="validarEmail(this)" onkeyup="validaEmail(this)">
        <input type="password" placeholder="Contraseña" name="contraseña">
        <input type="submit" value="Ingresar">
        <a href="registro.php">Registrar nuevo usuario</a>
        </form>
    </body>
</html>