<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">


    
</head>

<body>

    <div id="contenedor">

        <!--INICIO MENU CATEGORIAS///////////////////////////////////////////////-->
        <div id="menu">
            <div class="cadaCategoria container">
                
            </div>
        </div>
        <div id="cuerpo">
            <div class="form_container">
                <div class="slideContainer" id="algo">
                    <div class="slide" v-for="prd in listadeProductos">
                        <div class="cadaSlide">
                            <div class="card">
                                <div class="cadaSlide-titulo card-header"></div>
                                <div class="cadaSlide-descrip card-body">
                                    <p> <strong> Sabor: </strong>{{prd.sabor}}</p>
                                    <p> <strong> Descripción: </strong>{{prd.descripcion}}</p>
                                    <p> <strong> Graduación Alcohólica: </strong>{{prd.graduacion}}</p>
                                    <p> <strong> Precio: </strong>{{prd.precio}}</p>
                                </div>
                            </div>

                            <div class="cadaSlide-imagen col-6">imprimir imagen </div>
                        </div>
                    </div>

               <div class="loPedido">
                        <img src="img/pedido.png">
                </div>
                <div class="slideContainer">

                </div>
                <button class="left"></button>
                <button class="right"></button>
            </div>

        </div>
    </div>
</body>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="scripts/index.js"></script>
<script src="js/bootstrap.js"></script>

</html>
