/* Scroll in chat to end */
/* Scroll in chat to end */
$(document).ready(function () {
    scrollChatToBottom(".chat-body");

    $(".chat-header").click(function (e) { 
        $(".chat-visible").slideToggle(500);
    });

    $(".closeChat").click(function (e) {
        clearInterval(nuevosMensajes);
        $(".chat-container").slideUp(500);
        $(".chat-visible").slideUp();
    });

    $("#cargaChats .dropdown-item").click(function (e) { 
        e.preventDefault();
        //Prueba eso si quieres, es una forma de vista
        /*if(chatVisible == true && idUserChat != this.getAttribute('value')){
            $(".chat-container").slideUp(500);
        }*/
        idUserChat = this.getAttribute('value');
        nombreUserChat = this.innerText;

        $("#nombreUserChat").text(nombreUserChat);
        $(".chat-container").slideDown(500);
        chatVisible = true;
    });
    
    cargarChats();
});

function scrollChatToBottom(id) {
    var div = document.querySelector(id);
    div.scrollTop = div.scrollHeight - div.clientHeight;
}

function cargarChats(){
    axios.post(`/cargarChats`, {
    }).then(res => {
        $("#cargaChats").empty();
        if(res.data[1].length > 0){
            res.data[1].forEach(element => {
                $("#cargaChats").append(
                    `<li>
                        <a class="dropdown-item chatDis" href="#" value="`+element[0].idChat+`">
                            <div class="photoName d-flex align-items-center">
                                <img src="img/default_user.png" alt="" class="user-pic">
                                <span>`+element[1].nombre+` `+element[1].apellido+`</span>
                            </div>
                        </a>
                    </li>`
                );
            });

            $("#cargaChats .dropdown-item").click(function (e) { 
                e.preventDefault();
                //Prueba eso si quieres, es una forma de vista
                /*if(chatVisible == true && idUserChat != this.getAttribute('value')){
                    $(".chat-container").slideUp(500);
                }*/
                idChat = this.getAttribute('value');
                $(".chat-body").empty();
                clearInterval(nuevosMensajes);
                recuperarMensajes();
                nombreUserChat = this.innerText;
                $("#nombreUserChat").text(nombreUserChat);
                $(".chat-container").slideDown(500);
                chatVisible = true;
            });
        }
    }).catch(error => {
        console.log("ha ocurrido un error\n"+error);
    });
}
/* Scroll in chat to end */