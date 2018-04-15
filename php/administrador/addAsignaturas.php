<?php
    include "../class/conexiones.php";

    $centro = $_SESSION['idCentro'];
    $idAsignatura = $_POST['asignatura'];
    $nombreAsignatura = $_POST['nombre'];

    $bbdd = new Conexion();
    $conexion = $bbdd->conectar();
    $resultado = $conexion->query("INSERT INTO asignaturas ('ID_Asig','ID_Centro','Nombre') VALUES ($idAsignatura,$centro,$nombreAsignatura)");
    if($resultado){
        echo true;
    }else{
        echo false;
    }
