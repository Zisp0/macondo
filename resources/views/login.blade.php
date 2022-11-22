<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Clicker+Script&family=Poppins:wght@200;300;400;500;600&family=Quicksand:wght@300;500;600&family=Source+Code+Pro:ital,wght@1,900&display=swap" rel="stylesheet">
    <title>Login</title>

    
 
  </head>

  

    
  <body>
       
      <div class="container w-75 mt-5 rounded shadow">
        
        <div class="marco align-items-stretch">
          <div class="logo">
            <h1 class="fw-bold text-center p-5"> <img src="img/logo.png" alt="logo"> Macondo </h1>
            
            <!--login-->
  
            <form action="/" method= "post" class="x">
              @csrf
              <div class="mb-4">
                <label for="correo" class="form-label">Email</label>
                @if($correo)
                  <input type="email" class="form-control" name="correo" value="{{$correo}}">
                @else
                  <input type="email" class="form-control" name="correo" value="{{old('correo')}}">
                @endif
                @error ('correo')
                  <label class="form-label"><h6 class="red">{{$message}}</h6></label>
                @enderror
                <label for="correo" class="form-label"><h6 class="red">{{$msjCorreo}}</h6></label>
              </div>
              <br>
              <div class="mb-4">
                <label for="contrasena" class="form-label">Contraseña</label>
                <input type="password" class="form-control" name="contrasena">
                @error ('contrasena')
                <label for="contrasena" class="form-label"><h6 class="red">{{$message}}</h6></label>
                @enderror
                <label for="contrasena" class="form-label"><h6 class="red">{{$msjContra}}</h6></label>
              </div>
              <div class="my-3 text-center">
                <span><a href="#">¿Olvidaste la contraseña?</a></span>
              </div>
              <div class="d-grid" >
                <button type="submit" class="btn">Iniciar Sesión</button>
              </div>
              <div class="my-3 text-center">
                <span>¿No tienes una cuenta? <a href="/registro">Registrate</a></span>
              </div>
              <br>
              <br>
              <br>
            </form>
  
          </div>                 
        </div>
      </div>
      
</div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  
  </div>
  </body>
</html>

