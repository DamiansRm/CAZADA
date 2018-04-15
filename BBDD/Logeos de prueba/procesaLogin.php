<?php
    session_start();
    include 'conexiones.php';
    $con = new Conexion();

    if (isset($_REQUEST['usu'])){
        $usu = $_REQUEST['usu'];
    }
    if (isset($_REQUEST['pass'])){
        $pass = $_REQUEST['pass'];
    }
    
    $resul = $con->login($usu, $pass);
    
    if ($resul == 'admin'){
        header('Location: admin.php');
    } else if ($resul == 'profe'){
        header('Location: profe.php');
    } else if ($resul == 'padre'){
        header('Location: padre.php');    
    } else {
        echo 'mal';
    }