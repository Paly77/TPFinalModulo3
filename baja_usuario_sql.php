<?php
     //Conexion al servidor de BD
     require('inc/conexion.php');
     
     //Busco los datos en el POST
     $usuario=$_POST['usuario'];
     $clave=$_POST['clave'];
     $rol=$_POST['rol'];
     $boton=$_POST['boton'];
     //Estrucutra de Decision
     if($boton==0){
        //El usuario quiere cancelar
        header("Location:abm.php");
     }else{
        //Hacemos labajadel usuario
        $baja="delete from usuario where usuario ='$usuario'";
        $resultado_baja=mysqli_query($conexion,$baja);
        header("Location:abm.php");
     }
?>