
<?php
   session_start();
   if(!isset($_SESSION['autorizado']) or $_SESSION['autorizado']=='no'){
      header('Location:index.php');
   }
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulario</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="img/icono_prueba1.png">
    <?php include("inc/menu.php");   ?>

    
  </head>
  <body class="container" background="img/fondogris.jpg">
    <!--Barra de Navegacion-->
    <?php menu(); ?>
    
    <!--Titulo de la pagina-->
    <div class="alert alert-primary text-center fst-italic" role="alert">
        <h3>Envio de datos al servidor</h3>
    </div>
    <!--Grilla-->
    <div class="row">
        <div class="col-4"></div>
        <div class="col-4">
            <!--Formulario-->
            <form action="formulario_destino.php" method="POST">
                <!--Input Nombre-->
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" required class="form-control" id="nombre" name="nombre" placeholder="Ingrese su nombre" >

                </div>
                <!--Input Apellido-->
                <div class="mb-3">
                    <label for="apellido" class="form-label">Apellido</label>
                    <input type="text" required class="form-control" id="apellido" name="apellido" placeholder="Ingrese su apellido" >
                </div>
                <!--Input Clave-->
                <div class="mb-3">
                    <label for="clave" class="form-label">Clave</label>
                    <input type="password" required class="form-control" id="clave" name="clave" placeholder="Ingrese su clave" >
                </div>
                <!--Chetbox-->
                <hr size="2px" color="black">
                <h6 class="fst-italic">Seleccione sus materias favoritas.</h6>

                <div class="form-group">
                    <input type="checkbox" id="materia1" name="materia1" value="php">
                    <label for="materia1">Páginas Web</label>
                </div>
                <div class="form-group">
                    <input type="checkbox" id="materia2" name="materia2" value="java">
                    <label for="materia2">Programación en JAVA</label>
                </div>
                <div class="form-group">
                    <input type="checkbox" id="materia3" name="materia3" value="sql">
                    <label for="materia3">Bases de datos</label>
                </div>

                <hr size="3px" color="black">
                <fieldset>
                    <legend>Seleccione su nivel de inglés.</legend>
                    <div class="form-group">
                        <label>
                            <input type="radio" name="nivel" value="alto">Alto
                        </label>
                    </div>
                    <div class="form-group">
                        <label>
                            <input type="radio" name="nivel" value="medio">Medio
                        </label>
                    </div>
                    <div class="form-group">
                        <label>
                            <input type="radio" name="nivel" value="bajo">Bajo
                        </label>
                    </div>                                        
                </fieldset>

                <hr size="3px" color="black">
                <div class="form-group">
                    <label for="selector1">Seleccione su motivo de contacto.</label>
                    <select name="selector1" id="selector1">
                        <option value="consulta">Consulta</option>
                        <option value="sugerencia">Sugerencia</option>
                        <option value="queja">Queja</option>
                    </select>
                </div>
                <br>
                <!--Boton de enviar-->
                <button type="submit" class="btn btn-primary container-fluid">Enviar</button>

            </form>
        </div>
        <div class="col-4"></div>

    </div>
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>
