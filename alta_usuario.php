<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Alta Usuario</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="img/icono_prueba1.png">
    <?php 
          require("inc/conexion.php");
          // Sección mensaje.
          $mensaje = 'Ingrese los nuevos datos';
          if(isset($_GET['mensaje'])){
              if($_GET['mensaje']=='uno'){$mensaje = 'El usuario ya existe en la base';}
          }  
    ?>

    
  </head>
  <body class="container">
    <!--Titulo de la pagina-->
    <div class="alert alert-primary text-center fst-italic" role="alert">
        <h3>Dar de alta nuevo usuario</h3>
    </div>
    <br>
     <!--Formulario-->
     <div class="container">
        <div class=row>
          <div class="col-3"></div>
          <div class="col-6">
            <form action="alta_usuario_sql.php" method="post">
                  <!--Input usuario-->
                 <div class="form-group">
                      <label for="usuario" style="color:green" class="fw-bold">Ingrese usuario</label>
                      <input type="text" id="usuario" name="usuario" placeholder="Escriba un nuevo ususario" class="form-control">
                 </div>
                 <br>
                  <!--Input clave-->
                  <div class="form-group">
                      <label for="clave" style="color:green" class="fw-bold">Ingrese clave</label>
                      <input type="password" id="clave" name="clave" placeholder="Escriba nueva clave" class="form-control">
                  </div>
                 <br>
                  <!--Input rol-->
                  <div class="form-group">
                      <label for="rol" style="color:green" class="fw-bold">Ingrese rol</label>
                      <input type="text" id="rol" name="rol" placeholder="Escriba nuevo rol" class="form-control">
                  </div>
                  <!--Boton-->
                  <button type="submit" class="btn btn-primary container-fluid">Cargar registro</button>
                  <br>
                  <?php echo $mensaje; ?>
       
            </form>
          </div>
          <div class="col-3"></div>
        </div>
     </div>
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>
