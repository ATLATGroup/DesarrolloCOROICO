/*Ventana uno*/
function openventana(){
    $(".ventanaModal").slideDown("slow");
}

/*Venatana dos*/
function openventana01(){
    $(".ventanaModal01").slideDown("slow");
}

/*Venatana tres*/
function openventana02(){
    $(".ventanaModal02").slideDown("slow");
}

/*Ventana cuatro*/
function openventana03(){
    $(".ventanaModal03").slideDown("slow");
}

/*Ventana cinco*/
function openventana04(){
    $(".ventanaModal04").slideDown("slow");
}

/*Ventana seis*/
function openventana05(){
    $(".ventanaModal05").slideDown("slow");
}

/*close ventana uno*/
function closeventana(){
    $(".ventanaModal").slideUp("fast");
}

/*close ventana dos*/
function closeventana01(){
    $(".ventanaModal01").slideUp("fast");
}

/*close ventana tres*/
function closeventana02(){
    $(".ventanaModal02").slideUp("fast");
}

/*close ventana cuatro*/
function closeventana03(){
    $(".ventanaModal03").slideUp("fast");
}

/*close ventana cuatro*/
function closeventana04(){
    $(".ventanaModal04").slideUp("fast");
}

/*close ventana cinco*/
function closeventana05(){
    $(".ventanaModal05").slideUp("fast");
}

/************************************************************************************/

/*Ventana uno*/
function eyeopenventana(){
    $(".ventanaModal0").slideDown("slow");
}

/*Venatana dos*/
function eyeopenventana01(){
    $(".ventanaModal001").slideDown("slow");
}

/*Venatana tres*/
function eyeopenventana02(){
    $(".ventanaModal002").slideDown("slow");
}

/*Ventana cuatro*/
function eyeopenventana03(){
    $(".ventanaModal003").slideDown("slow");
}

/*Ventana cinco*/
function eyeopenventana04(){
    $(".ventanaModal004").slideDown("slow");
}

/*Ventana seis*/
function eyeopenventana05(){
    $(".ventanaModal005").slideDown("slow");
}

/*close ventana uno*/
function eyecloseventana(){
    $(".ventanaModal0").slideUp("fast");
}

/*close ventana dos*/
function eyecloseventana01(){
    $(".ventanaModal001").slideUp("fast");
}

/*close ventana tres*/
function eyecloseventana02(){
    $(".ventanaModal002").slideUp("fast");
}

/*close ventana cuatro*/
function eyecloseventana03(){
    $(".ventanaModal003").slideUp("fast");
}

/*close ventana cuatro*/
function eyecloseventana04(){
    $(".ventanaModal004").slideUp("fast");
}

/*close ventana cinco*/
function eyecloseventana05(){
    $(".ventanaModal005").slideUp("fast");
}

/************************************************************************************/

/*Bloqueo*/
$(document).ready(function(){
    $('#informacion1').bind("cut copy paste",function(e) {
        e.preventDefault();
    });
});