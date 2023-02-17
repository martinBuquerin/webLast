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

<main>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid ">
        <img style="width: 120px;height: 50px;" src="recursos/imagenes/log.png">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarSupportedContent">

            <ul class="navbar-nav me-auto mb-2  ">
                <li class="nav-item "><a class="nav-link active" style="width: 390px;" aria-current="page" href="#">
                    </a></li>


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


                  <a>
                        <?php 
                        if(isset($_SESSION['user']) && !empty($_SESSION['user'])) {
                           ?> 
                            <a href="#" style=" font-weight: 600;font-style: normal;" class=" btn btn-success float-end" data-toggle="modal" data-target="#myModalLogueado"><i class="far fa-user"></i><?php  echo $_SESSION['user']?>
                        <?php
                        }else{
                            ?> 
                            <a href="#" style=" font-weight: 600;font-style: normal;" class=" btn btn-success float-end" data-toggle="modal" data-target="#myModal" ><i class="far fa-user"></i><?php   echo 'Identificate' ?>
                        <?php
                           
                         }?></a>
                </li>
            </ul>





        </div>
    </div>
</nav>









<body>
<div class="modal fade" id="myModalLogueado">
    <div class="modal-dialog modal-dialog-centered modal-xl">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="m-2 ">

          <button type="button" class="btn float-end" data-dismiss="modal"><i class="fa-solid fa-circle-xmark"></i></button>
        </div>
        <div class="modal-body ">


          <form class="p-4 mt-4" action="" method="POST">
           
            <div class="d-flex justify-content-center align-content-center mt-4 ">
            <a  data-toggle="modal" data-target="#modificarPerfil" class="btn btn-success">Perfil</a >
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

  <div class="modal fade" id="modificarPerfil">
    <div class="modal-dialog modal-dialog-centered modal-xl">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="m-2 ">

          <button type="button" class="btn float-end" data-dismiss="modal"><i class="fa-solid fa-circle-xmark"></i></button>
        </div>
        <div class="modal-body ">


          <form class="p-4 mt-4" action="" method="POST">
           
            <div class="d-flex justify-content-center align-content-center mt-4 ">
            <a href="" class="btn btn-success">editar perfil</a >
            </div>
 
            <div class="d-flex justify-content-center align-content-center mt-4">
              <a href="cerrarSession.php" class="btn btn-success">Cerrar Sesion</a>
            </div>
          </form>


        </div>

      </div>

    </div>
  </div>

    <div class="container-fluid d-flex pt-4 bg-body rounded" style="width: 100%; height:1000px; ">

    <?php 
     $sql = $conexion->query("SELECT * from usuario U inner join contrata C on U.email = C.usuario_email inner join ofrece O on O.idOfrece = C.ofrece_idOfrece ");
     $resultado = $sql->fetchALL(PDO::FETCH_OBJ);
    if($resultado){
        ?>
        <div class="row p-2 row-cols-2 justify-content-center" style="height: 750px; width: 100% ">
            <div class="col w-20 p-4">
                <?php
                require("conexion.php");
                //var_dump($_POST);
                //die();
                $sql = $conexion->query("SELECT * from usuario U inner join contrata C on U.email = C.usuario_email inner join ofrece O on O.idOfrece = C.ofrece_idOfrece ");
                $resultado = $sql->fetchALL(PDO::FETCH_OBJ);
                foreach ($resultado as $result) {
                    $valor = $result->usuario_email;
                    $sql = $conexion->query("select * from usuario where email = '$valor'");
                    $resultado2 = $sql->fetchALL(PDO::FETCH_OBJ);
                    foreach ($resultado2 as $res) {
                ?>
                        <div class="row border border-gray border-1 rounded-3 shadow bg-body rounded" style="width: 22rem; margin:5px">
                            <div class="col mt-1">
                                <h5 class="card-title"><?php echo $res->nombreEmpresa;  ?></h5>
                                <div class="row">
                                    <div class="col mt-2 ml-2">
                                        <p style="margin-left: 8px;"><?php echo $res->descripcionEmpresa; ?></p>
                                    </div>
                                </div>
                            </div>

                            <div class="col mt-2">
                                <?php echo '<img  src="data:image/jpeg;base64,' . base64_encode($res->imagen) . '" class="card-img-top img-fluid" alt="..." />'; ?>
                            </div>


                        </div>

                <?php
                    }
                }
                ?>
            </div>


            <div class="col w-60 h-auto "style="margin-left:6px;">
                <div class="card w-auto " >
                    <div class="card-header">
                        Chat
                    </div>
                    <div class="card-body">
                        <p>mensajes aca</p>
                        <p>mensajes aca</p>
                        <p>mensajes aca</p>
                        <p>mensajes aca</p>
                        <p>mensajes aca</p>
                        <p>mensajes aca</p>
                        <p>mensajes aca</p>
                        <p>mensajes aca</p>
                        <p>mensajes aca</p>
                        <p>mensajes aca</p>
                        <p>mensajes aca</p>
                    </div>
                    <div class="card-footer">
                        <form class="overflow-auto">
                            <div class="form-group ">
                                <label for="mensaje">Mensaje</label>
                                <input type="text" class="form-control" id="mensaje" />
                            </div>
                            <button type="submit" class="btn btn-primary float-end">Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

<?php 
}else{

echo 'no tienes  ningun chat en curso';

}?>
    </div>



    </main>


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
</body>

</html>