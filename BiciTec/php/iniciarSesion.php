<?php

include("conexion.php");
session_start();
$_SESSION['login'] = false;

$email = $_POST["CorreoUsuario"];
$password = $_POST["Password"];

$sql = "SELECT * FROM usuarios WHERE Correo= '$email'"; 

$resultado = mysqli_query($conexion, $sql);
$consulta = mysqli_fetch_array($resultado);
 


if($consulta)
{
if($password==$consulta['Contraseña']){

        $_SESSION['login']    = true;
        $_SESSION['Nombre']     =$consulta['Nombre'];
        $_SESSION['Correo']    =$consulta['Correo'];
        $_SESSION['Contraseña'] =$consulta['Contraseña'];
        $_SESSION['Role']     =$consulta['Role'];

    
    if($_SESSION['Role']=="admin"){

        header('location:../indexAdmin.php');
    }
    if($_SESSION['Role']=="user"){
        
        header('location:../indexUser.php');

    }
    
        }
    
    else{

        echo "<br><b>Contraseña incorrecta</b>";
        echo "<br><a href='../index.php'>Intentalo de nuevo</a>";
    }

}
else{
    echo "<br><b> El usuario no existe.</b>";
    echo "<br><a href='../index.php'>Intentalo de nuevo</a>";
}

mysqli_close($conexion);

?>