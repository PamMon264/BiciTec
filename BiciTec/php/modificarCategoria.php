<?php
include("conexion.php");

$IdAlu        =$_POST['Id'] ?? NULL;
$ApellidoP    =$_POST['ApePat'] ?? NULL;
$ApellidoM    =$_POST["ApeMat"]; 
$Curp         =$_POST['Curp'] ?? NULL;


$sql = "UPDATE productos SET nombre='$ApellidoP', descripcion='$ApellidoM', precio='$Curp' WHERE id='$IdAlu'" ;
$consulta = mysqli_query($conexion,$sql);

if($consulta){
    echo "Se ha modificado con exito";
    echo "<br><a href='../indexAdmin.php'> Continuar </a>";
    echo "<br><br><a href='../modCategoria.php'> Modificar otra categoria </a>";
}
?>