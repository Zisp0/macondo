const msgerForm = get(".msger-inputarea");
const msgerInput = get(".msger-input");
const msgerChat = get(".msger-chat");
const PERSON_IMG = "https://image.flaticon.com/icons/svg/145/145867.svg";
const chatWith = get(".chatWith");
const typing = get(".typing");
const chatStatus = get(".chatStatus");
var idChat;
var fecha = "";
var hora = "";
var ultimoMensaje;

msgerForm.addEventListener("submit", event => {
  event.preventDefault();

  const msgText = msgerInput.value;
  if (!msgText) return;

  formatDate(new Date());

  axios.post('/message/sent', {
    fecha: fecha,
    hora: hora,
    contenido: msgText,
    idChat: idChat
  }).then(res => {
    appendMessage("mensaje-saliente", msgText, fecha + " " + hora);
  }).catch(error => {
    console.log("ha ocurrido un error\n"+error);
  });

  msgerInput.value = "";
});

function appendMessage(side, text, date) {
  //   Simple solution for small apps
  const msgHTML = `
    <div class="${side}">
      <div class="msg-bubble">
        <div class="msg-info">
          <div class="msg-info-time">${date}</div>
        </div>

        <div class="msg-text">${text}</div>
      </div>
    </div>
  `;

  msgerChat.insertAdjacentHTML("beforeend", msgHTML);
  msgerChat.scrollTop += 500;
}

function recuperarMensajes(){
  axios.get(`/message/get/${idChat}`, {
  }).then(res => {
    let idUsuario = res.data.idUsuario;
    let mensajes = res.data.mensajes;
    ultimoMensaje = mensajes[mensajes.length - 1].idMensaje;
    mensajes.forEach(element => {
      if(element.idUsuario == idUsuario){
        appendMessage("mensaje-saliente", element.contenido, element.fecha + " " + element.hora);
      }else{
        appendMessage("mensaje-entrante", element.contenido, element.fecha + " " + element.hora);
      }
    });
  }).catch(error => {
    console.log("ha ocurrido un error\n"+error);
  });

  let nuevosMensajes = setInterval(function(){
    axios.get(`/message/get/last/${idChat}/${ultimoMensaje}`, {
    }).then(res => {
      let idUsuario = res.data.idUsuario;
      let mensajes = res.data.mensajes;
      if(mensajes.length > 0){
        ultimoMensaje = mensajes[mensajes.length - 1].idMensaje;
        mensajes.forEach(element => {
          if(element.idUsuario != idUsuario){
            appendMessage("mensaje-entrante", element.contenido, element.fecha + " " + element.hora);
          }
        });
      }
    }).catch(error => {
      console.log("ha ocurrido un error\n"+error);
    });
  }, 200);
}

// Utils
function get(selector, root = document) {
  return root.querySelector(selector);
}

function formatDate(date) {
  const d = date.getDate();
  const mo = date.getMonth() + 1;
  const y = date.getFullYear();
  const h = "0" + date.getHours();
  const m = "0" + date.getMinutes();

  fecha =`${y}-${mo}-${d}`;
  hora = `${h.slice(-2)}:${m.slice(-2)}`;
}