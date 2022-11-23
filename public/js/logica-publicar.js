//Para publicacion
var tituloPost = "";
var categoriaPost = "";
var contenidoPost = "";

//Para comentario
var idPublicacion = -1;
var contentComentario = "";

//Para chat
var idUserChat = -1;
var nombreUserChat = "";
var mensajeSaliente = "";
var chatVisible = false;

//para calificar
var calificacion = -1;


function validarNone(dato) {
    return dato !== "";
}

$(document).ready(function () {
    $(".chat-container").hide();
    $("#publicar").submit(function (e) { 
        e.preventDefault();
        let datos = [$("#tituloPublicacion").val(),$("#categoriaPublicacion").val(),$("#contenidoPublicacion").val()];
        tituloPost = datos[0], categoriaPost = datos[1], contenidoPost = datos[2];

        //Si todo está bien se procede a enviar la info la DB
        if(datos.every(validarNone)){
            formatDate(new Date());
            axios.post('/publicar', {
                fecha: fecha,
                hora: hora,
                titulo: tituloPost,
                contenido: contenidoPost,
                categoria: categoriaPost
            }).then(res => {
                console.log(res);
            }).catch(error => {
                console.log("ha ocurrido un error\n"+error);
            });

            document.getElementById('cerrarModalPublicar').click();
            //despues de enviar, limpiamos los campos
            $("#tituloPublicacion").val("");
            $("#categoriaPublicacion").val("");
            $("#contenidoPublicacion").val("");
        }

    });
    
    $("#cerrarModalPublicar").click(function (e) { 
        e.preventDefault();
        $("#tituloPublicacion").val("");
        $("#categoriaPublicacion").val("");
        $("#contenidoPublicacion").val("");
    });

    $(".pubCom").submit(function (e) { 
        e.preventDefault();
        idPublicacion = 1;
        contentComentario = $("#comentario").val();

        //Si todo está bien se procede a enviar la info la DB
        if(contentComentario !== ""){
            console.log(contentComentario);
            
            //despues de comentar Limpiamos el campo
            $("#comentario").val(" ")
        }
    });

    $("#chatear").submit(function (e) { 
        e.preventDefault();
        mensajeSaliente = $("#mensaje").val();
        if(mensajeSaliente !== ""){
            console.log(mensajeSaliente);
        }
    });

    $("#actCalificar .dropdown-item").click(function (e) { 
        e.preventDefault();
        let calificacionesPosibles = [1,2,3,4,5];
        calificacion = parseInt(this.getAttribute('value'), 10);
        if(calificacionesPosibles.includes(calificacion)){
            //envio la calificacion
        }
    });
});

function publicarComentario(datos){
    formatDate(new Date());
    axios.post('/comentar', {
        fecha: fecha,
        hora: hora,
        contenido: datos.contentComentario,
        idPublicacion: datos.idPublicacion
    }).then(res => {
        console.log(res);
    }).catch(error => {
        console.log("ha ocurrido un error\n"+error);
    });
    console.log(datos);
}