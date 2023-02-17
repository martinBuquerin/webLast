<?php
                  require("conexion.php");
                  
                  $usuario = $_POST['email'];
                  $contrasena = $_POST['contrasena'];

              //  $_SESSION["user"] = $usuario;
               // $_SESSION["pass"] = $contrasena;
                //  $GLOBALS['user'] = $usuario;
                  //$GLOBALS['pass'] = $contrasena;
                    
                 // echo '' . $GLOBALS['user'];
                  //echo '' . $GLOBALS['pass'];
              
                  //var_dump($_POST);
                  //die();
                
                  $sql = $conexion->query("SELECT * FROM usuario WHERE email = '$usuario' AND contrasena = '$contrasena' ");
      
                  $resultado = $sql->fetchALL(PDO::FETCH_OBJ);
                 
                 
                if(!$resultado ){
                  //echo 'Usuario no encontrado';
                  header('Location: index.php');
                }
                else{
                
                    echo 'Conectado';
         
                session_start();
                $_SESSION["user"] = $usuario;
                $_SESSION["pass"] = $contrasena;

           

              
                $sql2 = $conexion->query("SELECT * FROM usuario where email = '$usuario';");

                $resu = $sql2->fetchALL(PDO::FETCH_OBJ);

                foreach ($resu as $r) {

                  $rol = $r->roles_idRol;
                  echo $rol;
                  if ( $rol == 7) {

                    header('Location: administrador.php');
                  } elseif ( $rol == 9) {
                    header('Location: profesional.php');
                  } elseif ( $rol == 8) {
                    header('Location: usuario.php');
                  }
                }

                  

                 }
