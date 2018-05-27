<?php
require_once "../../config/conexion.php";

Class ClassCategoria
{
    public function __construct()
    {

    }

    public function listarCategorias()
    {
        $sql="SELECT * FROM categorias";
        return ejecutarConsulta($sql);
    }



}


?>