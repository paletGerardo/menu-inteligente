
var listarProductos;
var urlProductos = '../ajax/productos/listarProductos.php';



listarProductos = new Vue({ // creo la variable

    el: "#algo", // indico en que elemento del dom va a funcionar

    created: function(){
        this.get_productos();

    },

    data: {
        listadeProductos: [] //creo array para recibir los elementos de la request
    },

    methods: { // creo el metodo encardo de la request
        get_productos: function () {
            this.$http.get(urlProductos).then(function (response) {
                this.listadeProductos = response.data.productos;
            })
        }
    }

});