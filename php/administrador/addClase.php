<?php
    include_once "../class/conexiones.php";

    $tutor = $_REQUEST['tutor'];
    $turno = $_REQUEST['turno'];
    $clase = $_REQUEST['clase'];

    $bbdd = new Conexion();
    $resultado = $bbdd->addClase($tutora,$turno,$clase);
    
    if($resultado){
        echo true;
    }else{
        echo false;
    }
?>
