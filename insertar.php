<?php
    $resultado = null;
    if(isset($_POST['insertar'])){
        include 'conexion.php';
        $conexion -> exec("SET CHARACTER SET utf8");
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $telefono = $_POST['telefono'];
        $email = $_POST['email'];
        $contrasena = $_POST['contrasena'];
       
        $fechaAlta = date("Y/m/d");
        $rol = $_POST['rol'];

        
 
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
            $SQL_GET_ROL = $conexion->prepare("SELECT idRol FROM roles WHERE nombre = ? ;");
            $res = $SQL_GET_ROL->execute([$rol]);
            $resu = $SQL_GET_ROL -> fetch(PDO::FETCH_OBJ);
           
            if($resu){
                $rolID = $resu -> idRol;
                $SQL_INSERT = $conexion->prepare("INSERT INTO usuario(nombre, apellido, email, telefono, fechaAlta ,contrasena, imagen, roles_idRol) VALUES(?, ?, ?, ?, ?, ?, ?, ?)");
    
        
                $resultado = $SQL_INSERT->execute([$nombre, $apellido, $email, $telefono, $fechaAlta, $contrasena, $ruta, $rolID]);
                
                if($resultado == true){
                   echo 'dato insertado correctamente';
                     header('Location: administrador.php');
                }else{
                    echo "Hay algun error al insertar el registro";
                }
            }else{
                echo 'error';
            }
            
       
       
        }

}
     
        




?>