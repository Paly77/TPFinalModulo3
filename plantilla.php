<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Plantilla Base</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="img/icono_prueba1.png">
    <?php require("inc/menu.php"); 
          require("inc/conexion.php");  
    ?>

    
  </head>
  <body class="container">
    <!--Barra de Navegacion-->
    <?php menu(); ?>
    
    <!--Titulo de la pagina-->
    <div class="alert alert-primary text-center fst-italic" role="alert">
        <h3>Titulo de la pagina</h3>
    </div>
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>


