<?php
require_once "../modelos/IndexClass.php";

$objBDD=new IndexClass();

$id= isset($_POST["id"])? limpiarCadena($_POST["id"]):"";


switch ($_GET["op"]){

    case 'listarCategorias':
        $rspta=$objBDD->listarCategorias();
        while($reg = $rspta->fetch_object()){
            echo '<div class="item" onclick="cargarPrdPorId(' . $reg->id . ')" name="item' . $reg->id . '" id="item' . $reg->id . ' ">
                        <img src="img/categorias/' . $reg->image . '.png" alt="">
                </div>';
        }
        break;

    case 'listarProductos':
        $rspta=$objBDD->listarProductos();
        while($reg = $rspta->fetch_object()){
            echo ' 
                <div class="slide">
                    <div class="cadaSlide">
                    <div class="card">
                        <div class="cadaSlide-titulo card-header">' . $reg->nombre .  '</div>
                        <div class="cadaSlide-descrip card-body">
                            <p> <strong> Sabor: </strong>' . $reg->sabor . ' </p>
                            <p> <strong> Descripción: </strong>' . $reg->descripcion .  '</p>
                            <p> <strong> Graduación Alcohólica: </strong>' . $reg->graduacion . ' </p>
                            <p> <strong> Precio: </strong>' . $reg->precio . ' </p>

                        </div>
                    </div>
                        
                        <div class="cadaSlide-imagen col-6"><img src="img/' . $reg->image .  '.png" alt=""> </div>                        
                    </div>
                </div> ';
        }
        break;

    case 'cargarPrdPorId':
        $rspta=$objBDD->cargarPrdPorId($id);
        while($reg = $rspta->fetch_object()){
            echo ' 
                <div class="slide">
                    <div class="cadaSlide">
                    <div class="card">
                        <div class="cadaSlide-titulo card-header">' . $reg->nombre .  ':</div>
                        <div class="cadaSlide-descrip card-body">
                            <p> <strong> Sabor: </strong>' . $reg->sabor . ' </p>
                            <p> <strong> Descripción: </strong>' . $reg->descripcion .  '</p>
                            <p> <strong> Graduación Alcohólica: </strong>' . $reg->graduacion . ' </p>
                            <p> <strong> Precio: </strong>' . $reg->precio . ' </p>
                        </div>
                    </div>
                        
                        <div class="cadaSlide-imagen col-6"><img src="img/' . $reg->image .  '.png" alt=""> </div>                        
                    </div>
                </div> ';
            //echo $reg->id . $reg->img;
        }
        break;



}

?>
