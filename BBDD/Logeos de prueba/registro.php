<?php 
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
            <form action="procesaRegistro.php" method="POST">
                <fieldset>
                    <legend>NUEVO USUARIO</legend>
                    Padre: <input type="radio" name="tipo" value="pa">  Profesor: <input type="radio" name="tipo" value="pro"><br>
                    Usuario: <input type="text" name="usu"/><br>
                    Password: <input type="password" name="pass"/><br>
                    Mail: <input type="text" name="mail"/><br>
                    Centro: <select name="centro">
                        <option value="" selected> --- </option>
                            <?php 
                                $centros = $con->consulta();
                                foreach ($centros as $c) {
                                    echo "<option value='$c[ID_Centro]]' title='$c[Ciudad], $c[Provincia]'>$c[Nombre]</option>";
                                }
                            ?>
                            </select><br><br>
                    <input type="submit" value="Registrar"/><br><br>
                    <a href="index.php">ATRÁS</a>
                </fieldset>
            </form>
        </center>
    </body>
</html>


