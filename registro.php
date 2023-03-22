<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <?php session_start(); ?>
</head>








<body>

    <div class="container-fluid d-flex justify-content-center  pt-4 bg-body rounded" style="width: 100%; height:1000px; ">


        <div class="row w-50 ">
            <div class="col">
                <h3>Formulario de registro</h3>
                <form action="insertar.php" method="post" class="form-registro" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="name">Nombre</label>
                        <input type="text" class="form-control" name="nombre" id="name">
                    </div>
                    <div class="form-group">
                        <label for="lastName">Apellido</label>
                        <input type="text" class="form-control" name="apellido" id="lastName">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" id="email">
                    </div>
                    <div class="form-group">
                        <label for="phone">Telefono</label>
                        <input type="tel" class="form-control" name="telefono" id="phone">
                    </div>
                    <div class="form-group">
                        <label for="password">Contraseña</label>
                        <input type="password" class="form-control" name="contrasena" id="password">
                    </div>
                    <div class="form-group">

                        <label>Nombre</label>
                        <input type="file" name="foto"><br>



                    </div>
                    <div class="form-group">
                        <label for="rol">Rol</label>
                        <select class="form-control" name="rol" id="rol">
                            <option>Administrador</option>
                            <option>Profesional</option>
                            <option>Cliente</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary" name="insertar" value="insertar">Registrarse</button>
                </form>
                <div class="form-group col-md-12">
                    <a href="administrador.php" class="btn btn-success float-end">Volver</a>

                </div>
            </div>


        </div>


    </div>



</body>




<script src="recursos/bootStrap/js/bootstrap.min.js"></script>
<script src="recursos/java.js"></script>
<script src="recursos/fontAw/js/all.js"></script>
</body>

</html>