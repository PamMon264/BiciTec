<!DOCTYPE html>

<html lang="en" style= "background-image: url('./img/FondoBic.jpg');">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">    
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Registro de producto</title>
        <link href=" ./css/estilosRegLib.css" rel="stylesheet">
        
    </head>
    <body>
       
    <div class="columns">
    <div class="column is-one-third">
        <form action="./php/crearRegistro.php" method="post" style="height:400px">
            <div class="field">
                <label for="nombre">Nombre</label>
                <div class="control">
                    <input required id="nombre" class="input" type="text" placeholder="Nombre" name="nombre">
                </div>
            </div>
            <div class="field">
                <label for="descripcion">Descripción</label>
                <div class="control">
                    <textarea name="descripcion" class="textarea" id="descripcion" cols="30" rows="5" placeholder="Descripción" required></textarea>
                </div>
            </div>
            <div class="field">
                <label for="precio">Precio</label>
                <div class="control">
                    <input required id="precio" name="precio" class="input" type="number" placeholder="Precio">
                </div>
            </div>
            <div class="field">
                <div class="control">
                    <button class="button is-success">Guardar</button>
                </div>
            </div>
        </form>
    </div>
</div><br>
        
            <footer >  
                <br>
                <div >
                   <a href="./indexAdmin.php"><b>Regresar al menu principal</b></a>
                    <br>
                    <br>
                    <b>BiciTec S.A de C.V.</b>
                    <br>
                    <br>
                </div>  
            </footer>

</body></html>
