/* Scroll in chat to end */
$(document).ready(function () {
    scrollChatToBottom(".chat-body");

    $(".chat-header").click(function (e) { 
        $(".chat-visible").slideToggle(500);
    });

});

function scrollChatToBottom(id) {
    var div = document.querySelector(id);
    div.scrollTop = div.scrollHeight - div.clientHeight;
}

/* Scroll in chat to end */