<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
  <link rel="stylesheet" href="estilo.css">
  <link rel="stylesheet" href="https://kit.fontawesome.com/c6b31a7173.css" crossorigin="anonymous">
    <title>miWeb.</title>
</head>

<body>


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
          <li class="nav-item " >
            <a class="nav-link" aria-current="page" href="#">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#equipo">Servicios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#seccion-contacto">Soy profesional</a>
          </li>
        </ul>
        <form class="d-flex">

          <button class="btn btn-success btn-primary-outline-success" type="button"><i class="far fa-user" style="padding-right:4px;"></i>Identifícate</button>
        </form>
      </div>

    </div>
  </nav>
    <main>
        <div class="container-fluid m-4 d-flex justify-content-center">
        <div class="row row-cols-auto justify-content-center m-4">
            <?php
            require("conexion.php");

            $servicio = $_POST['servicio'];
            //var_dump($_POST);
            //die();

            $sql = $conexion->query("SELECT * FROM usuario where nombreEmpresa like '%$servicio%' or descripcionEmpresa like  '%$servicio%';");

            $resultado = $sql->fetchALL(PDO::FETCH_OBJ);
            

            foreach ($resultado as $result) {
                if($result->roles_idRol == 9){
            ?>

              

                    <div class="row border border-gray border-1 rounded-3 shadow bg-body rounded" style="width: 26rem; margin:5px">
                        <div class="col mt-2">
                            <h5 class="card-title pt-4"><?php echo $result->nombreEmpresa; ?></h5>
                            <div class="row">
                                <div class="col mt-2 ml-2">
                                    <p><?php echo $result->descripcionEmpresa; ?></p>
                                </div>
                            </div>
                        </div>

                        <div class="col mt-2 pt-4" >
                        <?php echo "<img style='margin-left:40px;' src='" . $result->imagen . "' width='120' height='100'>" . "</img>"; ?>
                            <!--<img height="100" width="80" src="data:image/jpeg;base64,'.base64_encode($result->imagen).'" class="card-img-top" alt="..." />'-->
                        </div>

                        <div class="row m-0">

                            <div class="col mb-2 mt-1">
                                <p style=" width: 99% ;color: #78BE20; font-weight: 600;font-style: normal;text-align: center;padding-top: 7px;">
                                    Ver ficha completa</p>
                                <a href="#" style=" width: 100% ;background-color:#78BE20; color: #fff; font-weight: 600;font-style: normal;" class=" btn mb-4" data-toggle="modal" data-target="#myModal">Nuevo Chat</a>

                            </div>
                           
                        </div>




                  


                </div>

            <?php
            }
        }
            ?>


        </div>

        </div>



    </main>
</body>

<footer class="w-100  d-flex  align-items-center justify-content-center flex-wrap bg-light">
  <!-- Grid container -->
  <div class="container p-1">
    <!--Grid row-->
    <div class="row row-cols-4 justify-content-center">

      <!--Grid column-->
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
      <!--Grid column-->

      <!--Grid column-->
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
      <!--Grid column-->

      <!--Grid column-->
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
      <!--Grid column-->
    </div>
    <!--Grid row-->
  </div>
  <!-- Grid container -->


</footer>



<script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/c6b31a7173.js" crossorigin="anonymous"></script>
  <script src="javaType.js"></script>

</html>