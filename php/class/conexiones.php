<?php
   
    class Conexion {
        private $conexion;
        private $resultado;
        
        function conectar() {
            $this->conexion = new mysqli("localhost", "root", "", "cazada");
            if ($this->conexion->connect_error){
                die("Error de Conexion(.$this->conexion->connect_errno.).$this->conexion->connect_error");
            }
        }
        function desconectar() {
            $this->conexion->close();
        }
        
        function consulta($sql){
            $array = array();
            $this->conectar();
            $this->resultado = $this->conexion->query($sql);
            while ($fila = $this->resultado->fetch_assoc()){
                array_push($array, $fila);
            }
            $this->desconectar();
            return $array;
        }
        
        function login($usu, $pass){
            $this->conectar();
            $resul = null;
            $this->resultado = $this->conexion->query("SELECT * FROM administradores where Usuario = '$usu' AND Password = '$pass'");
            if ($this->resultado->num_rows > 0){
                $fila = $this->resultado->fetch_assoc();
                $usuario = new stdClass();
                $usuario->usuario = $usu;
                $usuario->mail = $fila['Mail'];
                $_SESSION['usuario'] = $usuario;
                $_SESSION['idCentro'] = $fila['ID_Centro'];
                $resul = 'admin';
            } else {
                $this->resultado = $this->conexion->query("SELECT * FROM profesores where Usuario = '$usu' AND Password = '$pass'");
                if ($this->resultado->num_rows > 0){
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
                    if ($this->resultado->num_rows > 0){
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
