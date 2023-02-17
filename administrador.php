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




    <body>
                <h2 class="text-center">Funciones del administrador</h2>
        <div class="container-fluid d-flex bg-body rounded" style="margin-top:40px; margin-left:20px">
            <div class="row justify-content-center" style="margin: 5px;">
                <div class="col m-4 ">
                    <a href="agregarServicio.php" class="btn btn-success">Agregar Servicio</a>
                </div>
                <div class="col m-4">
                    <a href="registro.php" class="btn btn-success">Agregar Usuarios</a>
                </div>
                <div class="col m-4">
                    <a href="direccion.php" class="btn btn-success">Agregar Direcciones</a>
                </div>
                <div class="col m-4">
                    <a href="listarServicio.php" class="btn btn-success">Ver/Modificar Servicio</a>
                </div>
                <div class="col m-4">
                    <a href="listarUsuario.php" class="btn btn-success">Ver/Modificar Usuarios</a>
                </div>
                <div class="col m-4">
                    <a href="listarDireccion.php" class="btn btn-success">Ver/Modificar Direcciones</a>
                </div>
                <div class="col m-4">
                    <a href="reporte.php" class="btn btn-success">Generar reportes</a>
                </div>
                <div class="col mt-4">
                    <a href="ofrece.php" class="btn btn-success">Agregar Profesional a Servicio con Grafico</a>
                </div>
                <div class="col mt-4">
                   
                </div>

            </div>
        </div>
        <div class="row row-cols-auto justify-content-center" style="margin: 5px;">
            <div class="d-flex justify-content-center align-content-center mt-4">
                <a href="cerrarSession.php" class="btn btn-success">Cerrar Sesion</a>
            </div>

        </div>

</main>

<script src="recursos/bootStrap/js/bootstrap.min.js"></script>
<script src="recursos/java.js"></script>
<script src="recursos/fontAw/js/all.js"></script>
</body>

</html>