
var app = new Vue({                 // creo la variable

    el: "#app",                     // indico en que elemento del dom va a funcionar

    created: function(){
        this.listarProductosPorId(-1);
        this.get_categorias();

    },

    data: {
        listaDeCategorias: [],      // carga lista de categorias en el menu
        listadeProductosPorId:[],   // carga todos los productos al principio y despues los carga por id
        listaDePedidos: [],         // lista para los pedidos
        mostrarLista: false,        // flag para no mostrar la lista al principio.
        precioTotal: 0,                   // suma los precios de los productos y se muetra en la lista.
    },

    methods: {

        listarProductosPorId: function (id) {
            if(id < 0){
                this.$http.get('../ajax/productos/listarProductos.php').then(function (response) {
                    this.listadeProductosPorId = response.data.productos;
                })
            }else{
                this.$http.get('../ajax/productos/listarProductosPorId.php?id='+id).then(function (response) {
                    this.listadeProductosPorId = response.data.productos;
                })
            }
        },

        get_categorias: function () {
            this.$http.get('../ajax/categorias/listarCategorias.php').then(function (response) {
                this.listaDeCategorias = response.data.categorias;
            })
        },

        agregarALaLista: function (nombre, precio) {
            this.precioTotal = 0;
            precio = parseInt(precio);
            this.listaDePedidos.push({
                nombre: nombre,
                precio: precio,
            });
            for(i=0 ; i < this.listaDePedidos.length ; i++){
                this.precioTotal += this.listaDePedidos[i].precio;
            }
        },

        guardarListaDePedidos: function () {
            //enviar la lista a la bdd
        },



    }

});