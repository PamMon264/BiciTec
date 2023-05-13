<?php

include("conexion.php");

$name     =$_GET['name'] ?? NULL;
$email    =$_GET['email'] ?? NULL; 
$password =$_GET['password'] ?? NULL;
$role     =$_GET['role'] ?? NULL;


$passwordHash = password_hash($password, PASSWORD_BCRYPT);

$consultaEmail = "SELECT Correo FROM usuarios WHERE Correo ='$email'";

$consultaEmail = mysqli_query($conexion, $consultaEmail);
$consultaEmail = mysqli_fetch_array($consultaEmail);


if(!$consultaEmail){

    $sql = "INSERT INTO usuarios VALUES ('$name','$email','$password','$role')";


if(mysqli_query($conexion,$sql)) {

echo "<br> Se ha registrado el usuario con exito";
echo "<br><a href='../indexUser.php'>Continuar</a>";
}
else {

   echo "ERROR: ". $sql . "<br>" . mysqli_error($conexion);  

}

}
else{
    echo "El email ya existe.";
    echo "<a href='../registrarUsuario.php'>Intentalo de nuevo</a>";
}

?>