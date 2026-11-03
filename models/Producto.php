<?php

class Producto{

    protected $id;
    protected $categoria_id;
    protected $nombre;
    protected $descripcion;
    protected $precio;
    protected $imagen;
    protected $activo;
    protected $categoria;

    //  CONSTRUCTOR

    public function __construct(
        $id = null,
        $categoria_id = null,
        $nombre = null,
        $descripcion = null,
        $precio = null,
        $imagen = null,
        $activo = null,
        $categoria = null,
    ){
        if($id != null){
            $this->id = $id;
        }

        if($categoria_id != null){
            $this->categoria_id = $categoria_id;
        }

        if($nombre != null){
            $this->nombre = $nombre;
        }

        if($descripcion != null){
            $this->descripcion = $descripcion;
        }

        if($precio != null){
            $this->precio = $precio;
        }

        if($categoria != null){
            $this ->categoria = $categoria;
        }
    }


    //  GETTERS

    public function getId(){
        return $this->id;
    }

    public function getCategoriaId(){
        return $this->categoria_id;
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

    public function getCategoria(){
        return $this->categoria;
    }


    // SETTERS

    public function setId($id){
        $this->id = $id;
        return $this;
    }

    public function setCategoriaId($categoria_id){
        $this->categoria_id = $categoria_id;
        return $this;
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;
        return $this:
    }

    public function setDescripcion($descripcion){
        $this->descripcion = $descripcion;
        return $this;
    }

    public function setPrecio($precio){
        $this->precio = $precio;
        return $this;
    }

    public function setImagen($imagen){
        $this->imagen = $imagen;
        return $this;
    }

    public function setActivo($activo){
        $this->activo = $activo;
        return $this;
    }

    public function setCategoria($categoria){
        $this->categoria = $categoria;
        return $this;
    }
}
?>