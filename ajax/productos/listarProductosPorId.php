<?php
require_once "../../modelos/ClassProductos.php"; //incluyo la clase que voy a utilizar que a su vez tiene la conexion

    $id= isset($_GET["id"])? limpiarCadena($_GET["id"]):"";
    $productos = new ClassProductos(); // creo instancia de la clase

    $result = $productos->listarProductosPorId($id); // utilizo el metodo de la clase para listar los productos
    $data = array(); // creo un array para guardar los producto luego con el while

    while($r = $result->fetch_assoc()){ //recorro los productos
        $data[] = $r; //guardo cada producto en el array
    }
    echo json_encode(array("productos"=>$data)); // devuelvo el array en formato json
