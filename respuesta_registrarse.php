<?php

    include("class/usuario.php");
    $correo = $_POST[ 'correo' ];
    $usuario = $_POST[ 'usuario' ];
    $clave = $_POST[ 'contraseña' ];
    $clave2= $_POST[ 'c_contraseña' ];
    echo "sad";
    if ($clave == $clave2)
    {
       echo("Las dos claves son iguales...");
    }
    else{
       echo("Las dos claves son distintas...");
    }
    