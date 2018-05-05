var urlProductos = '../ajax/productos/listarProductos.php';
var urlCategorias = '../ajax/categorias/listarCategorias.php';
var mostrar = false;


var app = new Vue({ // creo la variable

    el: "#app", // indico en que elemento del dom va a funcionar

    created: function(){
        this.get_productos();
        this.get_categorias();
        this.mostrarLista();
    },

    data: {
        listadeProductos: [], //creo array para recibir los elementos de la request
        listaDeCategorias: [],
    },

    methods: { // creo el metodo encardo de la request
        get_productos: function () {
            this.$http.get(urlProductos).then(function (response) {
                this.listadeProductos = response.data.productos;
            })
        },

        get_categorias: function () {
            this.$http.get(urlCategorias).then(function (response) {
                this.listaDeCategorias = response.data.categorias;
            })
        },

        mostrarLista: function () {
            this.mostrar = true;
            console.log("true");
        }

    }

});
