<?php

class conexion {

    private $conexion;
    private $resultado;

    function conectar() {
        $this->conexion = new mysqli("localhost", "root", "", "cazada");
        if ($this->conexion->connect_error) {
            die("Error de Conexion(.$this->conexion->connect_errno.).$this->conexion->connect_error");
        }
    }

    function desconectar() {
        $this->conexion->close();
    }


    //funciones para clase añadir, eliminar y modificar

    function addClase($tutor, $turno, $clase) {
        $ssql = "insert into clases ('Tutor','Turno','Clase') VALUES ($tutora,$turno,$clase)";
        this->conectar();

        if ($resultado = $this->conexion->query($ssql)) {
            echo "fila insertada";
            //header('Location: index.php');
        } else {
            echo "fila no insertada";
            //header('Location: index.php');
        }
        this->desconectar();
    }


    //#################################################################

    function consulta($query) {
        $array = array();
        $this->conectar();
        $this->resultado = $this->conexion->query($query);
        while ($fila = $this->resultado->fetch_assoc()) {
            array_push($array, $fila);
        }
        $this->desconectar();
        return $array;
    }

    function login($usu, $pass) {
        $this->conectar();
        $resul;
        $this->resultado = $this->conexion->query("SELECT * FROM administradores where Usuario = '$usu' AND Password = '$pass'");
        if ($this->resultado->num_rows > 0) {
            $fila = $this->resultado->fetch_assoc();
            $usuario = new stdClass();
            $usuario->usuario = $usu;
            $usuario->mail = $fila['Mail'];
            $_SESSION['usuario'] = $usuario;
            $resul = 'admin';
        } else {
            $this->resultado = $this->conexion->query("SELECT * FROM profesores where Usuario = '$usu' AND Password = '$pass'");
            if ($this->resultado->num_rows > 0) {
                $fila = $this->resultado->fetch_assoc();
                $usuario = new stdClass();
                $usuario->usuario = $usu;
                $usuario->mail = $fila['Mail'];
                $usuario->nombre = $fila['Nombre'];
                $usuario->apellidos = $fila['Apellidos'];
                $_SESSION['usuario'] = $usuario;
                $resul = 'profe';
            } else {
                $this->resultado = $this->conexion->query("SELECT * FROM padres where Usuario = '$usu' AND Password = '$pass'");
                if ($this->resultado->num_rows > 0) {
                    $fila = $this->resultado->fetch_assoc();
                    $usuario = new stdClass();
                    $usuario->usuario = $usu;
                    $usuario->mail = $fila['Mail'];
                    $usuario->nombre = $fila['Nombre'];
                    $usuario->apellidos = $fila['Apellidos'];
                    $_SESSION['usuario'] = $usuario;
                    $resul = 'padre';
                } else {
                    $resul = 'mal';
                }
            }
        }
        $this->desconectar();
        return $resul;
    }

}

?>
