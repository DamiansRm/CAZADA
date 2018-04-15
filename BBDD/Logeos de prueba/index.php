<?php 
    session_start();
    include 'conexiones.php';
    $con = new Conexion();
    
    
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <center>
            <h1>CAZADA</h1><br><br>
            <form action="procesaLogin.php" method="POST">
                <fieldset>
                    <legend>LOGIN</legend>
                    Usuario: <input type="text" name="usu"/><br>
                    Password: <input type="password" name="pass"/><br><br>
                    <input type="submit" value="Enviar"/><br><br>
                    <a href="registro.php">Nuevo usuario</a>
                </fieldset>
            </form>
        </center>
    </body>
</html>
