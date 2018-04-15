<?php
    session_start();

    if(!isset($_SESSION{'usuario'})){
        header("Location: ../../index.php");
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" type="text/css" href="../../css/header-index.css">
    <script type="application/javascript" src="../../js/admin.js"></script>
</head>
<body>
    <div id="main">
        <div id="header">
            <a href="../../index.php">
                <div class="divlogo">
                    <img src="../../img/logo-cazada.png">
                </div>
                <div class="divlogoname">
                    <span>CAZADA</span><span>Gestor escolar</span>
                </div>
            </a>
            <div class="typepanel">
                <p><span>Panel</span><span>ADMINISTRADOR</span></p>
            </div>
            <a class="cerrarSesion" href="cerrarSesion.php">Cerrar sesión</a>
        </div>
        <div id="content">
            <
        </div>
        <div id="footer">

        </div>
    </div>
</body>
</html>