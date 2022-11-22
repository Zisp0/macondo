<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse</title>
    <link rel="stylesheet" href="{{ asset('css/registro.css') }}">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mitr&display=swap" rel="stylesheet">
</head>
<body>
    <div class="containerPrincipal">
        <div class="containerLogo">
            <p>Macondo</p>
        </div>
        <form action="{{route('usuario.store')}}" method="post">
            @csrf
            <div>
                <input type="text" id="inputNombre" placeholder="Nombre" name="nombre" value="{{old('nombre')}}">
                @error('nombre')
                    <small>{{$message}}</small>
                @enderror
                <input type="text" id="inputApellido" placeholder="Apellido" name="apellido" value="{{old('apellido')}}">
                @error('apellido')
                    <small>{{$message}}</small>
                @enderror
            </div>
            <div>
                <input type="email" id="inputCorreoElectronico" placeholder="Correo Electrónico" name="correo" value="{{old('correo')}}">
                @error('correo')
                    <small>{{$message}}</small>
                @enderror
                <input type="text" id="inputSeudonimo" placeholder="Seudonimo" name="seudonimo" value="{{old('seudonimo')}}">
                @error('seudonimo')
                    <small>{{$message}}</small>
                @enderror
            </div>
            <div>
                <input type="password" id="inputContraseña" placeholder="Contraseña" name="contrasena" value="{{old('contrasena')}}">
                @error('contrasena')
                    <small>{{$message}}</small>
                @enderror
                <input type="password" id="inputConfirmarContraseña" placeholder="Confirmar Contraseña" name="confirmarContrasena" value="{{old('confirmarContrasena')}}">
                @error('confirmarContrasena')
                    <small>{{$message}}</small>
                @enderror
            </div>
            <div>
                <input type="submit" id="buttonSignUp" value="Registrarse">
            </div> 
        </form>
    </div>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>
</html>