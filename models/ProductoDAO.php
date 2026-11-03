<?php
    // CONEXION CON LA BASE DE DATOS
    require_once("Eating-Bulls/config/dataBase.php");

    // CLASE DE PRODUCTOS
    require_once("/Producto.php");

    class ProductoDAO{

        public static function getAll(){

            //1. connexion con la base de datos
            $conexion = Database::connect();

            //2. Preparamos la consulta SQL
            $sql ="SELECT
                        p.id,
                        p.categoria_id,
                        p.nombre,
                        p.descripcion,
                        p.precio,
                        c.nombre AS categoria
                    FROM productos p
                    INNER JOIN categorias c
                    ON  p.categoria_id = c.id
                    ORDER BY c.id, p.id";

            //3. Se ejecuta la consulta
            $resultado = $conexion->query($sql);

            //4. Se guardan los productos en una array
            $productos = [];

            if($resultado){
                while($producto = $resultado->fetch_object('Producto')){
                    $productos[] = $producto;
                }
            }
            //5. Se cierra la conexion
            $conexion->close();

            //6. Se devuelven los productos
            return $productos;
            
        }
    }
?>