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



        <section id="usuarios">
            <div class="container d-flex justify-content-center">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card-header">
                            <h4>Listado Clientes</h4>
                        </div>
                        <table class="table table-striped">
                            <thead class="thead-dark">
                                <tr>
                                   
                                    <th>Nombre</th>
                                    <th>Apellido</th>
                                    <th>Email</th>
                                    <th>Telefono</th>
                                    <th>Imagen</th>
                                    <th>Fecha de Alta</th>
                                    <th>Nombre Empresa</th>
                                    <th>Descripcion Empresa</th>
                                    <th>Rol</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                require("conexion.php");

                                $sql = $conexion -> query("SELECT * FROM usuario");
                                $resultado = $sql -> fetchALL(PDO::FETCH_OBJ);
                                
                                foreach($resultado as $result){

                                 ?>

                                    <tr>
                                        <td><?php echo $result->nombre; ?></td>
                                        <td><?php echo $result->apellido; ?></td>
                                        <td><?php echo $result->email; ?></td>
                                        <td><?php echo $result->telefono; ?></td>
                                        <!--<td> <?php //echo '<img  src="data:image/jpeg;base64,' . base64_encode($result->imagen) . '" class="card-img-top img-fluid" alt="..." />';?></td>-->
                                        <td> <?php echo "<img src='".$result->imagen."' width='50' height='50'>"."</img>"  ?></td>
                                        <td><?php echo $result->fechaAlta; ?></td>
                                        <td><?php echo $result->nombreEmpresa; ?></td>
                                        <td><?php echo $result->descripcionEmpresa; ?></td>
                                        <?php
                                        $sql = $conexion -> query("SELECT * FROM roles where idRol = '$result->roles_idRol'; ");
                                         $res = $sql -> fetchALL(PDO::FETCH_OBJ);
                                         foreach($res as $resu){
                                         ?>
                                        <td><?php echo $resu->nombre; ?></td>
                                        <?php } ?>
                                        <td>
                                            <a href="editarUsuario.php? id=<?php echo $result->email; ?>" class="btn btn-secondary">
                                                <i class="fas fa-angle-double-right"></i> Editar
                                            </a>
                                        </td>
                                        <td>
                                        <a href="eliminarUsuario.php? id=<?php echo $result->email; ?>" class="btn btn-secondary">
                                                <i class="fas fa-angle-double-right"></i> Eliminar
                                            </a>
                                        </td>


                                    <?php
                                }
                                    ?>
                            </tbody>
                        </table>
                    </div>

                    <td>
                        <a href="administrador.php" class="btn btn-secondary">
                            <i class="fas fa-angle-double-right"></i> Volver
                        </a>
                    </td>
                </div>
            </div>
        </section>


</main>


<script src="recursos/bootStrap/js/bootstrap.min.js"></script>
<script src="recursos/java.js"></script>
<script src="recursos/fontAw/js/all.js"></script>
</body>

</html>