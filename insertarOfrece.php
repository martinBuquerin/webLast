<?php
    $resultado = null;
    if(isset($_POST['insertar'])){
        include 'conexion.php';
        $conexion -> exec("SET CHARACTER SET utf8");
        $profesional = $_POST['profesional'];
        $SQL_GET_EMAIL = $conexion->prepare("SELECT email FROM usuario WHERE email = ? ;");
        $res = $SQL_GET_EMAIL->execute([$profesional]);
        $resu = $SQL_GET_EMAIL -> fetch(PDO::FETCH_OBJ);
       
        if($resu){
            $idProfesional = $resu -> email;
            
            $servicio = $_POST['nombreServicio'];
            $SQL_GET_SERVICIO = $conexion->prepare("SELECT idServicio FROM servicio WHERE nombre = ? ;");
            $resul = $SQL_GET_SERVICIO->execute([$servicio]);
            $resultad = $SQL_GET_SERVICIO -> fetch(PDO::FETCH_OBJ);
            
            if($resultad){
                $idServicio = $resultad -> idServicio;
                $SQL_INSERT = $conexion->prepare("INSERT INTO ofrece(usuario_email, servicio_idServicio) VALUES(?, ?)");
                $resultado = $SQL_INSERT->execute([$idProfesional,$idServicio]);
                        if($resultado){
                           echo 'dato insertado correctamente';
        
                             header('Location: ofrece.php');
                        }else{
                            echo "Hay algun error al insertar el registro";
                        }
                    }else{
                        echo 'error';
                    }
            }
       
        }
            
?>