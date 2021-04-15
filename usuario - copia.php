<?php
 
ingresar_usuario ( $_GET['fecha'], $_GET['correo'], $_GET['nombre_usuario'], $_GET['clave'] );

function ingresar_usuario ($fecha,  $correo, $nombre_usuario, $clave )
{
    include ('conexion.php');
    $sql= " insert into  values ('$fecha','$clave', '$correo','$nombre_usuario')";
    $resultado = $conexion->query($sql);
    
    if ($conexion ->affected_rows > 0)
    {
        echo"tus datos se guardaron";
    }
    else
    {
        echo "tus datos no se guardaron";
    }
}
