<?php
    session_start();
    if(!isset($_SESSION['autorizado'])){
      $_SESSION['autorizado']='no';

    }

?>

<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inicio</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="img/icono_prueba1.png">
    <?php //Archivos a incluir
        include("inc/menu.php"); 

        // Sección mensaje.
        $mensaje = '';
        if(isset($_GET['mensaje'])){
            if($_GET['mensaje']=='uno'){$mensaje = 'El usuario ya existe en la base';}
            if($_GET['mensaje']=='dos'){$mensaje = 'La direccion de correo no es valida';}
            if($_GET['mensaje']=='tres'){$mensaje = 'Los datos son incorrectos';}
        } 
    
    ?>

    
  </head>
  <body class="container" background="img/fondogris.jpg">
    <!--Barra de Navegacion-->
    <?php menu(); ?>
    
    <!--Titulo de la pagina-->
    <div class="alert alert-primary text-center fst-italic" role="alert">
        <h3>Inicio</h3>
    </div>
    <!--Fila 1-->
    <div class="container">
      <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <!--Formulario de ingreso-->
            <?php
            if($_SESSION['autorizado']=='no'){
            ?>
            <br>
            <!--Inicio Formulario-->
            <legend>Formulario de ingreso</legend>
            <form action="login.php" method="POST">
              <div class="form-group">
                <label for="user">Ingrese su usuario</label>
                <input type="text" id="user" name="user" class="form-control">
              </div>
              <br>
              <div class="form-group">
                <label for="pass">Ingrese su clave</label>
                <input type="password" id="pass" name="pass" class="form-control">
              </div>
              <br>
              <button class="btn btn-primary container-fluid ">Ingresar</button>
              <div class="row">
                  <div class="col text-center"><a href="registro.php">Registrarse</a></div>
                  <div class="col text-center"><a href="">Olvide mi clave</a></div>
              </div>
              <br><?php echo $mensaje;?>
            </form>

            <?php
            }else{  ?> <!--Reemplazado por carrusel
              echo '<h3>Bienvenido a nuestro sistema</h3>';
              echo '<h5>Nombre: '.$_SESSION['nombre'].'</h5>';
              echo '<h5>Apellido: '.$_SESSION['apellido'].'</h5>';
              echo '<h5>Rol: '.$_SESSION['rol'].'</h5>';
              -->
              <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
                  <div class="carousel-inner">
                      <div class="carousel-item active">
                          <img src="img/CordilleraDelosAndes.jpg" class="d-block w-100" alt="Primera Imagen">
                      </div>
                      <div class="carousel-item">
                          <img src="img/NorteArgentino.jpg" class="d-block w-100" alt="Segunda Imagen">
                      </div>
                      <div class="carousel-item">
                          <img src="img/Norte2Argentino.jpg" class="d-block w-100" alt="Tercera Imagen">
                      </div>
                      <div class="carousel-item">
                          <img src="img/SurArgentino.jpg" class="d-block w-100" alt="Cuarta Imagen">
                      </div>
                  </div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                     <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                     <span class="visually-hidden">Anterior</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                     <span class="carousel-control-next-icon" aria-hidden="true"></span>
                     <span class="visually-hidden">Siguiente</span>
                  </button>
              </div>
              <br>
              <h5>Apellido: <?php echo $_SESSION['apellido']; ?></h5>
              <h5>Rol: <?php echo $_SESSION['rol']; ?></h5>


            <?php
            } 
            ?>
        </div>
        <div class="col-3"></div>
      </div>
    </div>
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>