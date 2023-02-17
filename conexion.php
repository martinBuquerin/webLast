<?PHP

//VOY LAS VARIABLES PARA GURADR LOS PARAMETROS DE LA CONEXIÓN
    $contrasena = '1234';
    $usuario = 'root';
    $bd ='proyecth';

    try{
        // montar la conexion a la base de datos
        $conexion = new PDO('mysql:host=localhost;dbname='.$bd,$usuario,$contrasena);
        $con = mysqli_connect("localhost",$usuario,$contrasena,$bd);
       // echo "conectando con la base de datos";


    } catch(Exception $e){
            echo "Error de conexión" . $e->getMessage();
    }










?>