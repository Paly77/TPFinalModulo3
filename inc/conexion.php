<?php
   //Conexion a la Base de Datos
        //Paso1 1)Datos de conexion
        $usuario = 'root';
        $clave = '';
        $servidor = 'localhost';
        $basededatos = 'tpfundacion';

        //Paso2 2)Creamos la conexion
        $conexion = mysqli_connect($servidor,$usuario,$clave);

        //Paso3 3)Me conecto a la Base de datos p1p2p3 exclusivo a la conexion db
        $db = mysqli_select_db($conexion,$basededatos);


?>