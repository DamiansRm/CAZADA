<?php
    session_start();
    include "class/conexiones.php";

    $user = $_POST['user'];
    $pass = $_POST['pass'];

    $bbdd = new Conexion();
    $result = $bbdd->login($user,$pass);

    $_SESSION['type'] = $result;
    header("Location: ../index.php");


