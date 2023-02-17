<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
  <link rel="stylesheet" type="text/css" href="/recursos/fontAw/css/all.css">
  <link rel="stylesheet" type="text/css" href="recursos/estilo.css">
  <link rel="stylesheet" type="text/css" href="recursos/bootStrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <?php session_start(); ?>   
</head>



<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid ">
    <img style="width: 120px;height: 50px;" src="recursos/imagenes/log.png">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarSupportedContent">

      <ul class="navbar-nav me-auto mb-2  ">
        <li class="nav-item "><a class="nav-link active" style="width: 390px;" aria-current="page" href="#"> </a></li>


        <li class="nav-item ">
          <div class="dropdown pt-3">
            <a class="nav-link active" href="#" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
              Servicios
            </a>

            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              <?php
              require("conexion.php");


              $sql = $conexion->query("SELECT * FROM servicio");

              $resultado = $sql->fetchALL(PDO::FETCH_OBJ);


              foreach ($resultado as $result) {

              ?>


                <li><a class="dropdown-item" href="#"><?php echo $result->nombre; ?></a></li>

              <?php
              }
              ?>

            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Provincias</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Beneficios</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">¿Eres Profesional?</a>
        </li>
      </ul>

      <ul class="navbar-nav me-auto mb-2  float-end">
        <li class="nav-item ">


          <a href="#" style=" font-weight: 600;font-style: normal;" class=" btn btn-success float-end" data-toggle="modal" data-target="#myModal"><i class="far fa-user"></i> Identifícate</a>
        </li>
      </ul>





    </div>
  </div>
</nav>


<body>
    <div class="container">

        <form>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputCalle">Calle</label>
                    <input type="text" class="form-control" name="calle">
                </div>
                <div class="form-group col-md-2">
                    <label for="inputNumero">Numero</label>
                    <input type="text" class="form-control" name="numero">
                </div>
                <div class="form-group col-md-2">
                    <label for="inputPiso">Piso</label>
                    <input type="text" class="form-control" name="piso">
                </div>
                <div class="form-group col-md-2">
                    <label for="inputCP">CP</label>
                    <input type="text" class="form-control" name="cp">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputLocalidad">Localidad</label>
                    <input type="text" class="form-control" name="localidad">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputProvincia">Provincia</label>
                    <input type="text" class="form-control" name="provincia">
                </div>
                <div class="form-group col-md-2">
                    <label for="inputPais">Pais</label>
                    <input type="text" class="form-control" name="pais">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Registrar</button>
            <div class="form-group col-md-12">
                    <a href="administrador.php" class="btn btn-success float-end">Volver</a>
                    
                </div>
        </form>
    </div>


</body>



<footer class="bg-success mt-4 fixed-bottom">
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
<script src="recursos/bootStrap/js/bootstrap.min.js"></script>
<script src="recursos/java.js"></script>
<script src="recursos/fontAw/js/all.js"></script>

</html>