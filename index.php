<?php
    session_start();

    if(isset($_SESSION['usuario'])){
        header("Location: php/index/".$_SESSION['type'].".php");
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <script type="javascript" src="js/login.js"></script>
</head>
<body>
    <div class="login-page">
        <div class="form">
            <div class="divlogo">
                <img src="img/logo-cazada.png">
                <p><span>CAZADA</span><span>Gestor escolar</span></p>
            </div>
            <form class="login-form" method="post" action="php/checkUser.php">
                <input type="text" placeholder="Usuario" name="user"/>
                <input type="password" placeholder="Contraseña" name="pass"/>
                <button>Iniciar sesión</button>
            </form>
        </div>
        <div class="developed">
            <div>Developed by:</div>
            <div>
                <div><img src="img/daca.png">David Cañibano</div>
                <div><img src="img/joda.png">José Damian</div>
                <div><img src="img/ruzam.png">Rubén Zambrano</div>
            </div>
        </div>
    </div>
</body>
</html>
