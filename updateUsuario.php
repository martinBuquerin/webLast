<?php

  if(isset($_POST['editar'])){
        include 'conexion.php';





        $id2 = $_POST['id2'];
        $nombre2 = $_POST['nombre2'];
        $apellidos2 = $_POST['apellidos2'];
        $correo2 = $_POST['correo2'];
        $nombreEmpresa = $_POST['nombreEmpresa'];
        $descripcionEmpresa = $_POST['descripcionEmpresa'];
        $contrasenia2 = $_POST['contrasena2'];
        $telefono2 = $_POST['telefono2'];

        if($nombreEmpresa && $descripcionEmpresa){

          //obtener nombre nativo del archivo que va a subir
    $name = $_FILES['foto']['name'];
    //obtener el archivo temporal
    $tmp_name = $_FILES['foto']['tmp_name'];
    $error = $_FILES['foto']['error'];
    $size = $_FILES['foto']['size'];
    $max_size = 30000 * 30000;
    $type = $_FILES['foto']['type'];
 
        if($error){
            $resultado = "Ha ocurriod un error";
            echo $resultado;
        } else if($size > $max_size){
            $resultado = "El archivo supera el maximo permitido 1MB";
            echo $resultado;
        }else if($type != 'image/jpg' && $type != 'image/jpeg' && $type != 'image/png' && $type != 'image/jfif' && $type != 'image/gif' ){
            $resultado = "Imagenes validas";
            echo $resultado;
        }else{
            $ruta = "fotos" . $name;
            move_uploaded_file($tmp_name, $ruta);
           
              
            $sql = $conexion -> prepare("UPDATE usuario SET nombre=?, apellido=?, telefono=?, contrasena=?, imagen=?, nombreEmpresa=?, descripcionEmpresa=? WHERE email=? ");
            $resultado = $sql -> execute([$nombre2,$apellidos2,$telefono2,$contrasenia2,$ruta,$nombreEmpresa,$descripcionEmpresa,$id2]);
    
            if($resultado==true){
    
                header('Location: listarUsuario.php');
           
            }else{
              echo "Error al editar";
            }
       
        }
      }else{

                //obtener nombre nativo del archivo que va a subir
    $name = $_FILES['foto']['name'];
    //obtener el archivo temporal
    $tmp_name = $_FILES['foto']['tmp_name'];
    $error = $_FILES['foto']['error'];
    $size = $_FILES['foto']['size'];
    $max_size = 30000 * 30000;
    $type = $_FILES['foto']['type'];
 
        if($error){
            $resultado = "Ha ocurriod un error";
            echo $resultado;
        } else if($size > $max_size){
            $resultado = "El archivo supera el maximo permitido 1MB";
            echo $resultado;
        }else if($type != 'image/jpg' && $type != 'image/jpeg' && $type != 'image/png' && $type != 'image/jfif' && $type != 'image/gif' ){
            $resultado = "Imagenes validas";
            echo $resultado;
        }else{
            $ruta = "fotos" . $name;
            move_uploaded_file($tmp_name, $ruta);
           
              
            $sql = $conexion -> prepare("UPDATE usuario SET nombre=?, apellido=?, telefono=?, contrasena=?, imagen=? WHERE email=? ");
            $resultado = $sql -> execute([$nombre2,$apellidos2,$telefono2,$contrasenia2,$ruta,$id2]);
    
            if($resultado==true){
    
                header('Location: index.php');
           
            }else{
              echo "Error al editar";
            }
       
        }
  


    

  }
}

    