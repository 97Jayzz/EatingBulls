<?php
//CONEXION A LA BASE DE DATOS
require_once("config/dataBase.php");

//CLASE USUARIO
require_once("models/Usuario.php");

class UsuarioDAO{
    
    public static function getByEmail($email){
        //conexión a la base de datos
        $conexion = database::connect();

        //Consulta SQL
        $sql="SELECT 
        id, nombre, email, password, telefono, direccion, fecha_nacimiento, rol
        FROM usuarios
        WHERE email=?";

        //se prepara la consulta sin el email para seguridad
        $stmt = $conexion->prepare($sql);

        //se asigna el valor al ?
        $stmt->bind_param("s", $email);

        //se ejectua el stmt
        $stmt->execute();

        $resultado = $stmt->get_result();

        // se consigue el usuario con el email que se pone del stmt
        $usuario = $resultado->fetch_object('Usuario');

        //se cierra el stmt y la conexion
        $stmt->close();
        $conexion->close();

        //se devuelven los usuarios
        return $usuario;
    }

    public static function insert($nombre, $email, $password, $telefono, $direccion, $fecha_nacimiento){
        //conexión a la base de datos
        $conexion = database::connect();

        //convertir la contraseña a hash
        $passwordHash = password_hash($password, PASSWORD_DEFAULT);

        //consulta SQL con interrogantes para la seguridad
        $sql="INSERT INTO usuarios(nombre, email, password, telefono, direccion, fecha_nacimiento)
              VALUES (?, ?, ?, ?, ?, ?)";
        
        // se prepara
        $stmt = $conexion->prepare($sql);

        //se asignan los 6 valores 
        $stmt->bind_param("ssssss", $nombre, $email, $passwordHash, $telefono, $direccion, $fecha_nacimiento);

        //se ejecuta y devuelve true si esta bien
        $resultado = $stmt->execute();

        //se cierra todo
        $stmt->close();
        $conexion->close();

        return $resultado;
    }
}

?>