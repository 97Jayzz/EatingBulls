<?php 

class Usuario{

    protected $id;
    protected $nombre;
    protected $email;
    protected $password;
    protected $telefono;
    protected $direccion;
    protected $fecha_nacimiento;
    protected $rol;

    //CONSTRUCTOR

    public function __construct(
        $id = null,
        $nombre = null,
        $email = null,
        $password = null,
        $telefono = null,
        $direccion = null,
        $fecha_nacimiento = null,
        $rol = null
    ){
        if ($id !== null) {
            $this->id = $id;
        }

        if ($nombre !== null){
            $this->nombre = $nombre;
        }

        if ($email !== null){
            $this->email = $email;
        }

        if ($password !== null){
            $this->password = $password;
        }

        if ($telefono !== null){
            $this->telefono = $telefono;
        }

        if ($direccion !== null){
            $this->direccion = $direccion;
        }

        if ($fecha_nacimiento !==null){
            $this->fecha_nacimiento = $fecha_nacimiento;
        }
        
        if ($rol !== null){
            $this->rol = $rol;
        }
    }
    //GETTERS

    public function getId(){
        return $this->id;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function getEmail(){
        return $this->email;
    }

    public function getPassword(){
        return $this->password;
    }

    public function getTelefono(){
        return $this->telefono;
    }

    public function getDireccion(){
        return $this->direccion;
    }

    public function getFechaNacimiento(){
        return $this->fecha_nacimiento;
    }

    public function getRol(){
        return $this->rol;
    }
}
?>
