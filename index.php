<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">



  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
  <link rel="stylesheet" href="estilo.css">
  <link rel="stylesheet" href="https://kit.fontawesome.com/c6b31a7173.css" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <title>miWeB.</title>
</head>


<body>
  <!--Navegador-->
  <nav class="navbar navbar-expand-lg navbar-light p-3" id="menu">
    <div class="container">
      <a class="navbar-brand" href="#">
        <span class="fs-5 text-success fw-bold">miWeB.</span>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto mb-2 ml-6 mb-lg-0 " style="width: 500px;">
          <li class="nav-item ">
            <a class="nav-link" aria-current="page" href="index.php">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#equipo">Servicios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#seccion-contacto">Soy profesional</a>
          </li>
        </ul>
        <form class="d-flex">
          <!--<a href="#" style=" font-weight: 600;font-style: normal;" class=" btn btn-success float-end" data-toggle="modal" data-target="#modalRegistroAdmninistrador"><i class="far fa-user"></i>Identifícate</a>-->
          <button type="button" id="logIn" class="btn btn-success btn-primary-outline-success" data-toggle="modal" data-target="#modalLogin"><i class="far fa-user" style="padding-right:4px;"></i>Identifícate</button>

        </form>
      </div>

    </div>
  </nav>
  <!--/Navegador-->

  <!--modalRegistro-->


  <div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog">

      <div class="modal-content d-flex justify-content-center">
    
        <div class="row">
          <div class="col pt-4" style="padding-left:200px;">

            <h1 class="p-2 fs-2 text-center">Login</h1>
          </div>
          <div class="col" style="width:150px;">
          <button type="submit" class="btn btn-danger p-1 float-end" data-dismiss="modal" style="margin-top:1rem;margin-right:1rem" name="salir" value="X">X</button>
        </div>
        </div>
        <div class="modal-body p-2 ">
          <form action="insertar.php" method="post" class="form-registro" enctype="multipart/form-data">
            <div class="form-group p-2">
              <div class="row">
                <div class="col ">
                  <label for="email" style="padding-left:7em ; padding-top: 0.5em;">Email</label>
                </div>
                <div class="col">
                  <input type="email" class="form-control mt-1" name="email" id="email" style="width: 12em; height: 2em; margin-right:4em;">
                </div>
              </div>
            </div>

            <div class="form-group p-2">
              <div class="row">
                <div class="col " style="padding-left:5em; padding-top: 0.5em;">
                  <label for="password">Contraseña</label>
                </div>
                <div class="col">
                  <input type="password" class="form-control mt-1" name="contrasena" id="password" style="width: 12em;  height: 2em; margin-right:4em;">
                </div>
              </div>
            </div>


            <div class="col text-center p-2 mt-2">

              <button type="submit" class="btn btn-success" name="insertar" value="insertar">Registrarse</button>
            </div>
          </form>
        </div>
        <!--<a href="administrador.php" class="btn btn-success float-end" style="margin:1rem;">Volver</a>-->
      </div>
    </div>

  </div>





  <!--/modalRegistro-->

  <!--Carousel-->

  <div id="carousel" class="carousel slide my-5 mx-2" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="3500">
        <img src="./recursos/imagenes/deco.jpg" class="d-block w-100" alt="decoraciones">
      </div>
      <div class="carousel-item" data-bs-interval="3500">
        <img src="./recursos/imagenes/jardin2.jpg" class="d-block w-100" alt="jardineria">
      </div>
      <div class="carousel-item" data-bs-interval="3500">
        <img src="./recursos/imagenes/pintor.jpg" class="d-block w-100" alt="pintor">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!--/Carousel-->

  <!--Buscador-->
  <section class="d-flex flex-column  pt-5  text-center mx-4 m-auto" id="busqueda">
    <h1 class="p-3 fs-2 border-top border-3"> Encuentra<span class="text-primary"> Servicios</span> y <span class="text-success">Profesionales</span></h1>

    <!--<h3 style="text-shadow: #FFFFFB 1px 1px 1px; text-align: center; font-family: calendas; font-size:3.5rem; color:#079719;">para tu hogar, oficina o local.</h3>-->
    <form class="form" action="./busqueda.php" method="POST">
      <div class="row mt-2 mb-3">
        <div class="col  ">
          <h2 class="text-success  mb-4" id="typewriter"></h2>
        </div>
        <div class="row w-100 d-flex justify-content-center">
          <div class="col-sm- col-md-8 col-lg-6 col-xl-4 mb-3 pt-3 d-flex ">
            <input type="text" class="form-control" name="servicio" />

            <button class="btn btn-success float-end" style="margin-left:15px;" type="submit">Buscar</button>
          </div>
        </div>
      </div>

    </form>


  </section>
  <!--/Buscador-->


  <!--Tarjetas-->
  <section class="d-flex flex-column  pt-5  text-center w-100 m-auto " style="padding-top:60px;padding-bottom:60px;">
    <div class="row w-75  mx-auto justify-content-center border-top border-3" id="tarjetas">


      <div class="col-lg-4 col-md-12 col-sm-12 d-flex justify-content-start  my-5 mx-1" style="width:420px">
        <div class="row border border-gray border-1 shadow bg-body rounded">
          <div class="col">
            <img class="rounded mx-auto" width="140" height="180" src="recursos/imagenes/i-busca.svg">
          </div>
          <div class="col">
            <div>
              <h3 class="fs-5 mt-4 px-4 pb-1 tarjetas">BUSCA</h3>
              <p class="px-4">Diseño, Conceptualización e Implementación de productos digitales</p>
            </div>

          </div>
        </div>
      </div>


      <div class="col-lg-4 col-md-12 col-sm-12 d-flex justify-content-start  my-5 mx-1" style="width:420px">
        <div class="row border border-gray border-1 shadow bg-body rounded">
          <div class="col">
            <img class="rounded mx-auto" width="160" height="180" src="recursos/imagenes/i-elige.svg">
          </div>
          <div class="col">
            <div>
              <h3 class="fs-5 mt-4 px-4 pb-1 tarjetas">ELIGE</h3>
              <p class="px-4">Elige al profesional que se adapte a tus necesidades</p>
            </div>

          </div>
        </div>
      </div>


      <div class="col-lg-4 col-md-12 col-sm-12 d-flex justify-content-start  my-5 mx-1" style="width:420px">
        <div class="row border border-gray border-1 shadow bg-body rounded">
          <div class="col">
            <img class="rounded mx-auto" width="160" height="180" src="recursos/imagenes/i-contacta.svg">
          </div>
          <div class="col">
            <div>
              <h3 class="fs-5 mt-4 px-4 pb-1 tarjetas">CONTACTA</h3>
              <p class="px-4">Chatea con tu profesional y reserva tu cita </p>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/Tarjetas-->

  <!--Footer-->
  <footer class="w-100  d-flex  align-items-center justify-content-center flex-wrap bg-light">
    <div class="container p-1">
      <div class="row row-cols-4 justify-content-center">
        <div class="col m-2 ">
          <h5 class="text-uppercase mb-0">Legal</h5>
          <ul class="list-unstyled  mb-0" style="padding-top: 1em;">
            <li>
              <a href="#!" class="text-dark" style="text-decoration: none">Sobre nosotros</a>
            </li>
            <li>
              <a href="#!" class="text-dark" style="text-decoration: none">Contacta con nosotros</a>
            </li>
          </ul>
        </div>
        <div class="col m-2 ">
          <h5 class="text-uppercase mb-0">Sobre Hogami</h5>
          <ul class="list-unstyled mb-0" style="padding-top: 1em;">
            <li>
              <a href="#!" class="text-dark" style="text-decoration: none">Aviso legal</a>
            </li>
            <li>
              <a href="#!" class="text-dark" style="text-decoration: none">Política de privacidad</a>
            </li>
            <li>
              <a href="#!" class="text-dark" style="text-decoration: none">Política de cookies</a>
            </li>
          </ul>
        </div>
        <div class="col m-2">
          <h5 class="text-uppercase mb-0">Hogami</h5>
          <ul class="list-unstyled" style="padding-top: 1em;">
            <li>
              <a href="#!" class="text-dark" style="text-decoration: none">¿Cómo funciona?</a>
            </li>
            <li>
              <a href="#!" class="text-dark" style="text-decoration: none">FAQs</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  <!--/footer-->




  <script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/c6b31a7173.js" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="javaType.js"></script>
</body>

</html>