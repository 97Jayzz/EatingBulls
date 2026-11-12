<?php

require_once("models/ProductoDAO.php");

class cartaController{

    public function index(){
        // Se consiguen todos los productos de la base de datos
        $productos = ProductoDAO::getAll();

        // Vista en la que se quiere mostrar
        $view = "views/carta/listado.php";

        $categorias = [];               // id de la categoria => nombre
        $productosPorCategoria = [];    // id de la categoria => lísta de sus productos

        foreach($productos as $producto){
            $idCategoria = $producto->getCategoriaId();

            $categorias[$idCategoria] = $producto->getCategoria();
            $productosPorCategoria[$idCategoria][] = $producto;
       }
        
        // Se carga la estructura principal
        include ("views/main.php");
    }
}

?>