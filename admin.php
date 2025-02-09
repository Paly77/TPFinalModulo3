<?php
// Incluir el archivo de conexión a la base de datos
require("inc/conexion.php");

// Consulta para obtener los usuarios con estado "Nuevo"
$consultaEstado = "SELECT nombre, apellido, fc_alta, estado, rol FROM users WHERE estado = 'Nuevo'";
$resultado = mysqli_query($conexion, $consultaEstado);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administración</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body background="img/fondogris.jpg">
    <?php 
    // Incluir el menú de navegación
    require("inc/menu.php");
    menu(); 
    ?>

    <div class="container mt-5">
        <h2 class="alert alert-primary text-center fst-italic">Usuarios Nuevos</h2>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Fecha de Alta</th>
                    <th>Estado</th>
                    <th>Rol</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                // Verificar si hay resultados
                if (mysqli_num_rows($resultado) > 0) {
                    while ($fila = mysqli_fetch_assoc($resultado)) {
                        echo "<tr>";
                        echo "<td>" . htmlspecialchars($fila['nombre'], ENT_QUOTES, 'UTF-8') . "</td>";
                        echo "<td>" . htmlspecialchars($fila['apellido'], ENT_QUOTES, 'UTF-8') . "</td>";
                        echo "<td>" . htmlspecialchars($fila['fc_alta'], ENT_QUOTES, 'UTF-8') . "</td>";
                        echo "<td>" . htmlspecialchars($fila['estado'], ENT_QUOTES, 'UTF-8') . "</td>";
                        echo "<td>" . htmlspecialchars($fila['rol'], ENT_QUOTES, 'UTF-8') . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='5' class='text-center'>No hay usuarios nuevos.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
