<?php

    if(!isset($_GET['id'])){
        exit();

    }else{
        $id2 = $_GET['id'];
        include("conexion.php");

        $sql = $conexion -> prepare("DELETE FROM usuario WHERE email = ?;");
        $resultado = $sql -> execute([$id2]);

        if($resultado==true){

            header('Location: administrador.php');
       
        }else{
            echo "Error al eliminar";
        }



    }

?>