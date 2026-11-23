<?php

require_once("models/ProductoDAO.php");

class cartaController{

    public function index(){
        // Se consiguen todos los productos de la base de datos
        $productos = ProductoDAO::getAll();

        // Vista en la que se quiere mostrar
        $view = "views/productos/listado.php";

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

    
    public function api(){
        $metodo = $_SERVER['REQUEST_METHOD'];
        if($metodo == "GET"){
            $productos = ProductoDAO::getAllJson();
            echo json_encode($productos);
        } else if($metodo == "DELETE"){
            $datos=json_decode(file_get_contents('php://input'),true);
            // ProductoDAO::destroy($datos)
            // http_response_code(500);
           // echo json_encode("el numero recibido es: ".$datos);
        }
    }

    public function show(){

        if(!isset($_GET['id']) || !ctype_digit((string) $_GET['id'])){
            header('Location:?controller=carta');
            exit;
        }

        $producto = ProductoDAO::getById((int) $_GET['id']);

        if($producto === null){
            header('Location:?controller=carta');
            exit;
        }

        $view = "views/productos/show.php";

        include("views/main.php");
    }
}
?>