<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mitr&display=swap" rel="stylesheet">
</head>
<body>
    <div class="containerPrincipal">
        <div class="containerLogin">
            <div class="containerLogo">
                <p>Macondo</p>
            </div>
            
            <form action="/" method="post">
                @csrf
                <div class="containerInputAndButton">
                    <div>
                        <label for="inputEmail" class="labelForInputEmail">Email</label>
                        @if($correo)
                            <input type="email" id="inputEmail" name="correo" value="{{$correo}}">
                        @else
                            <input type="email" id="inputEmail" name="correo" value="{{old('correo')}}">
                        @endif
                        @error ('correo')
                            <small>{{$message}}</small>
                        @enderror
                        <small>{{$msjCorreo}}</small>
                    </div>
                    <div>
                        <label for="inputPassword" class="labelForInputPassword">Contraseña</label>
                        <input type="password" id="inputPassword" name="contrasena">
                        @error ('contrasena')
                            <small>{{$message}}</small>
                        @enderror
                        <small>{{$msjContra}}</small>
                    </div>
                    <a href="recuperarContraseña.php">¿Olvidaste tu contraseña?</a>
                    <input type="submit" value="Iniciar Sesión" id="buttonLogIn">

                    <div>
                        <button id="loginGoogle">Google</button>
                        <p>¿No tienes una cuenta? <a href="registro.php">Regístrate</a></p>
                    </div>
                </div> 
            </form>
        </div>
    </div>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>
</html>