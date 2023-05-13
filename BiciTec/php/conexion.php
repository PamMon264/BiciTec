<?php

$servidor   = "127.0.0.1";
$usuario    = "root";
$contraseña = "";
$BD         = "bicis";

$conexion = mysqli_connect($servidor, $usuario, $contraseña, $BD);

/*if(!$conexion){
    echo "fallo la conexion <br>"
    or die("conexion failed: ".mysqli_connect_error());

}
else{
    echo("conexion exitosa");
}*/

?>