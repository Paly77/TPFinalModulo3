<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Baja Usuario</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="img/icono_prueba1.png">
    <?php //Archivos a incluir
          require("inc/conexion.php");  

          //Tomo los valores de la url
          $usuario = $_GET['usuario'];
          $clave = $_GET['clave'];
          $rol = $_GET['rol'];
    ?>

    
  </head>
  <body class="container">
    <!--Barra de Navegacion-->
    
    
    <!--Titulo de la pagina-->
    <div class="alert alert-primary text-center fst-italic" role="alert">
        <h3>Baja de Usuario</h3>
    </div>
    <!--Formulario-->
    <div class="container">
        <div class=row>
          <div class="col-3"></div>
          <div class="col-6">
            <form action="baja_usuario_sql.php" method="post">
                  <!--Input usuario-->
                 <div class="form-group">
                      <label for="usuario" style="color:green" class="fw-bold">Usuario</label>
                      <input readonly value=<?php echo $usuario; ?>  type="text" id="usuario" name="usuario"  class="form-control">
                 </div>
                 <br>
                  <!--Input clave-->
                  <div class="form-group">
                      <label for="clave" style="color:green" class="fw-bold">Clave</label>
                      <input readonly value=<?php echo $clave; ?> type="password" id="clave" name="clave"  class="form-control">
                  </div>
                 <br>
                  <!--Input rol-->
                  <div class="form-group">
                      <label for="rol" style="color:green" class="fw-bold">Rol</label>
                      <input readonly value=<?php echo $rol; ?> type="text" id="rol" name="rol"  class="form-control">
                  </div>
                  <br>
                  <!--Boton-->
                  <div class="row">
                      <div class="col-6">
                           <button name="boton" value=1 type="submit" class="btn btn-primary container-fluid">Eliminar registro</button>
                      </div>
                      <div class="col-6">
                           <button name="boton" value=0 type="submit" class="btn btn-danger container-fluid">Cancelar</button>
                      </div>
                  </div>
       
            </form>
          </div>
          <div class="col-3"></div>
        </div>
     </div>
     <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>