<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/recursos/fontAw/css/all.css">
    <link rel="stylesheet" type="text/css" href="recursos/estilo.css">
    <link rel="stylesheet" type="text/css" href="recursos/bootStrap/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Mostrar Datos</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid ">
            <a class="navbar-brand" href="#"><img style="width: 90px;height: 50px;" src="recursos/imagenes/fotoBarra.png"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarSupportedContent">

                <ul class="navbar-nav me-auto mb-2  ">
                    <li class="nav-item "><a class="nav-link active" style="width: 390px;" aria-current="page" href="#"> </a></li>


                    <li class="nav-item ">
                        <a class="nav-link active" aria-current="page" href="#">Servicios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Provincias</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Beneficios</a>
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

    <div class="modal fade" id="myModal">
        <div class="modal-dialog modal-dialog-centered modal-xl">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="m-2 ">

                    <button type="button" class="btn float-end" data-dismiss="modal"><i class="fa-solid fa-circle-xmark"></i></button>
                </div>
                <div class="modal-body ">

                    <h4 class="modal-title pt-2" style="text-align: center;">Login</h4>
                    <form class="p-4 mt-4">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Usuario</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="d-flex justify-content-center align-content-center mt-4 ">
                            <button type="submit" class="btn btn-primary">Entrar</button>
                        </div>
                    </form>


                </div>

            </div>

        </div>
    </div>


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
                        <div class="col mt-1">
                            <h5 class="card-title"><?php echo $result->nombreEmpresa; ?></h5>
                            <div class="row">
                                <div class="col mt-2 ml-2">
                                    <p><?php echo $result->descripcionEmpresa; ?></p>
                                </div>
                            </div>
                        </div>

                        <div class="col mt-2">
                        <?php echo "<img src='" . $result->imagen . "' width='50' height='50'>" . "</img>"; ?>
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

<footer class="bg-success fixed-bottom ">
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