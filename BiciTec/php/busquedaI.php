<?php

include("conexion.php");

$IdAlu    = $_POST['IdAlu'] ?? NULL;



$consulta = "SELECT nombre FROM productos WHERE UPPER(nombre) = UPPER('$IdAlu')";

$consulta = mysqli_query($conexion, $consulta);
$consulta = mysqli_fetch_array($consulta);


$sql = "SELECT * FROM productos WHERE UPPER(nombre)= UPPER('$IdAlu')"; 

$consultaId = mysqli_query($conexion, $sql);
$consultaId = mysqli_fetch_array($consultaId);


if($consulta){
?>

<!DOCTYPE html>

<html lang="en" style= "background-image: url('../img/FondoBic.jpg');">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">    
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Busqueda de producto</title>
        <link href=" ../css/estilosRegLib.css" rel="stylesheet">
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">


        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">

    </head>
    <body>
       

<br>

    
        <h2 style="text-align:center; font-family:monaco" class="is-size-2" >Producto</h2>
  
        
  <br>
    <div class="columns">
        <div class="column is-full">
            <div class="card">
                <header class="card-header">
                    <p class="card-header-title is-size-4">
                        <?php echo $consultaId['nombre'] ?>
                    </p>
                </header>
                <div class="card-content">
                        <?php echo $consultaId['descripcion'] ?>
                    
                    <h1 class="is-size-4">$<?php echo number_format($consultaId['precio'], 2) ?></h1>
                    <br>
                    
                            <button class="button is-primary">
                                <a href="../login.html" class="fa fa-cart-plus">Iniciar Sesion</a>
                            </button>
                    
                </div>
            </div>
        </div>
    </div>

        <br>
        
            <footer >  
                <br>
                <div >
                   <a href="../indexAdmin.php"><b>Regresar al menu principal</b></a>
                    <br>
                    <br>
                    <b>BiciTec S.A. de C.V.</b>
                    <br>
                    <br>
                </div>
                   
            </footer>

</body></html>

<?php
}
else{

     echo "<br> El producto no existe";
     echo "<br> <a href='../indexAdmin.php'>Intentar de nuevo</a>" ;
}

?>