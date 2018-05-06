function init(){
    
    $.post('../ajax/indexAjax.php?op=listarCategorias', function(r){
        $('.cadaCategoria').html(r);
    });
    
    $.post('../ajax/indexAjax.php?op=listarProductos', function(r){
        $('.slideContainer').html(r);
    });


}


$(document).ready(function () {
    $('#lista').hide();
    $("#mostrar").on("click", function () {
        $('#lista').show("swing"); //muestro mediante id
    });
    $("#ocultar").on("click", function () {
        $('#lista').hide("swing"); //oculto mediante id
    });
});

//funciones de la pagina

function cargarPrdPorId(idCat){
    $.post('../ajax/indexAjax.php?op=cargarPrdPorId',{id:idCat} ,function(r){
        $('.slideContainer').html(r);
    });
}

function cargarEnLista(id) {
    $.post('../ajax/indexAjax.php?op=cargarEnLista', {id: id}, function (r) {
        $('#lista').append(r);
    });
}

// Funciones del Slider

var indicador = 0;
$(document).on('ready', function(){
    $('.left').on('click', function(e){
        moveSlider('left');
    });
    
    $('.right').on('click', function(e){
        moveSlider('right');
    });
    
    defineSizes();
});

$(window).on('resize', defineSizes);

function defineSizes(){
    $('.form_container .slide').each(function(i,el){
        $(el).css({
            'background-image': "url("+$(el).data("background")+")",
            'height': ($('.form_container').width() * 0.45) + 'px',
            'width': ($('.form_container').width()) + 'px'
        });
    });
}

function moveSlider(direccion){
    var limite = $('.form_container .slide').length;
    indicador = (direccion == 'right') ? indicador + 1 : indicador -1;
    indicador = (indicador >= limite) ? 0 : indicador;
    indicador = (indicador < 0) ? limite - 1 : indicador;
    
    $('.form_container .slideContainer').animate({
        'margin-left': -(indicador * $('.form_container').width()) + 'px'
    })
}


init();