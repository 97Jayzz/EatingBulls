<?php

require_once("models/ProductoDAO.php");

class cartaController{

    public function index(){
        // Se consiguen todos los productos de la base de datos
        $productos = ProductoDAO::getAll();

        // Vista en la que se quiere mostrar
        $view = "views/carta/listado.php";

        // Se carga la estructura principal
        include "views/main.php";
    }
}

?>