<?php
# Es responsabilidad del programador hacer algo con los productos
include_once "FuncionesCarrito.php";
$productos = obtenerProductosEnCarrito();
# Puede que solo quieras los ids, para ello invoca a obtenerIdsDeProductosEnCarrito();
?>

<!DOCTYPE html>

<html lang="en" style= "background-image: url('../img/FondoBic.jpg');">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">    
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Registro de producto</title>
        <link href=" ../css/estilosRegLib.css" rel="stylesheet">
        
    </head>

    <header>

    <h2 style="text-align:center; font-family:monaco" class="is-size-1" >¡FELICIDADES POR TU COMPRA!</h2>

    </header>

    <body>
 
    <h2 style="text-align:center; font-family:monaco" class="is-size-1" >Gracias por comprar con BiciTec.</h2>

    <br>
        
            <footer >  
                <br>
                <div >
                   <a href="../indexUser.php"><b>Regresar al menu principal</b></a>
                    <br>
                    <br>
                    <a href="tiendaU.php"><b>Volver a la tienda</b></a>
                    <br>
                    <br>
                    <b>BiciTec S.A de C.V.</b>
                    <br>
                    <br>
                </div>  
            </footer>

</body></html>