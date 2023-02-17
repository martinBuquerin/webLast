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
    <script src="recursos/ChartsJs/js/highcharts.js"></script>
    <?php session_start(); ?>
</head>











<body><div id="container" style="width:100%; height:400px;"></div>

    <div class="container-fluid d-flex justify-content-center pt-4 bg-body rounded" style="width: 100%; height:1000px; ">

        <form action="insertarOfrece.php" method="post" class="form-registro" enctype="multipart/form-data">
          

                <div class="form-row">


                    <div class="form-group col-md-12">
                        <select class="form-control" name="profesional" id="rol">
                            <?php
                            require("conexion.php");


                            $sql = $conexion->query("SELECT * FROM usuario");

                            $resultado = $sql->fetchALL(PDO::FETCH_OBJ);


                            foreach ($resultado as $result) {

                            ?>

                                <option><?php echo $result->email; ?></option>


                            <?php
                            }
                            ?>
                        </select>
                    </div>


                    <div class="form-group col-md-12">
                        <select class="form-control" name="nombreServicio" id="rol">
                        <?php
                            require("conexion.php");


                            $sql = $conexion->query("SELECT * FROM servicio");

                            $resultado = $sql->fetchALL(PDO::FETCH_OBJ);


                            foreach ($resultado as $result) {

                            ?>

                                <option><?php echo $result->nombre; ?></option>


                            <?php
                            }
                            ?>
                      
                        </select>
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

    <script>
 document.addEventListener('DOMContentLoaded', function () {
        const chart = Highcharts.chart('container', {
            chart: {
                type: 'bar'
            },
            title: {
                text: 'Tipos de empleados'
            },
            xAxis: {
                categories: [
                    <?php 
            
            $conexion = mysqli_connect("localhost", "root", "1234","proyecth");
                $sql = mysqli_query($conexion, "SELECT count(*)  as 'total', nombre FROM servicio S inner join ofrece O on S.idServicio = O.servicio_idServicio group by idServicio");


                  while ($result = mysqli_fetch_array($sql)) {
                   
                   echo "['" .$result["nombre"]." '],";
                }    
                ?>
                ]
            },
            yAxis: {
                title: {
                    text: ''
                }
            },
            series: [{
                name: 'Rol',
            
                data:[
<?php           $conexion = mysqli_connect("localhost", "root", "1234","proyecth");
                $sql = mysqli_query($conexion, "SELECT count(*)  as 'total' FROM servicio S inner join ofrece O on S.idServicio = O.servicio_idServicio group by idServicio");


                  while ($result = mysqli_fetch_array($sql)) {
                   
                   echo "[" .intval($result['total'])."],";
                   
                    
       
    } 
    
    ?>
                ]
            }]
        });
    });

</script>

    <script src="recursos/bootStrap/js/bootstrap.min.js"></script>
    <script src="recursos/java.js"></script>
    <script src="recursos/fontAw/js/all.js"></script>
</body>

</html>