<?php
    // CONEXION CON LA BASE DE DATOS
    require_once("config/dataBase.php");

    // CLASE DE PRODUCTOS
    require_once("models/Producto.php");

    class ProductoDAO{

        public static function getAll(){

            //1. connexion con la base de datos
            $conexion = dataBase::connect();

            //2. Preparamos la consulta SQL
            $sql ="SELECT
                        p.id,
                        p.categoria_id,
                        p.nombre,
                        p.descripcion,
                        p.precio,
                        p.imagen,
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

        public static function getById($id){

        //1. connexion con la base de datos
        $conexion = database::connect();

        $sql = "SELECT
                    p.id,
                    p.categoria_id,
                    p.nombre,
                    p.descripcion,
                    p.precio,
                    p.imagen,
                    c.nombre AS categoria
                FROM productos p
                INNER JOIN categorias c
                ON p.categoria_id = c.id
                WHERE p.id=?";

        // 3. se prepara la consulta sin el id para seguridad
        $stmt = $conexion->prepare($sql);

        // 4. se asigna el valor al ?
        $stmt->bind_param("i", $id);

        // 5. se ejecuta el stmt
        $stmt->execute();

        $resultado = $stmt->get_result();

        // 6. se consigue el producto con el id del stmt que hemos hecho antes
        $producto = $resultado->fetch_object('Producto');

        //5. Se cierra el stmt y la conexion  
        $stmt->close();
        $conexion->close();

        //6. Se devuelven los productos
        return $producto;
        
        }
    }
?>