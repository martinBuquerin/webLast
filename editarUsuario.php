<?php
/* ini_set Establece el valor de una directiva  */
ini_set('display_errors', 1);
/*errores de inicio */
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<?PHP
if (!isset($_GET['id'])) {
  echo $_GET['id'];
  //header('Location: index.php');
} else {
  include("conexion.php");



  $id = $_GET['id'];


  $sql = $conexion->prepare("SELECT * FROM usuario WHERE email = ?;");
  $resultado = $sql->execute([$id]);

  $persona = $sql->fetch(PDO::FETCH_OBJ); //CREANDO EL OBJETO CON EL RESULTADO DE LA CONSULTA 	
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="lb/css/bootstrap.min.css" />
  <title>Editar</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <?php session_start(); ?>

</head>

<body>
  <div class="container">
    <form action="updateUsuario.php" method="post" class="form-registro" enctype="multipart/form-data">
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre2" name="nombre2" placeholder="Nombre" value="<?php echo $persona->nombre; ?>">
          </div>
          <div class="form-group col-md-6">
            <label for="apellido">Apellido</label>
            <input type="text" class="form-control" id="apellido2" name="apellidos2" placeholder="Apellidos" value="<?php echo $persona->apellido; ?>">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="email">Email</label>
            <input type="text" class="form-control" id="correo2" name="correo2" placeholder="Correo" value="<?php echo $persona->email; ?>">
          </div>
          <div class="form-group col-md-6">
            <label for="telefono">Telefono</label>
            <input type="text" class="form-control" id="telefono2" name="telefono2" placeholder="Telefono" value="<?php echo $persona->telefono; ?>">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="contraseña">Contraseña</label>
            <input type="password" class="form-control" id="contrasena2" name="contrasena2" placeholder="Contraseña" value="<?php echo $persona->contrasena; ?>">
          </div>
          
        </div>
        <?php 
        if ($persona->roles_idRol == 9){
        ?>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="nombreEmpresa">Nombre de la empresa</label>
            <input type="text" class="form-control" id="nombreEmpresa" name="nombreEmpresa" placeholder="Nombre Empresa" value="<?php echo $persona->nombreEmpresa; ?>">
          </div>
          <div class="form-group col-md-6">
            <label for="descripcionEmpresa">Descripción de la empresa</label>
            <input type="text" class="form-control" id="descripcionEmpresa" name="descripcionEmpresa" placeholder="Descripcion Empresa" value="<?php echo $persona->descripcionEmpresa; ?>">
          </div>
        </div>
        <?php 
        }
        ?>
        <div class="form-group col-md-6">
            <label>Imagen</label>
            <input type="file" name="foto"><br>
          </div>
  

                                            
        <input type="hidden" id="id2" name="id2" value="<?php echo $persona->email; ?>">
        <button type="submit" class="btn btn-primary btn-lg" id="editar" name="editar">Editar</button>
        
      
      </form>




        <div class="mb-3 mt-3 justify-content:center;">
          <tr>

            <td colspan="2" style="text-align: center;"></td>
          </tr>
        </div>
      </table>

  </div>
</body>
<script src="recursos/bootStrap/js/bootstrap.min.js"></script>
<script src="recursos/java.js"></script>
<script src="recursos/fontAw/js/all.js"></script>

</html>