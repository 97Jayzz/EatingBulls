<?php

require_once("models/UsuarioDAO.php");

class usuarioController{
    public function login(){
        $error = null;

        if ($_SERVER['REQUEST_METHOD'] === 'POST'){
            $email = trim($_POST['email'] ?? '');
            $password = $_POST['password'] ?? '';

            $usuario = UsuarioDAO::getByEmail($email);

            if ($usuario !== null && password_verify($password, $usuario->getPassword())){
                session_regenerate_id(true);
                $_SESSION['usuario_id'] = $usuario->getId();
                $_SESSION['nombre_user'] = $usuario->getNombre();
                $_SESSION['rol_user'] = $usuario->getRol();
                header('Location:?controller=carta');
                exit;
            }

            $error = "Hay un error en los valores introducidos";
        }

        $view = "views/usuarios/login.php";
        include("views/main.php");
    }

    public function logout(){
        session_unset();
        session_destroy();
        header('Location:?controller=carta');
        exit();

    }
}

?>