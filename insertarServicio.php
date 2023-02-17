<?php
    $resultado = null;
    if(isset($_POST['insertar'])){
        include 'conexion.php';
        $conexion -> exec("SET CHARACTER SET utf8");
        $servicio = $_POST['servicio'];
        $SQL_INSERT = $conexion->prepare("INSERT INTO servicio(nombre) VALUES(?)");
        $resultado = $SQL_INSERT->execute([$servicio]);
                if($resultado){
                   echo 'dato insertado correctamente';

                     header('Location: agregarServicio.php');
                }else{
                    echo "Hay algun error al insertar el registro";
                }
            }else{
                echo 'error';
            }
            
?>