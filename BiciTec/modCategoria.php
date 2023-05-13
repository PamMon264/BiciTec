<?php
    include("php/conexion.php");
?>
<!DOCTYPE html>

<html lang="en" style= "background-image: url('./img/FondoBic.jpg');">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">    
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Modificar Producto</title>
        <link href=" ./css/estilosEliLib.css" rel="stylesheet">
        
    </head>
    <body>
       
        <div >
            <div >
            <form name="busqueda" method="POST" action="php/categoriaModificar.php">
                                    <label for="IdAlu">Nombre</label>
                        <input type="text" name="IdAlu" class="form-control" placeholder="Modelo de la bicicleta" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}" required >

                
                <button  type="submit"  >
                        Buscar Producto
                       
                    </button>
</form>

    
                
            </div>
        </div>
        <br>
        
            <footer >  
                <br>
                <div >
                   <a href="./indexAdmin.php"><b>Regresar al menu principal</b></a>
                    <br>
                    <br>
                    <b>BiciTec S.A. de C.V.</b>
                    <br>
                    <br>
                </div>
                   
            </footer>

</body></html>
