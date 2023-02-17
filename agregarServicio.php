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









<body>

    <div class="container-fluid d-flex justify-content-center pt-4 bg-body rounded" style="width: 100%; height:1000px; ">

        <form action="insertarServicio.php" method="post" class="form-registro" enctype="multipart/form-data">

            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="inputPassword">Nombre el nuevo servicio</label>
                    <input type="text" class="form-control" id="servicio" name="servicio" placeholder="Servicio">
                </div>
                <div class="form-group col-md-12">
                    <button type="submit" class="btn btn-success float-end" name="insertar">Agregar</button>
                </div>

                <div class="form-group col-md-12">
                    <a href="administrador.php" class="btn btn-success float-end">Volver</a>
                    
                </div>


            </div>



        </form>
    </div>


    <script src="recursos/bootStrap/js/bootstrap.min.js"></script>
    <script src="recursos/java.js"></script>
    <script src="recursos/fontAw/js/all.js"></script>
</body>

</html>