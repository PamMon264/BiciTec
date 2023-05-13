<!DOCTYPE html>

<html lang="en" style= "background-image: url('./img/FondoBic.jpg');">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">    
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Registrar</title>
        <link href=" ./css/estilosReg.css" rel="stylesheet">
        
    </head>
    <body>
       
        <div >
            <div >
                    
                <form name="NuevoUsuario" metod="POST" action="./php/crearUsuario.php">
                        <label for="RegUsuario">Nombre</label>
                        <input type="text" name="name"  placeholder="Nombre del usuario" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}" required >
                        <br>       
                        <label for="RegCorreo">Correo</label>
                        <input type="email" name="email"  placeholder="Correo del usuario"  required>
                        <br>
                        <label for="RegContraseña">Contrase&ntildea</label>
                        <input type="password" name="password"  placeholder="Contraseña del usuario"  pattern="[a-zA-Z0-9]{8,12}" required>
                        <br>
                        <input name="role" value="user" readonly>
                        
                        <br>

                  <br>
                  <button name="login" type="submit" >
                    Registrar
                </button>
                <button style="margin-right=5px" type="reset" >
                        Reiniciar campos
                </button>
                   
                </form>
            </div>
        </div>
        <br>
        
            <footer >  
                <br>
                <div >
                   <a href="./index.html"><b>Regresar al menu principal</b></a>
                    <br>
                    <br>
                    <b>BiciTec S.A de C.V</b>
                    <br>
                    <br>
                </div>
                   
            </footer>

</body></html>

                       
                    
                 