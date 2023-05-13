<!doctype html>
<html lang="en" style="background-color:#D6DBDF">

<head>
  <title>Tienda</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">

    <link href=" ./css/estilosIndex.css" rel="stylesheet">

</head>

<body>
  <header style= "background-image: url('../img/BiciHead.jpg');">
    
<br>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="./index.html"> <strong></strong> </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          
          <h1 style="color:black;">ⒷⓘⓒⓘⓉⓔⓒ</h1>
          <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
          <div class="container-fluid">
    <form class="d-flex" name="busqueda" method="POST" action="busquedaU.php">
      <input class="form-control me-2" type="text" placeholder="Busqueda de producto" name="IdAlu" style="width:330px">
      <button class="btn btn-outline-success" type="submit">Buscar</button>
    </form>
  </div>
                        <a href="ver_carritoU.php" class="button is-success">
                            <strong>Ver carrito <?php
                                                include_once "FuncionesCarrito.php";
                                                $conteo = count(obtenerIdsDeProductosEnCarrito());
                                                if ($conteo > 0) {
                                                    printf("(%d)", $conteo);
                                                }
                                                ?>&nbsp;<i class="fa fa-shopping-cart"></i></strong>
                        </a>
                                              </div>
          
          <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
              
            <li class="nav-item">
              <li class="nav-fill">
                <a  class="nav-link active" href="../php/cerrarSesion.php"  aria-disabled="true">Log Out</a>
              </li>


            </ul>
          </div>
        </div>
      </nav>
  </header>


  <main style="background-color:#D6DBDF">
    
      
  <?php
include_once "FuncionesCarrito.php";
$productos = obtenerProductos();
?>

<br>

    
        <h2 style="text-align:center; font-family:monaco" class="is-size-2" >Productos</h2>
  

<?php foreach ($productos as $producto) { ?>

  <br>
    <div class="columns">
        <div class="column is-full">
            <div class="card">
                <header class="card-header">
                    <p class="card-header-title is-size-4">
                        <?php echo $producto->nombre ?>
                    </p>
                </header>
                <div class="card-content">
                        <?php echo $producto->descripcion ?>
                    
                    <h1 class="is-size-4">$<?php echo number_format($producto->precio, 2) ?></h1>
                    <br>
                    <?php if (productoYaEstaEnCarrito($producto->id)) { ?>
                        <form action="eliminar_del_carritoU.php" method="post">
                            <input type="hidden" name="id_producto" value="<?php echo $producto->id ?>">
                            <span class="button is-success">
                                <i class="fa fa-check"></i>&nbsp;En el carrito
                            </span>
                            <button class="button is-danger">
                                <i class="fa fa-trash-o"></i>&nbsp;Quitar
                            </button>
                        </form>
                    <?php } else { ?>
                        <form action="agregar_al_carritoU.php" method="post">
                            <input type="hidden" name="id_producto" value="<?php echo $producto->id ?>">
                            <button class="button is-primary">
                                <i class="fa fa-cart-plus"></i>&nbsp;Agregar al carrito
                            </button>
                        </form>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
      
<br>

  </main>
  <footer style="text-align:center" >  
                <br>
                <div >
                   <a href="./indexUser.php"><b>Regresar al menu principal</b></a>
                    <br>
                    <br>
                    <b>BiciTec S.A de C.V.</b>
                    <br>
                    <br>
                </div>
                   
            </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>
