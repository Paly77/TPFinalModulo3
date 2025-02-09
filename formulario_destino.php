<?php
    //Busco los datos
    $nombre=$_POST["nombre"];
    $apellido=$_POST["apellido"];
    $clave=$_POST["clave"];

    if(isset($_POST['leng1'])){
        $lenguaje1=$_POST['leng1'];
    }else $lenguaje1='';

    if(isset($_POST['leng2'])){
        $lenguaje2=$_POST['leng2'];
    }else $lenguaje2='';

    if(isset($_POST['leng3'])){
        $lenguaje3=$_POST['leng3'];
    }else $lenguaje3='';

    //Muestro por pantalla
    echo"Nombre recibido: ".$nombre.'<br>';
    echo"Apellido recibido: ".$apellido.'<br>';
    echo"Clave recibido: ".$clave.'<br>';
    echo"Lenguajes preferidos:  ".$lenguaje1.''.$lenguaje2.''.$lenguaje3.'<br>';

?>