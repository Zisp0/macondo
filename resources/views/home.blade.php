<!doctype html>
<html lang="es">

<head>
  <title>Macondo Inicio</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1,
      shrink-to-fit=no">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
    integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
  <link rel="stylesheet" href="css/chat.css">
  <link rel="stylesheet" href="css/colores.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="shortcut icon" href="img/butterflyLogo.ico" type="image/x-icon">
</head>

<body>
  <header>
    <div class="header-container">
      <div class="logo-web">
        <img src="img/butterflyLogo.png" class="img-fluid rounded-top" alt="">
        <a href="inicio.html"><span>Macondo</span></a>
      </div>
      <div class="search">
        <form class="input-group needs-validation" novalidate target="_blank">
          <button class="input" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
          <input type="search" class="input form-control" placeholder="Buscar en macondo..." name="busqueda" id="buscar"
            required>
        </form>
      </div>
      <div class="user-options">
        <div>
          <div class="btn-group ">
            <a id="chatBtn" href="#" role="button" data-bs-toggle="dropdown" data-bs-display="static"
              aria-expanded="false">
              <i class="fa-solid fa-comments" role="button"></i>
            </a>
            <ul class="dropdown-menu  dropdown-menu-end" id="cargaChats">
              <li><a class="dropdown-item" href="#" value="1">
                  <div class="photoName d-flex align-items-center">
                    <img src="img/default_user.png" alt="" class="user-pic">
                    <span>César Torres</span>
                  </div>
                </a>
              </li>
              <li><a class="dropdown-item" href="#" value="2">
                  <div class="photoName d-flex align-items-center">
                    <img src="img/default_user.png" alt="" class="user-pic">
                    <span>Wilkar Marquez</span>
                  </div>
                </a>
              </li>
              <li><a class="dropdown-item" href="#" value="3">
                  <div class="photoName d-flex align-items-center">
                    <img src="img/default_user.png" alt="" class="user-pic">
                    <span>Faiber Hernández</span>
                  </div>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div>
          <div class="btn-group ">
            <a id="chatBtn" href="#" role="button" data-bs-toggle="dropdown" data-bs-display="static"
              aria-expanded="false">
              <img id="perfilBtn" src="img/default_user.png"
                alt="Foto de {variable que contiene el nombre del usuario objetivo}" class="user-pic">
            </a>
            <ul class="dropdown-menu  dropdown-menu-end" id="userOptions">
              <li>
                <a class="dropdown-item" href="#" value="profile">
                  <span>Mi perfil</span>
                </a>
              </li>
              <li>
                <form action="/logout" method="post">
                    @csrf
                    <input type="submit" class="dropdown-item" value="Cerrar Sesión">
                </form>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </header>

  <aside>
    <nav class="my-4">
      <ul>
        <button class="item-nav" data-bs-toggle="button" id="btnInicio">
          <li><i class="fa-solid fa-house-chimney"></i><span>Inicio</span></li>
        </button>
        <button class="item-nav" data-bs-toggle="button">
          <li><i class="fa-solid fa-scroll"></i><span>Historias</span></li>
        </button>
        <button class="item-nav" data-bs-toggle="button">
          <li><i class="fa-solid fa-book-open"></i><span>Cuentos</span></li>
        </button>
        <button class="item-nav" data-bs-toggle="button">
          <li><i class="fa-solid fa-book"></i><span>Literatura</span></li>
        </button>
        <button class="item-nav" data-bs-toggle="button">
          <li><i class="fa-brands fa-pied-piper"></i><span>Poesía</span></li>
        </button>
        <button class="item-nav" data-bs-toggle="button">
          <li><i class="fa-solid fa-file-lines"></i><span>Artículos</span></li>
        </button>
      </ul>
    </nav>
    <div class="wordsize-container input-group d-flex flex-row justify-content-center align-items-center">
      <button id="wordSizeUp" class="input"><span>A+</span></button>
      <button id="wordSizeDown" class="input"><span>A-</span></button>
    </div>
  </aside>

  <main id="containerMain" class="d-flex">
    <div class="containerPost align-self-start">
      <div class="publicar d-flex  align-items-center">
        <a href="#"><img src="img/default_user.png" alt="" class="user-pic"></a>
        <button class="input" data-bs-toggle="modal" data-bs-target="#modalPublicar">¿Qué quieres escribir?</button>
      </div>
      <div class="publicaciones">

        <div class="post">
          <div class="postHeader d-flex justify-content-between align-items-center">
            <div class="photoName d-flex align-items-center">
              <img src="img/default_user.png" alt="" class="user-pic">
              <a href="">Usuario carenalga</a>
            </div>
            <i class="fa-solid fa-ellipsis optionPost"></i>
          </div>
          <div class="postBody my-2">
            <h3 class="postTitle">Titulo publicacion</h3>
            <p class="postTxt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit esse atque,voluptates eius
              consequatur excepturi nulla omnis quaerat ex vitae corrupti sint, autem recusandae enim nihil eos
              blanditiis laborum repellat? Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam repellat
              doloribus officiis, ad autem quam cumque dolores maxime tenetur nulla quasi atque eos aliquam quas impedit
              id qui quidem neque.</p>
          </div>
          <div class="postFooter d-flex align-items-center pb-3">
            <div class="me-3 d-flex align-items-center">
              <div class="btn-group  dropup me-2">
                <a id="chatBtn" href="#" role="button" data-bs-toggle="dropdown" data-bs-display="static"
                  aria-expanded="false">
                  <i class="fa-regular fa-star-half-stroke iconAct"></i>
                </a>
                <ul class="dropdown-menu" id="actCalificar">
                  <li><a class="dropdown-item" href="#" value="5">
                      <span>5</span>
                    </a>
                  </li>
                  <li><a class="dropdown-item" href="#" value="4">
                      <span>4</span>
                    </a>
                  </li>
                  <li><a class="dropdown-item" href="#" value="3">
                      <span>3</span>
                    </a>
                  </li>
                  <li><a class="dropdown-item" href="#" value="2">
                      <span>2</span>
                    </a>
                  </li>
                  <li><a class="dropdown-item" href="#" value="1">
                      <span>1</span>
                    </a>
                  </li>
                </ul>
              </div>
              <span>4</span>
            </div>
            <div class="d-flex align-items-center">
              <a href="#collapseComentarios" data-bs-toggle="collapse" aria-expanded="false"
                aria-controls="collapseComentarios"><i class="fa-regular fa-comment iconAct me-2"></i></a>
              <span>100</span>
            </div>
          </div>
          <div class="collapse pb-2" id="collapseComentarios">
            <div class="comentarios">
              <div class="post">
                <div class="postHeader d-flex justify-content-between align-items-center">
                  <div class="photoName d-flex align-items-center">
                    <img src="img/default_user.png" alt="" class="user-pic">
                    <a href="">Usuario carenalga comenta</a>
                  </div>
                  <i class="fa-solid fa-ellipsis optionPost"></i>
                </div>
                <div class="postBody my-2">
                  <p class="postTxt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit esse
                    atque,voluptates eius
                    consequatur excepturi nulla omnis quaerat ex vitae corrupti sint, autem recusandae enim nihil eos
                    blanditiis laborum repellat? Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam
                    repellat
                    doloribus officiis, ad autem quam cumque dolores maxime tenetur nulla quasi atque eos aliquam quas
                    impedit
                    id qui quidem neque.</p>
                </div>
              </div>
              <div class="post">
                <div class="postHeader d-flex justify-content-between align-items-center">
                  <div class="photoName d-flex align-items-center">
                    <img src="img/default_user.png" alt="" class="user-pic">
                    <a href="">Usuario carenalga comenta</a>
                  </div>
                  <i class="fa-solid fa-ellipsis optionPost"></i>
                </div>
                <div class="postBody my-2">
                  <p class="postTxt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit esse
                    atque,voluptates eius
                    consequatur excepturi nulla omnis quaerat ex vitae corrupti sint, autem recusandae enim nihil eos
                    blanditiis laborum repellat? Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam
                    repellat
                    doloribus officiis, ad autem quam cumque dolores maxime tenetur nulla quasi atque eos aliquam quas
                    impedit
                    id qui quidem neque.</p>
                </div>
              </div>
              <div class="post">
                <div class="postHeader d-flex justify-content-between align-items-center">
                  <div class="photoName d-flex align-items-center">
                    <img src="img/default_user.png" alt="" class="user-pic">
                    <a href="">Usuario carenalga comenta</a>
                  </div>
                  <i class="fa-solid fa-ellipsis optionPost"></i>
                </div>
                <div class="postBody my-2">
                  <p class="postTxt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit esse
                    atque,voluptates eius
                    consequatur excepturi nulla omnis quaerat ex vitae corrupti sint, autem recusandae enim nihil eos
                    blanditiis laborum repellat? Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam
                    repellat
                    doloribus officiis, ad autem quam cumque dolores maxime tenetur nulla quasi atque eos aliquam quas
                    impedit
                    id qui quidem neque.</p>
                </div>
              </div>
            </div>
            <div class="comentar d-flex  align-items-center">
              <img src="img/default_user.png" alt="" class="user-pic">
              <form id="comentar" class="w-100 needs-validation pubCom" novalidate>
                <div class="input-group ms-1">
                  <input class="input form-control" type="text" placeholder="Comentar..." name="comentario" required
                    id="comentario"></input>
                  <button class="input" type="submit"><i class="fa-regular fa-message"></i></button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="containerTrends">
      <h3>Ultimas publicaciones</h3>
    </div>

  </main>

  <!-- ModalPublicar -->
  <div class="modal fade" id="modalPublicar" tabindex="-1" role="dialog" aria-labelledby="modalTitleId"
    aria-hidden="true" data-bs-backdrop="static">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalTitleId">Crear publicación</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
            id="cerrarModalPublicar"></button>
        </div>
        <form id="publicar" class="needs-validation" novalidate>
          <div class="modal-body">
            <div class="container-fluid">
              <div class="row g-2">
                <div class="col-8">
                  <input type="text" name="titulo" class="input form-control" id="tituloPublicacion"
                    placeholder="Escriba su titulo" required>
                  <div class="invalid-feedback">
                    Por favor ingrese un titulo.
                  </div>
                </div>
                <div class="col-4">
                  <div class="invalid-feedback">
                    Por favor ingrese una categoría.
                  </div>
                  <select class="form-select input" aria-label="Default select example" name="categoria"
                    id="categoriaPublicacion" required>
                    <option selected disabled value>Categoría</option>
                    <option value="1">Historias</option>
                    <option value="2">Cuentos</option>
                    <option value="3">Literatura</option>
                    <option value="4">Poesía</option>
                    <option value="5">Artículos</option>
                  </select>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <textarea class="form-control input" style="height: 250px" name="contenido"
                      id="contenidoPublicacion" required></textarea>
                    <label for="floatingTextarea">Ingrese el contenido...</label>
                    <div class="invalid-feedback">
                      Por favor ingrese el contenido de su obra.
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer align-items-center justify-content-center flex-end">
            <button type="submit" class="btn btn-warning">Publicar</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <div class="chat-container">
    <div class="chat-header d-flex align-items-center justify-content-between">
      <div class="d-flex align-items-center">
        <img src="img/default_user.png" alt="Foto de {variable que contiene el nombre del usuario objetivo}"
          class="user-pic">
        <h5 id="nombreUserChat">César Torres</h5>
      </div>
      <div class="me-2 closeChat">
        <i class="fa-solid fa-xmark"></i>
      </div>

    </div>
    <div class="chat-visible">
      <div class="chat-body msger-chats">
        <!-- Acá cargarán los mensajes -->
        <div class="mensaje-entrante">
          <p> César carejopoaaaaaaaaaaaaaaaaaaaaaaaaaaaaa </p>
        </div>
        <div class="mensaje-saliente">
          <p> >:v </p>
        </div>
      </div>
      <form class="chat-footer needs-validation msger-inputarea" id="chatear" novalidate>
        <textarea name="Mensaje" id="mensaje" class="input form-control msger-input" rows="1" placeholder="Escriba su mensaje..."
          required></textarea>
        <button type="submit" class="btn-ico"><i class="fa-regular fa-paper-plane"></i></button>
      </form>
    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
    crossorigin="anonymous"></script>
  <script src="{{ Vite::asset('resources/js/app.js') }}"></script>
  <script src="js/chat.js"></script>
  <script src="js/validacion-form.js"></script>
  <script src="js/logica-publicar.js"></script>
  <script src="js/logica-chat.js"></script>
  <script src="js/logica-wordSize.js"></script>
  <script src="js/logica-cargarCategoria.js"></script>
</body>

</html>