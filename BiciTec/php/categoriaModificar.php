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
        
        <title>Modificar producto</title>
        <link href=" ../css/estilosRegLib.css" rel="stylesheet">
        
    </head>
    <body>
       
        <div >
            <div >
            <form name="registro" action="../php/modificarCategoria.php" method="POST" style="height: 570px;">
                                
                                    <label for="ApePat">Modelo</label>
                        <input type="text" name="ApePat"  value="<?php echo $consultaId['nombre'] ?>" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}" required >
                        
                        
                        <label for="precio">Precio</label>
                        <input type="number" name="precio" value="<?php echo $consultaId['precio']?>" pattern="[0-9]" required >


                        <label for="ApeMat" >Decripcion</label>
                        <textarea  type="text" name="ApeMat"  value="<?php echo $consultaId['descripcion'] ?>" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,250}" required ></textarea>
                        

                        <label for="Id">Id</label>
                        <input type="text" name="Id" value="<?php echo $consultaId['id']  ?>" readonly >
                        
<br>
<br>
                                
                    <button  type="submit" name="enviar" value="modificar">
                        Modificar
                    </button>
                
                    <button style= type="reset" value="Borrar">
                        Reiniciar campos
                       
                    </button>

                        </form>
    
                
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

     echo "<br> La categoria no existe";
     echo "<br> <a href='../modCategoria.php'>Intentar de nuevo</a>" ;
}

?>