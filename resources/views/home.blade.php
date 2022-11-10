<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Chat demo</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('css/chat.css') }}">
</head>
<body>
    <form action="/logout" method="post">
        @csrf
        <input type="submit" value="Cerrar sesión">
    </form>

    <div class="chat-container">
        <div class="chat-header"> 
            <img src="{{ asset('img/default_user.png') }}" alt="Foto de {variable que contiene el nombre del usuario objetivo}" class="user-pic">
            <h5>César Torres</h5> 
        </div>
        <div class="chat-visible">
            <div class="chat-body">
            <!-- Acá cargarán los mensajes -->
                <div class="mensaje-saliente"><p> >:v </p></div>
                <div class="mensaje-entrante"><p> :') </p></div>
                <div class="mensaje-saliente"><p> >:v </p></div>
                <div class="mensaje-entrante"><p> :') </p></div>
                <div class="mensaje-saliente"><p> >:v </p></div>
                <div class="mensaje-entrante"><p> :') </p></div>
                <div class="mensaje-saliente"><p> >:v </p></div>
                <div class="mensaje-entrante"><p> :') </p></div>
            </div>
            <form action="chatDemo.html" class="chat-footer">
                @csrf
                <textarea name="Mensaje" id="mensaje" class="input" rows="1" placeholder="Escriba su mensaje..."></textarea>
                <button type="submit" class="btn-ico"><i class="fa-regular fa-paper-plane"></i></button>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"crossorigin="anonymous"></script>
    <script src="{{ asset('js/logica-chat.js') }}"></script>
</body>

</html>