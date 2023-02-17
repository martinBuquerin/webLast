<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>



  <?php

  if (isset($_SESSION['user']) && !empty($_SESSION['user'])) {
    session_destroy();
  } else {
    session_start();
  } ?>
  <link rel="stylesheet" href="./recursos/lb/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>



<nav class="navbar navbar-expand-lg navbar-light" style="height: 55px; background-color: #F9F9F9;">
  <div class="container-fluid d-flex " style=" background-color: #F9F9F9;">
    <img style="width: 100px;height: 101px; margin-left:4rem; margin-top:20px" src="recursos/imagenes/cafe.png">
  </div>  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">

      <ul class="navbar-nav mx-auto" style="padding-left: 80rem;">
        <li class="nav-item" style="margin-right: 32px">
          <div class="dropdown">
            <a class="nav-link active " href="#" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false" style="font-family: calendas; font-size:2.5rem; color:#434543; padding-top:19px">
              Servicios</a>

            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              <?php
              require("conexion.php");


              $sql = $conexion->query("SELECT * FROM servicio");

              $resultado = $sql->fetchALL(PDO::FETCH_OBJ);


              foreach ($resultado as $result) {

              ?>


                <li><a class="dropdown-item" href="#" style="font-family: monospace; font-size:2rem; color:#079E09;"><?php echo $result->nombre; ?></a>
                </li>

              <?php
              }
              ?>

            </ul>

        </li>

        <li class="nav-item ">
          <a class="nav-link active" href="#" style="font-family: calendas; font-size:2.5rem; color:#434543; padding-top: 26px">Soy
            profesional</a>
        </li>
      </ul>



    </div>




    <a>
      <?php
      if (isset($_SESSION['user']) && !empty($_SESSION['user'])) {
      ?>
        <a href="#" style=" font-weight: 600;font-style: normal;" class=" btn btn-success float-end" data-toggle="modal" data-target="#myModalLogueado"><i class="far fa-user"></i><?php echo $_SESSION['user'] ?>

        <?php
      } else {
        ?>

          <a href="#" style=" font-weight: 600;font-style: normal; margin-right:40px" class=" btn btn-success float-end" data-toggle="modal" data-target="#myModal"><i class="far fa-user"></i><?php echo 'Identificate' ?>
          </a>


        <?php
      }
        ?>

  </div>
 
</nav>


<body>
  <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-dialog-centered modal-xl">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="m-2 ">

          <button type="button" class="btn float-end" data-dismiss="modal"><i class="fa-solid fa-circle-xmark"></i></button>
        </div>
        <div class="modal-body ">

          <h4 class="modal-title pt-2" style="text-align: center;">Login</h4>
          <form class="p-4 mt-4" action="validarogin.php" method="POST">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label" name="email">Usuario</label>
              <input type="email" class="form-control" name="email" aria-describedby="emailHelp">

            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label" name="contrasena">Contraseña</label>
              <input type="password" class="form-control" name="contrasena">
            </div>
            <div class="d-flex justify-content-center align-content-center mt-4 ">
              <button type="submit" class="btn btn-success">Entrar</button>
            </div>
            <hr>

            <div class="d-flex justify-content-center align-content-center mt-4">
              <a href="registro.php" class="btn btn-success">Registrarse</a>
            </div>
          </form>


        </div>

      </div>

    </div>
  </div>




  <div class="modal fade" id="modificarPerfil">



    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body ">


          <!--aca insertar datos del perfil-->




        </div>
        <div class="d-flex justify-content-center align-content-center mt-4 ">
          <a href="cerrarSession.php" class="btn btn-success">Cerrar Sesion</a>
        </div><br>

      </div>

    </div>
  </div>

  <div class="modal fade" id="myModalLogueado">
    <div class="modal-dialog ">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="m-2 ">

          <button type="button" class="btn float-end" data-dismiss="modal"><i class="fa-solid fa-circle-xmark"></i></button>
        </div>
        <div class="modal-body ">


          <form class="p-4 mt-4" action="" method="POST">

            <div class="d-flex justify-content-center align-content-center mt-4 ">
              <a data-toggle="modal" data-target="#modificarPerfil" data-dismiss="modal" class="btn btn-success">Perfil</a>
            </div>
            <hr>

            <div class="d-flex justify-content-center align-content-center mt-4">
              <a href="cerrarSession.php" class="btn btn-success">Cerrar Sesion</a>
            </div>
          </form>


        </div>

      </div>

    </div>
  </div>

  <style>
    #conEstilo {


      background: url("./recursos/imagenes/fodo55.jpg") no-repeat center center fixed;

      background-size: cover;

    }
  </style>

  <div id="conEstilo" class="container-fluid pt-4" style="padding-bottom: 14rem; ">
    <!-- SECCION DEL BUSCADOR-->
    <h3 style="text-shadow: #000000 1px 1px 1px;text-align: center; font-family: calendas; font-size:8rem; color:#FFFFFB; padding-top:12rem">
      Encuentra servicios y profesionales</h3>
    <!--<h3 style="text-shadow: #FFFFFB 1px 1px 1px; text-align: center; font-family: calendas; font-size:3.5rem; color:#079719;">para tu hogar, oficina o local.</h3>-->
    <form class="justify-content-center d-flex" action="./busqueda.php" method="POST" style="padding-bottom: 14rem; ">
      <div class="row mt-5" style="text-align: center;">
        <div class="col-auto mb-3 " style="padding-top:5rem;" style="width: 190rem;">
          <label for="exampleInputEmail1" style="text-shadow: #000000 1px 1px 1px;text-align: center; font-family: calendas; font-size:2.6rem; color:#FFFFFB;">¿Qué
            servicio buscas?</label>
          <div class="row" style="padding-top: 2rem;">
            <div class="col">
              <input type="text" class="form-control " name="servicio" style="width: 65rem" />
            </div>
            <div class="col">
              <button class="btn btn-success float-end" type="submit">Buscar</button>
            </div>
          </div>
        </div>
      </div>
    </form>


    <!-- carousel -->

    <div class=" container mt-4 mb-4">

      <br><br>


      <div class="slider d-flex justify-content-center">

        <div id="carouselExampleSlidesOnly" class="carousel slide   w-90 h-70  " data-bs-ride="carousel" data-bs-interval="5000">
          <div class="carousel-inner  ">
            <div class="carousel-item active">
              <img class="d-inline img-fluid" src="recursos/imagenes/cerrajero1.jpg" alt="...">
            </div>
            <div class="carousel-item">
              <img class="d-inline img-fluid" src="recursos/imagenes/cortinas.jpg" alt="...">
            </div>
            <div class="carousel-item">
              <img class="d-inline img-fluid" src="recursos/imagenes/climatizacion.jpg" alt="..." ">
        </div>
        <div class=" carousel-item">
              <img class="d-inline img-fluid" src="recursos/imagenes/deco.jpg" alt="...">
            </div>
          </div>
        </div>

      </div>


    </div>




    <br><br>
  </div>


  <div class="container-fluid" style="background-color: #FFF5E4;">
    <div class="container pt-4 pb-4">
      <h6 style="width:100%; text-align: center;">¿Como funciona?</h6>
    </div>


    <div class="container-fluid p-4 mb-4 d-flex justify-content-center">


      <div class="row row-cols-auto justify-content-center ">



        <div class="col m-4">
          <div class="row p-3 border border-gray border-1 rounded-3 shadow bg-body rounded" style="width: 20rem; margin: 5px;">
            <img class="rounded mx-auto d-block" src="recursos/imagenes/i-busca.svg" style="width: 150px; height: 170px;">
            <div>
              <p>1. Busca</p>
            </div>
            <div>
              <p>Cuéntanos qué te gustaría hacer y dónde</p>
            </div>
          </div>
        </div>


        <div class="col m-4">
          <div class="row p-3 border border-gray border-1 rounded-3 shadow bg-body rounded" style="width: 20rem; margin: 5px;">
            <img class="rounded mx-auto d-block" src="recursos/imagenes/i-elige.svg" style="width: 150px; height: 170px;">
            <div>
              <p>2. Elige</p>
            </div>
            <div>
              <p>Elige al profesional que se adapte a tus necesidades</p>
            </div>
          </div>
        </div>


        <div class="col m-4">
          <div class="row p-3 border border-gray border-1 rounded-3 shadow bg-body rounded" style="width: 20rem; margin: 5px;">
            <img class="rounded mx-auto d-block" src="recursos/imagenes/i-contacta.svg" style="width: 150px; height: 170px;">
            <div>
              <p>3. Contacta</p>
            </div>
            <div>
              <p>Chatea con tu profesional y reserva tu cita</p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
  <div id="conEstilo" class="container-fluid">
    <div class="container  pt-4 pb-4">
      <h6 style="text-shadow: #000000 1px 1px 1px;text-align: center; font-family: calendas; font-size:2.8rem; color:#FFFFFB; padding-top:2rem">
        Servicios destacados </h6>
    </div>


    <div class="container-fluid  pt-4 pb-4 mb-4 d-flex justify-content-center">
      <div class="row row-cols-auto justify-content-center">

        <div class="col">
          <div class="row border border-gray border-1 rounded-3 shadow bg-body rounded" style="width: 20rem; margin: 5px;">
            <div class="row m-2">
              <div class="col pt-1  ">
                <i class="fa-solid fa-hammer"></i>
              </div>
              <div class="col">
                <p>sdf</p>
              </div>
            </div>
          </div>
        </div>


        <div class="col">
          <div class="row border border-gray border-1 rounded-3 shadow bg-body rounded" style="width: 20rem; margin: 5px;">
            <div class="row m-2">
              <div class="col pt-1  ">
                <i class="fa-solid fa-hammer"></i>
              </div>
              <div class="col">
                <p>sdf</p>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="row border border-gray border-1 rounded-3 shadow bg-body rounded" style="width: 20rem; margin: 5px;">
            <div class="row m-2">
              <div class="col pt-1  ">
                <i class="fa-solid fa-hammer"></i>
              </div>
              <div class="col">
                <p>sdf</p>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="row border border-gray border-1 rounded-3 shadow bg-body rounded" style="width: 20rem; margin: 5px;">
            <div class="row m-2">
              <div class="col pt-1  ">
                <i class="fa-solid fa-hammer"></i>
              </div>
              <div class="col">
                <p>sdf</p>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="row border border-gray border-1 rounded-3 shadow bg-body rounded" style="width: 20rem; margin: 5px;">
            <div class="row m-2">
              <div class="col pt-1  ">
                <i class="fa-solid fa-hammer"></i>
              </div>
              <div class="col">
                <p>sdf</p>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="row border border-gray border-1 rounded-3 shadow bg-body rounded" style="width: 20rem; margin: 5px;">
            <div class="row m-2">
              <div class="col pt-1  ">
                <i class="fa-solid fa-hammer"></i>
              </div>
              <div class="col">
                <p>sdf</p>
              </div>
            </div>
          </div>
        </div>



      </div>
    </div>
  </div>
</body>



<footer class="bg-success ">
  <!-- Grid container -->
  <div class="container p-4">
    <!--Grid row-->
    <div class="row row-cols-4 justify-content-center">

      <!--Grid column-->
      <div class="col m-4 ">
        <h5 class="text-uppercase mb-0">Legal</h5>

        <ul class="list-unstyled  mb-0" style="padding-top: 2em;">

          <li>
            <a href="#!" class="text-dark" style="text-decoration: none">Sobre nosotros</a>
          </li>
          <li>
            <a href="#!" class="text-dark" style="text-decoration: none">Contacta con nosotros</a>
          </li>

        </ul>
      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col m-4 ">
        <h5 class="text-uppercase">Sobre Hogami</h5>

        <ul class="list-unstyled mb-0" style="padding-top: 2em;">

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
      <!--Grid column-->

      <!--Grid column-->
      <div class="col m-4">
        <h5 class="text-uppercase mb-0">Sobre Hogami</h5>

        <ul class="list-unstyled" style="padding-top: 2em;">

          <li>
            <a href="#!" class="text-dark" style="text-decoration: none">¿Cómo funciona?</a>
          </li>
          <li>
            <a href="#!" class="text-dark" style="text-decoration: none">FAQs</a>
          </li>

        </ul>
      </div>
      <!--Grid column-->
    </div>
    <!--Grid row-->
  </div>
  <!-- Grid container -->


</footer>

</body>

<script src="./recursos/lb/js/bootstrap.min.js"></script>

</html>