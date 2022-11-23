$(document).ready(function () {
    document.getElementById('btnInicio').click();
    cargarCategoria("Inicio");

    $(".item-nav").click(function (e) { 
        e.preventDefault();
        let items = document.querySelectorAll(".item-nav");
        items.forEach(element => {
            if(element != this){
                $(element).removeClass("active");
            }
        });
        cargarCategoria(this.innerText);
    });
});

function cargarCategoria(categoria){
    axios.post('/cargar', {
        categoria: categoria
    }).then(res => {
        let datos = res.data.datos;
        $(".publicaciones").empty();
        if(datos.length > 0){
            datos.forEach(element => {
                $(".publicaciones").append(
                    `<div class="post">
                        <div class="postHeader d-flex justify-content-between align-items-center">
                            <div class="photoName d-flex align-items-center">
                                <img src="img/default_user.png" alt="" class="user-pic">
                                <a href="">`+element[1].seudonimo+`</a>
                            </div>
                            <i class="fa-solid fa-ellipsis optionPost"></i>
                        </div>
                        <div class="postBody my-2">
                            <h3 class="postTitle">`+element[0].titulo+`</h3>
                            <p class="postTxt">`+element[0].contenido+`</p>
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
                                <a href="#collapseComentarios`+element[0].idPublicacion+`" data-bs-toggle="collapse" aria-expanded="false"
                                aria-controls="collapseComentarios`+element[0].idPublicacion+`"><i class="fa-regular fa-comment iconAct me-2"></i></a>
                                <span>100</span>
                            </div>
                        </div>
                        <div class="collapse pb-2" id="collapseComentarios`+element[0].idPublicacion+`">
                            <div class="comentar d-flex  align-items-center">
                                <img src="img/default_user.png" alt="" class="user-pic">
                                <form id="comentar" class="w-100 needs-validation" novalidate>
                                    <div class="input-group ms-1">
                                        <input class="input form-control" type="text" placeholder="Comentar..." name="comentario" required
                                        id="comentario"></input>
                                        <button class="input" type="submit"><i class="fa-regular fa-message"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>`
                );
            });
        }
    }).catch(error => {
        console.log("ha ocurrido un error\n"+error);
    });
}