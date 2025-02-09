<?php 
    $mensaje = 'Ingrese los nuevos datos';
    if (isset($_GET['mensaje'])) {
        switch ($_GET['mensaje']) {
            case 'usuario_existente':
                $mensaje = 'El usuario ya existe en la base de datos.';
                break;
            case 'clave_invalida':
                $mensaje = 'La clave debe tener al menos 8 caracteres, una mayúscula, una minúscula y un número.';
                break;
            case 'correo_invalida':
                $mensaje = 'El correo ingresado no es válido.';
                break;
            case 'falta_datos':
                $mensaje = 'Por favor complete todos los campos.';
                break;
        }
    }
?>


<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registro</title>
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
        <h3>Registro de nuevo usuario</h3>
    </div>
    <!-- Mensaje de alerta -->
    <div class="alert alert-warning text-center">
        <?php echo $mensaje; ?>
    </div>
    <br>
     <!--Formulario-->
     <div class="container">
        <div class=row>
          <div class="col-3"></div>
          <div class="col-6">
            <form action="registro_sql.php" method="post">
                  <!--Input usuario-->
                 <div class="form-group">
                      <label for="usuario" style="color:green" class="fw-bold">Ingrese usuario</label>
                      <input required type="text" id="usuario" name="usuario" placeholder="Escriba un nuevo ususario" class="form-control">
                 </div>
                 <br>
                  <!--Input clave-->
                  <div class="form-group">
                      <label for="clave" style="color:green" class="fw-bold">Ingrese clave</label>
                      <input required type="password" id="clave" name="clave" placeholder="Escriba nueva clave" class="form-control">
                  </div>
                 <br>
                 <!--Input nombre-->
                 <div class="form-group">
                      <label for="nombre" style="color:green" class="fw-bold">Ingrese nombre</label>
                      <input required type="text" id="nombre" name="nombre" placeholder="Escriba su nombre" class="form-control">
                  </div>
                 <br>
                 <!--Input apellido-->
                 <div class="form-group">
                      <label for="apellido" style="color:green" class="fw-bold">Ingrese su Apellido</label>
                      <input required type="text" id="apellido" name="apellido" placeholder="Escriba su apellido" class="form-control">
                  </div>
                 <br>
                 <!--Input email-->
                 <div class="form-group">
                      <label for="correo" style="color:green" class="fw-bold">Ingrese su correo</label>
                      <input required type="email" id="correo" name="correo" placeholder="Escriba nueva email" class="form-control">
                  </div>
                 <br>
                
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
