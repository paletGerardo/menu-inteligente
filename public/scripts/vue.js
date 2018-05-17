
var app = new Vue({ // creo la variable

    el: "#app", // indico en que elemento del dom va a funcionar

    created: function(){
        this.listarProductosPorId(-1);
        this.get_categorias();

    },

    data: {
        listaDeCategorias: [],
        listadeProductosPorId:[],
        listaDePedidos: [
            {nombre: 'gold', precio: 95},
            {nombre: 'otra', precio: 95},
            {nombre: 'otraMas', precio: 95},
        ],
        mostrarLista: false,
        item: '',
    },

    methods: { // creo el metodo encardo de la request

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

        agregarALaLista: function (nombre) {
            this.item = nombre;
            this.listaDePedidos.push({
                nombre: this.item,
                precio: 10,
            });
        },

        guardarListaDePedidos: function () {
            //enviar la lista a la bdd
        },



    }

});