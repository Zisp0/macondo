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

});

function scrollChatToBottom(id) {
    var div = document.querySelector(id);
    div.scrollTop = div.scrollHeight - div.clientHeight;
}


/* Scroll in chat to end */