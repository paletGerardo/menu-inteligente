<?php
require_once "../../config/conexion.php";

Class ClassProductos
{
    public function __construct()
    {

    }

    public function listarProductos()
    {
        $sql="SELECT * FROM productos";
        return ejecutarConsulta($sql);
    }



}


?>