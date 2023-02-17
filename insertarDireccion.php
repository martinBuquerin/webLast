<?php
    $resultado = null;
    if(isset($_POST['insertar'])){
        include 'conexion.php';
        $conexion -> exec("SET CHARACTER SET utf8");
        $calle = $_POST['calle'];
        $numero = $_POST['numero'];
        $piso = $_POST['piso'];
        $cp = $_POST['cp'];
        $localidad = $_POST['localidad'];
        $provincia = $_POST['provincia'];
        $pais = $_POST['pais'];
       
        $SQL_INSERT = $conexion->prepare("INSERT INTO direccion(calle, numero, piso, cp, localidad, provincia, pais, usuario_email) VALUES(?,?,?,?,?,?,?,?)");
        $resultado = $SQL_INSERT->execute([$calle,$numero,$piso,$cp,$localidad,$provincia,$pais,$_SESSION['usuario']]);
                if($resultado){
                   echo 'dato insertado correctamente';

                     header('Location: direccion.php');
                }else{
                    echo "Hay algun error al insertar el registro";
                }
            }else{
                echo 'error';
            }
            
?>