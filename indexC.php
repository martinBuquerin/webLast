<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>



  <link rel="stylesheet" href="./recursos/lb/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"> <img style="width: 100px;height: 101px; margin-left:4rem; margin-top:20px" src="recursos/imagenes/cafe.png"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2  ">
        <li class="nav-item "><a class="nav-link active" style="width: 390px;" aria-current="page" href="#">
          </a></li>
        <li class="nav-item ">
          <a class="nav-link active" aria-current="page" href="#">Servicios</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Provincias</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Beneficios</a>
        </li>
      </ul>
      <a href="#" style=" font-weight: 600;font-style: normal;" class=" btn btn-success float-end" data-toggle="modal" data-target="#modalRegistroAdmninistrador"><i class="far fa-user"></i>Identificate</a>
    </div>
  </div>
</nav>

<body>




  <div class="modal" id="modalRegistroUsuario">
    <div class="modal-dialog modal-dialog-centered modal-xl">
      <!-- Modal content-->
      <div class="modal-content d-flex " style="width: 42rem; ">
        <div class="form-group" style="margin-bottom:0rem;">
          <button type="button" class="btn btn-danger float-end" data-dismiss="modal" style="margin-top:1rem;margin-right:1rem">X</button>
        </div>
        <div class="modal-body ">
          <div class="form-group">
            <div class="row">
              <div class="col" style="margin-left:2.5rem;">
                <img src="./recursos/imagenes/login-icon.svg" alt="login-icon" style="height: 5rem;padding-left:16px;padding-top:13px" />
              </div>
              <div class="col">
                <h3 style="margin-right:3rem; width:25rem;">Formulario de registro</h3>
              </div>
            </div>
          </div>

          <form action="insertar.php" method="post" class="form-registro" enctype="multipart/form-data">
            <div class="form-group" style="margin-top: 20px;">
              <div class="row" style="padding-top:22px">
                <div class="col">
                  <label for="email" style="margin-left:6rem; margin-top:8px;">Email</label>
                </div>
                <div class="col">
                  <input type="email" class="form-control" style="width: 23rem; margin-right:4rem;" name="email" id="email">
                </div>
              </div>
            </div>

            <div class="form-group" style="margin-top: 20px;">
              <div class="row">
                <div class="col ">
                  <label for="password" style="margin-left:2rem; margin-top:8px;">Contraseña</label>
                </div>
                <div class="col">
                  <input type="password" class="form-control" style="width: 23rem; margin-right:4rem;" name="contrasena" id="password">
                </div>
              </div>
            </div>


            <div class="form-group" style="margin-top: 20px;">

              <div class="col hidden">
                <select class="form-control" style="width: 17rem; margin-right:7rem;" name="rol" id="rol">
                  <option style="text-align: center;" name="Cliente">Cliente</option>
                </select>
              </div>
            </div>
        </div>

        <button type="submit" class="btn btn-success " style="width: 13rem; margin-left:13rem; margin-top:20px; margin-bottom:20px;" name="insertar" value="insertar">Registrarse</button>
        </form>
      </div>
      <!--<a href="administrador.php" class="btn btn-success float-end" style="margin:1rem;">Volver</a>-->
    </div>
  </div>








  <div class="modal fade" id="modalRegistroAdmninistrador">
    <div class="modal-dialog modal-dialog-centered modal-xl">
      <!-- Modal content-->
      <div class="modal-content d-flex " style="width: 42rem; ">
        <div class="form-group" style="margin-bottom:0rem;">
          <button type="submit" class="btn btn-danger float-end" data-dismiss="modal" style="margin-top:1rem;margin-right:1rem" name="salir" value="X">X</button>
        </div>
        <div class="modal-body ">
          <div class="form-group">
            <div class="row">
              <div class="col" style="margin-left:2.5rem;">
                <img src="./recursos/imagenes/login-icon.svg" alt="login-icon" style="height: 5rem;padding-left:16px;padding-top:13px" />
              </div>
              <div class="col">
                <h3 style="margin-right:3rem; width:25rem;">Formulario de registro</h3>
              </div>
            </div>
          </div>

          <form action="insertar.php" method="post" class="form-registro" enctype="multipart/form-data">
            <div class="form-group" style="margin-top: 20px;">
              <div class="row" style="padding-top:22px">
                <div class="col">
                  <label for="email" style="margin-left:6rem; margin-top:8px;">Email</label>
                </div>
                <div class="col">
                  <input type="email" class="form-control" style="width: 23rem; margin-right:4rem;" name="email" id="email">
                </div>
              </div>
            </div>

            <div class="form-group" style="margin-top: 20px;">
              <div class="row">
                <div class="col ">
                  <label for="password" style="margin-left:2rem; margin-top:8px;">Contraseña</label>
                </div>
                <div class="col">
                  <input type="password" class="form-control" style="width: 23rem; margin-right:4rem;" name="contrasena" id="password">
                </div>
              </div>
            </div>


            <div class="form-group" style="margin-top: 20px;">
              <div class="row">
                <div class="col ">
                  <label for="rol" style="margin-left:7rem; margin-top:8px;">Rol</label>
                </div>
                <div class="col">
                  <select class="form-control" style="width: 17rem; margin-right:7rem;" name="rol" id="rol">
                    <option style="text-align: center;" name="Administrador">Administrador</option>
                    <option style="text-align: center;" name="Profesional">Profesional</option>
                    <option style="text-align: center;" name="Cliente">Cliente</option>
                  </select>
                </div>
              </div>
            </div>

            <button type="submit" class="btn btn-success " style="width: 13rem; margin-left:13rem; margin-top:20px; margin-bottom:20px;" name="insertar" value="insertar">Registrarse</button>
          </form>
        </div>
        <!--<a href="administrador.php" class="btn btn-success float-end" style="margin:1rem;">Volver</a>-->
      </div>
    </div>
  </div>




</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</html>