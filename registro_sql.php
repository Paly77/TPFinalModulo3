<?php 
    // Agrego conexión a BDD
    require("inc/conexion.php");

    // Verificar si el formulario fue enviado correctamente
    if ($_SERVER['REQUEST_METHOD'] === 'POST') { //Punto 2
        // Tomo los datos del formulario y los sanitizo
        $usuario = htmlspecialchars(trim($_POST['usuario']), ENT_QUOTES, 'UTF-8');
        $clave = htmlspecialchars(trim($_POST['clave']), ENT_QUOTES, 'UTF-8');
        $nombre = htmlspecialchars(trim($_POST['nombre']), ENT_QUOTES, 'UTF-8');
        $apellido = htmlspecialchars(trim($_POST['apellido']), ENT_QUOTES, 'UTF-8');
        $correo = htmlspecialchars(trim($_POST['correo']), ENT_QUOTES, 'UTF-8');

        // Validar que ningún campo esté vacío
        if (empty($usuario) || empty($clave) || empty($nombre) || empty($apellido) || empty($correo)) {
            header("Location: registro.php?mensaje=faltan_datos");
            exit();
        }

        // Validar formato del correo
        if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
            header("Location: registro.php?mensaje=correo_invalida");
            exit();
        }
        
        //Punto 3
        // Validar si la clave cumple con los criterios
        $clave_regex = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$/'; // Expresión regular
        if (!preg_match($clave_regex, $clave)) {
            header("Location: registro.php?mensaje=clave_invalida");
            exit();
        }

        // Encriptamos la clave
        $clave2 = password_hash($clave, PASSWORD_DEFAULT);

        // Verificamos si existe el usuario utilizando una consulta preparada
        $consulta1 = "SELECT COUNT(*) AS existe FROM users WHERE usuario = ?";
        $stmt = $conexion->prepare($consulta1);
        $stmt->bind_param("s", $usuario);
        $stmt->execute();
        $stmt->bind_result($existe);
        $stmt->fetch();
        $stmt->close();

        // Estructura de decisión
        if ($existe > 0) {
            // Modifico el mensaje y volvemos al formulario
            header("Location: registro.php?mensaje=usuario_existente");
        } else {
            // El usuario no existe, permitimos la carga con una consulta preparada
            $alta = "INSERT INTO users (usuario, clave, nombre, apellido, correo, fc_alta, estado, rol) 
                     VALUES (?, ?, ?, ?, ?, NOW(), 'Nuevo', 'Analista')";
            $stmt_alta = $conexion->prepare($alta);
            $stmt_alta->bind_param("sssss", $usuario, $clave2, $nombre, $apellido, $correo);

            if ($stmt_alta->execute()) {
                // Registro exitoso
                header("Location: index.php?mensaje=registro_exitoso");
            } else {
                // Error en la inserción
                header("Location: registro.php?mensaje=error");
            }
            $stmt_alta->close();
        }
    } else {
        // Acceso directo al archivo
        header("Location: registro.php");
        exit();
    }
?>
