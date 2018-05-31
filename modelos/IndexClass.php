<?php 
//Incluímos inicialmente la conexión a la BDD
require "../config/conexion.php";

Class IndexClass
{
	//Implementamos nuestro constructor
	public function __construct()
	{

	}

	//Implementar un método para listar los registross
	public function listarCategorias()
	{
		$sql="SELECT * FROM categorias";
		return ejecutarConsulta($sql);		
	}
    
    public function listarProductos(){
        $sql="SELECT * FROM productos";
        return ejecutarConsulta($sql);
    }

    /**
     * @param $idCat
     * @return bool|mysqli_result
     */
    public function cargarPrdPorId($idCat){
        $sql="SELECT * FROM productos where idCategoria = $idCat";
        return ejecutarConsulta($sql);
    }


}

   /* $laClase = new IndexClass();
    $rspta= $laClase->listarSubCategorias();
    while ($reg = $rspta->fetch_object()){
        echo $reg->id;
    }*/

?>