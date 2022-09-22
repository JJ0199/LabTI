function saludar(){
    
}

saludar();

$(document).ready(function(){
    $(".usuario_right").click(function(){
        $("#container_evento").hide();
        $("#sidebar_alumnos").show();
        $("#container_investigador").show();
/*         alert("Se oprimó el botón del usuario");
 */    });

    $(".eventos_right").click(function(){
        $("#sidebar_alumnos").hide();
        $("#container_investigador").hide();
        $("#container_colaborador").hide();
        $("#container_tesista").hide();
        $("#container_serviciosocial").hide();
        $("#container_ep").hide();
        $("#container_alumni").hide();
        $("#container_evento").show();
        
/*         alert("Se oprimó el botón del Eventos");
 */    });

    $(".noticias_right").click(function(){
        $("#sidebar_alumnos").hide();
        $("#container_investigador").hide();
        $("#container_colaborador").hide();
        $("#container_tesista").hide();
        $("#container_serviciosocial").hide();
        $("#container_ep").hide();
        $("#container_alumni").hide();

        });

    $(".eventos_historicos_right").click(function(){
        $("#sidebar_alumnos").hide();
        $("#container_investigador").hide();
        $("#container_colaborador").hide();
        $("#container_tesista").hide();
        $("#container_serviciosocial").hide();
        $("#container_ep").hide();
        $("#container_alumni").hide();

        });
/* En esta sección colocaré las animaciones para la barra lateral de tipos de miembros */
    $("#investigador").click(function(){
        $("#container_investigador").show();
        $("#container_colaborador").hide();
        $("#container_tesista").hide();
        $("#container_serviciosocial").hide();
        $("#container_ep").hide();
        $("#container_alumni").hide();

        });
    $("#colaborador").click(function(){
        $("#container_investigador").hide();
        $("#container_colaborador").show();
        $("#container_tesista").hide();
        $("#container_serviciosocial").hide();
        $("#container_ep").hide();
        $("#container_alumni").hide();

        });

    $("#tesista").click(function(){
        $("#container_investigador").hide();
        $("#container_colaborador").hide();
        $("#container_tesista").show();
        $("#container_serviciosocial").hide();
        $("#container_ep").hide();
        $("#container_alumni").hide();

        });

/* Finalizo las animaciones para la barra lateral de tipos de miembros */



});