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
    <title>Register</title>

    
 
  </head>

  

    
  <body>
       
      <div class="container w-75 mt-5 rounded shadow">
        
        <div class="marco align-items-stretch">
          <div class="logo">
            <br>
            <h1 class="fw-bold text-center p-5"> <img src="img/logo.png" alt="logo"> Macondo </h1>
              <div class="mb-4 text-center fw-bold">
                <span>¡Crea tu cuenta!</span>
              </div>
              
            
            <!--Register-->
              <br>
            <form action="{{route('usuario.store')}}" method="post" class="x">
              @csrf
              <div class="mb-4">
                <div class="row">
                  <div class="col-md-6">
                    <label for="nombre" class="form-label">Nombre</label> 
                    <input type="text" class="form-control" name="nombre" value="{{old('nombre')}}">
                    @error('nombre')
                      <label for="nombre" class="form-label"><h6 class="red">{{$message}}</h6></label>
                    @enderror
                  </div>
                  <div class="col-md-6">
                    <label for="apellido" class="form-label">Apellido</label>
                    <input type="tex" class="form-control" name="apellido" value="{{old('apellido')}}">
                    @error('apellido')
                      <label for="apellido" class="form-label"><h6 class="red">{{$message}}</h6></label>
                    @enderror
                  </div>
                </div>
              </div>
              <div class="mb-4">
                <div class="row">
                  <div class="col-md-6">
                    <label for="seudonimo" class="form-label">Seudonimo</label> 
                    <input type="tex" class="form-control" name="seudonimo" value="{{old('seudonimo')}}">
                    @error('seudonimo')
                      <label for="seudonimo" class="form-label"><h6 class="red">{{$message}}</h6></label>
                    @enderror
                  </div>
                  <div class="col-md-6">
                    <label for="correo" class="form-label">Email</label>
                    <input type="email" class="form-control" name="correo" value="{{old('correo')}}">
                    @error('correo')
                      <label for="correo" class="form-label"><h6 class="red">{{$message}}</h6></label>
                    @enderror
                  </div>
                </div>
              </div>
              <div class="mb-4 text-center">
                <label for="contrasena" class="form-label">Contraseña</label>
                <input type="password" class="form-control" name="contrasena">
                @error('contrasena')
                  <label for="contrasena" class="form-label"><h6 class="red">{{$message}}</h6></label>
                @enderror
              </div>
              <div class="mb-4 text-center">
                <label for="confirmarContrasena" class="form-label">Confirmar contraseña</label>
                <input type="password" class="form-control" name="confirmarContrasena">
                @error('confirmarContrasena')
                  <label for="confirmarContrasena" class="form-label"><h6 class="red">{{$message}}</h6></label>
                @enderror
              </div>

              <div class="mb-4">
                <div class="row">
                  <div class="col-md-6">
                    <div class="d-grid" >
                    <a href="/" style="background: #FAFAFA;"  class="btn">Cancelar</a>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="d-grid" >
                      <input type="submit" class="btn" value="Registrarme">
                    </div>
                  </div>
                </div>
              </div>
              <div class="my-3 text-center">
                <span>¿Ya tienes una cuenta? <a href="/">Ingresa</a></span>
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

