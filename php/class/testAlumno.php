<?php
    include "alumno.php";
    include "clase.php";
    include "padre.php";
    include "profesor.php";

    /*SE CREA AL ALUMNO Y SE INTRODUCEN LAS NOTAS DEL PRIMER TRIMESTRE*/

    $alumno1 = new alumno(
        "00000000F",
        "Ruben",
        "Zambrano Casas",
        "1DAW",
        50151388,
        array("LENGUA","MATEMATICAS","HISTORIA"),
        array(
            array(5,6,4),
            array(null,null,null),
            array(null,null,null)
        )
    );

    /*SE PINTA AL ALUMNO Y SUS NOTAS MEDIAS POR ASIGNATURA*/

    echo ($alumno1->getNombre()."<br>");
    echo ($alumno1->getApellidos()."<br>");
    echo ($alumno1->getDni()."<br>");
    echo ($alumno1->getIdClase()."<br>");
    echo ("Media de ".$alumno1->getAsignaturas()[0].": ".($alumno1->getNota("LENGUA")[0]+$alumno1->getNota("LENGUA")[1]+$alumno1->getNota("LENGUA")[2])."<br>");
    echo ("Media de ".$alumno1->getAsignaturas()[1].": ".($alumno1->getNota("MATEMATICAS")[0]+$alumno1->getNota("MATEMATICAS")[1]+$alumno1->getNota("MATEMATICAS")[2])."<br>");
    echo ("Media de ".$alumno1->getAsignaturas()[2].": ".($alumno1->getNota("HISTORIA")[0]+$alumno1->getNota("HISTORIA")[1]+$alumno1->getNota("HISTORIA")[2])."<br>");

    /*SE INTRODUCEN LAS NOTAS DEL SEGUNDO TRIMESTRE*/
    $alumno1->setNotas(
        array(
            array(5,6,4),
            array(9,7,4),
            array(null,null,null)
        )
    );

    /*SE PINTA AL ALUMNO Y SUS NOTAS MEDIAS POR ASIGNATURA*/
    echo ("<br>--------------------------<br><br>");
    echo ($alumno1->getNombre()."<br>");
    echo ($alumno1->getApellidos()."<br>");
    echo ($alumno1->getDni()."<br>");
    echo ($alumno1->getIdClase()."<br>");
    echo ("Media de ".$alumno1->getAsignaturas()[0].": ".(($alumno1->getNota("LENGUA")[0]+$alumno1->getNota("LENGUA")[1]+$alumno1->getNota("LENGUA")[2])/2)."<br>");
    echo ("Media de ".$alumno1->getAsignaturas()[1].": ".(($alumno1->getNota("MATEMATICAS")[0]+$alumno1->getNota("MATEMATICAS")[1]+$alumno1->getNota("MATEMATICAS")[2])/2)."<br>");
    echo ("Media de ".$alumno1->getAsignaturas()[2].": ".(($alumno1->getNota("HISTORIA")[0]+$alumno1->getNota("HISTORIA")[1]+$alumno1->getNota("HISTORIA")[2])/2)."<br>");

    /*SE INTRODUCEN LAS NOTAS DEL TERCER TRIMESTRE*/
    $alumno1->setNotas(
        array(
            array(5,6,4),
            array(9,7,4),
            array(7,7,7)
        )
    );

    /*SE PINTA AL ALUMNO Y SUS NOTAS MEDIAS POR ASIGNATURA*/
    echo ("<br>--------------------------<br><br>");
    echo ($alumno1->getNombre()."<br>");
    echo ($alumno1->getApellidos()."<br>");
    echo ($alumno1->getDni()."<br>");
    echo ($alumno1->getIdClase()."<br>");
    echo ("Media de ".$alumno1->getAsignaturas()[0].": ".(($alumno1->getNota("LENGUA")[0]+$alumno1->getNota("LENGUA")[1]+$alumno1->getNota("LENGUA")[2])/3)."<br>");
    echo ("Media de ".$alumno1->getAsignaturas()[1].": ".(($alumno1->getNota("MATEMATICAS")[0]+$alumno1->getNota("MATEMATICAS")[1]+$alumno1->getNota("MATEMATICAS")[2])/3)."<br>");
    echo ("Media de ".$alumno1->getAsignaturas()[2].": ".(($alumno1->getNota("HISTORIA")[0]+$alumno1->getNota("HISTORIA")[1]+$alumno1->getNota("HISTORIA")[2])/3)."<br>");
