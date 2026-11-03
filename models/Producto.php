<?php

class Producto{

    protected $id;
    protected $categoria_id;
    protected $nombre;
    protected $descripcion;
    protected $precio;
    protected $imagen;
    protected $activo

    //  CONSTRUCTOR

    public function __construct(
        $id = null,
        $categoria_id = null,
        $nombre = null,
        $descripcion = null,
        $precio = null,
        $imagen = null,
        $activo = null
    ){
        $this->id = $id;
        $this->categoria_id = $categoria_id;
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;
        $this->precio = $precio;
        $this->imagen = $imagen;
        $this->activo = $activo;
    }


    //  GETTERS

    public function getId(){
        return $this->id;
    }

    public function getCategoriaId(){
        return $this->categoriaid;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function getDescripcion(){
        return $this->descripcion;
    }

    public function getPrecio(){
        return $this->precio;
    }

    public function getImagen(){
        return $this->imagen;
    }

    public function getActivo(){
        return $this->activo;
    }


    // SETTERS

    public function setId($id){
        $this->id = $id;
        return $this;
    }

    public function setCategoriaId($categoria_id){
        $this->categoriaid = $categoria_id;
        return $this;
    }

    public function setDescripcion($descripcion){
        $this->descripcion = $descripcion;
        return $this;
    }

    public function setPrecio($precio){
        $this->precio = $precio;
        return $this;
    }

    public funciton setImagen($imagen){
        $this->imagen = $imagen;
        return $this;
    }

    public function setActivo($activo){
        $this->activo = $activo;
        return $this;
    }
}




?>