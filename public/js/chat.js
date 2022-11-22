const msgerForm = get(".msger-inputarea");
const msgerInput = get(".msger-input");
const msgerChat = get(".msger-chat");
const PERSON_IMG = "https://image.flaticon.com/icons/svg/145/145867.svg";
const chatWith = get(".chatWith");
const typing = get(".typing");
const chatStatus = get(".chatStatus");
const idChat = 10;
var fecha = "";
var hora = "";

msgerForm.addEventListener("submit", event => {
  event.preventDefault();

  const msgText = msgerInput.value;
  if (!msgText) return;

  formatDate(new Date());

  axios.post('/message/sent', {
    fecha: fecha,
    hora: hora,
    contenido: msgText,
    idChat: 10
  }).then(res => {
    console.log(res);
    console.log(res.data.fecha);
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