// Funciones del Slider

var indicador = 0;
$(document).on('ready', function(){
    $('.left').on('click', function(e){
        moveSlider('left', false);
    });

    $('.right').on('click', function(e){
        moveSlider('right', false);
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

function moveSlider(direccion, cambio){
    if(!cambio){
        var limite = $('.form_container .slide').length;
        indicador = (direccion == 'right') ? indicador + 1 : indicador -1;
        indicador = (indicador >= limite) ? 0 : indicador;
        indicador = (indicador < 0) ? limite - 1 : indicador;

        $('.form_container .slideContainer').animate({
            'margin-left': -(indicador * $('.form_container').width()) + 'px'
        })
    }else{
        indicador = 1000;
        var limite = $('.form_container .slide').length;
        indicador = (direccion == 'right') ? indicador + 1 : indicador -1;
        indicador = (indicador >= limite) ? 0 : indicador;
        indicador = (indicador < 0) ? limite - 1 : indicador;

        $('.form_container .slideContainer').animate({
            'margin-left': -(indicador * $('.form_container').width()) + 'px'
        })
    }
}
