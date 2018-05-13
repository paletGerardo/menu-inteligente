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
                            </div>
                            <div class="botones"> <button class="btn btn-primary btn-lg" onClick="cargarEnLista(' . $reg->id . ')">Añadir al pedido </button> <strong> Precio: </strong>' . $reg->precio . ' </div>
                        </div>
                        
                        <div class="cadaSlide-imagen"><img src="img/' . $reg->image .  '.png" alt=""> </div> 
                        
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
    case 'cargarEnLista':

        $rspta = $objBDD->cargarEnLista($id);

        while ($reg = $rspta->fetch_object()) {
            echo '<div class="listaItem">
                        <div id="accordion">
                          <div class="card">
                            <div class="card-header" id="heading' . $reg->id . '">
                              <h5 class="mb-0">
                                <button class="btn btn-link collapsed est_btn" data-toggle="collapse" data-target="#collapse' . $reg->id . '" aria-expanded="false" aria-controls="collapse' . $reg->id . '">
                                  ' . $reg->nombre . '
                                </button>
                              </h5>
                            </div>
                            <div id="collapse' . $reg->id . '" class="collapse" aria-labelledby="heading' . $reg->id . '" data-parent="#accordion">
                              <div class="card-body d-flex">
                                 <div class="col-8">' . $reg->descripcion . '</div><div class="col-4"><img src="img/' . $reg->image . '.png"></div>
                              </div>
                            </div>
                        </div>
                   
                       
                    </div>';
        }
        break;



}

?>