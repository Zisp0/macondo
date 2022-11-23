/* Scroll in chat to end */
/* Scroll in chat to end */
$(document).ready(function () {
    scrollChatToBottom(".chat-body");

    $(".chat-header").click(function (e) { 
        $(".chat-visible").slideToggle(500);
    });

    $(".closeChat").click(function (e) { 
        $(".chat-container").slideUp(500);
        $(".chat-visible").slideUp();
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
        let chats = res.data[1][0];
        let users = res.data[1][1];
        if(res.data[1].length > 0){
            for(let i = 0; i < res.data[1].length; i++){
                $("#cargaChats").append(
                    `<li>
                        <a class="dropdown-item" href="#" value="`+chats[i].idChat+`">
                            <div class="photoName d-flex align-items-center">
                                <img src="img/default_user.png" alt="" class="user-pic">
                                <span>`+users[i].nombre+` `+users[i].apellido,+`</span>
                            </div>
                        </a>
                    </li>`
                );
            }
        }
    }).catch(error => {
    });
}
/* Scroll in chat to end */