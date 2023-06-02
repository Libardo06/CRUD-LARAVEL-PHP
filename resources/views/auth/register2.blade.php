<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Cetus</title>
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="{{asset('assets/estilos.css')}}">
</head>
<body>
  <section class="h-100 gradient-form" style="background-color: #222;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-xl-10">
          <div class="card rounded-3 text-black">
            <div class="row g-0">
              <div class="col-lg-6" >
                <div class="card-body p-md-5 mx-md-4">

                  <div class="text-center">
                    <img src="https://www.cetus.com.co/wp-content/uploads/2020/08/imagotipo-cetus-hor-blanco@0.5x.png"
                    style="width: 185px;" alt="logo" align="right">
                    <br>  <br><br>
                    <h4 class="mt-1 mb-5 pb-1">Cetus Technology</h4>
                  </div>

                  <form action="{{route('register.create')}}" method="POST">
                    @csrf

                    <p>Por favor ingresa tus datos</p>

                    <div class="form-outline mb-4">
                      <label class="form-label" for="name">Nombre</label>
                      <input type="text" name="name" id="name" class="form-control"
                      placeholder="Ingresa tu nombre completo"/>
                    </div>

                    <div class="form-outline mb-4">
                      <label class="form-label" >Usuario</label>
                      <input type="email" name="email" class="form-control"
                      placeholder="Ingresa tu correo electronico" />
                      
                    </div>

                    <div class="form-outline mb-4">
                      <label class="form-label" >Contraseña</label>
                      <input type="password" name="password" class="form-control" />
                    </div>

                    <div class="form-outline mb-4">
                      <label class="form-label" >Confirma tu contraseña</label>
                      <input type="password" name="password_confirmation" class="form-control" />
                    </div>
                    
                    <div class="text-center pt-1 mb-5 pb-1">
                      <button type="submit" class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" >Registrarse</button>
                    </div>

                  </form>
                  <div class="d-flex align-items-center justify-content-center pb-4">
                      <p class="mb-0 me-2">¿Ya te encuentras registrado?</p>
                      <a href="{{route('login2')}}" class="btn btn-outline-danger">Ingresar</a>
                    </div>

                </div>
              </div>
              <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                  <h4 class="mb-4">¿CETUS Technology?</h4>
                  <p class="small mb-0">Somos un equipo multidisciplinario de profesionales apasionados por impulsar la transformación tecnológica en un mundo globalizado, optimizando procesos y aumentando la competitividad. Con más de ocho años de trayectoria en Colombia y presencia en Iberoamérica, nuestra excelencia y compromiso en cada proyecto nos permiten seguir expandiendo nuestra huella, enfrentando nuevos desafíos y apoyando a más empresas que requieren de nuestros servicios.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Bootstrap core JavaScript -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>