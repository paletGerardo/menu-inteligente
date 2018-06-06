<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Digital</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/bootstrap.css">
</head>

<body>

<div id="app">

    <!--INICIO MENU CATEGORIAS///////////////////////////////////////////////-->
    <div id="MENU">
        <div class="MENU_categorias d-flex justify-content-around">
            <template v-for="cat of listaDeCategorias">
                <div class="MENU_item" v-on:click="listarProductosPorId(cat.id)">
                    <img :src="'img/categorias/' + cat.image + '.png'" alt="" v-on:click="moveSlider('centro',true)">
                </div>
            </template>

        </div>
    </div>
    <!--FIN DE MENU CATEGORIAS///////////////////////////////////////////////-->
    
    
    <!--INICIO MENU PRODECTOS///////////////////////////////////////////////-->
    <div id="CUERPO">
        <div class="form_container">
            <div class="slideContainer" id="productos">
                <div class="slide" v-for="(prd, index) in listadeProductosPorId">

                    <div class="cadaSlide">
                        <div class="card">
                            <div class="cadaSlide-titulo card-header">{{prd.nombre}}:</div>
                            <div class="cadaSlide-descrip card-body">
                                <p><strong> Sabor: </strong>{{prd.sabor}}</p>
                                <p><strong> Descripción: </strong>{{prd.descripcion}}</p>
                                <p><strong> Graduación Alcohólica: </strong>{{prd.graduacion}}</p>
                            </div>
                            <div class="botones d-flex justify-content-around">
                                <button class="btn btn-primary btn-lg" v-on:click="agregarALaLista(prd.nombre, prd.precio)" onclick = "this.disabled = true">  {{textoBtn}} </button>
                                <strong class="estilo_precio"> $ {{prd.precio}} </strong>
                            </div>
                        </div>
                        <div class="cadaSlide-imagen col-6"><img :src="'img/' + prd.image + '.png'" alt=""></div>
                    </div>
                </div>

                <button class="left"></button>
                <button class="right"></button>
            </div>
        </div>
    </div>
    <!--FIN DE PRODUCTOS ///////////////////////////////////////////////-->
    
    
    <!--INICIO LISTA DE PEDIDOS ///////////////////////////////////////////////-->
    <div class="loPedido">
        <div v-on:click="mostrarLista = !mostrarLista"><img src="img/pedido.png" alt=""></div>
    </div>
    <transition name="fade">
        <div id="lista" v-show="mostrarLista">

            <div id="listaCuerpo" class="d-flex flex-column justify-content-center">

                <ul class="listaItem d-flex flex-column align-items-center">
                    <h3 class="titulo">- Tu lista de pedidos -</h3>
                <template v-for="(item, index) in listaDePedidos" :key(id)>

                    <li class="listar_elementos d-flex">
                          <span class="mostrar_descripcion col-6">{{item.nombre}} </span>
                          <span class="mostrar_cantidad col-1">{{item.cantidad}}</span>
                          <span class="modificar_cantidad col-3">
                              <button type="button" class="btn btn-primary" v-on:click="addCantidad(index)">+</button>
                              <button type="button" class="btn btn-primary" v-on:click="quitarCantidad(index)">-</button>

                          </span>
                          <span class="precio col-2">$ {{item.precio}}</span></li>

                </template>

                </ul>


            </div>
            <div id="listaFooter" class="d-flex justify-content-between">
                <div id="aceptar"><img src="img/aceptar.png"></div>
                <div class="precioTotal d-flex justify-content-end"  >TOTAL: &nbsp $ {{precioTotal}}</div>
                <div id="ocultar" class="d-flex justify-content-end" v-on:click="mostrarLista = !mostrarLista"><img src="img/regresar.png"></div>

            </div>
        </div>
    </transition>
    <!--FIN LISTA DE PEDIDOS ///////////////////////////////////////////////-->
    
    
    <!--INICIO PRESENTACION ///////////////////////////////////////////////-->
    <transition name="slide-fade">
        <div id="mostrarPresentacion" class="" v-on:click="mostrarPresentacion = !mostrarPresentacion" v-show="mostrarPresentacion" >
        <div class="presentacion_item" v-on:click="listarProductosPorId(1)">cerveza</div>
        <div class="presentacion_item" v-on:click="listarProductosPorId(2)">tragos</div>
        <div class="presentacion_item" v-on:click="listarProductosPorId(3)">tragos</div>
        <div class="presentacion_item" v-on:click="listarProductosPorId(4)">tragos</div>
        </div>
    </transition>
    <!--INICIO DE PRESENTACION /////////////////////////////////////////////////-->
    
</div>
</body>
<!-- production version, optimized for size and speed -->
<!--<script src="https://cdn.jsdelivr.net/npm/vue"></script>-->
<script src="js/vue.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue-resource@1.3.4"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="scripts/index.js"></script>
<script src="scripts/vue.js"></script>
<script src="js/bootstrap.js"></script>

</html>
