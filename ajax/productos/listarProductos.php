<?php
require_once "../../modelos/ClassProductos.php"; //incluyo la clase que voy a utilizar que a su vez tiene la conexion

$con = new ClassProductos(); // creo instancia de la clase

if($con){ // pregunto si la instancia fue creada
    $query = $con->listarProductos(); // utilizo el metodo de la clase para listar los productos
    $data = array(); // creo un array para guardar los producto luego con el while
    while($r = $query->fetch_assoc()){ //recorro los productos
        $data[] = $r; //guardo cada producto en el array
    }
    echo json_encode(array("productos"=>$data)); // devuelvo el array en formato json
}