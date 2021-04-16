<?php
/** esta fucion permite ingresar ambientes a la base de datos 
 * param       texto            fecha                        fecha en que se registro el usuario
 * param       texto            correo                       direcion del correo 
 * param       texto            nombre_usuario               nombre del dueño de la cuenta
 * param       texto            clave                        la clave de la cuenta
 */
ingresar_usuario ( $_GET['fecha'], $_GET['correo'], $_GET['nombre_usuario'], $_GET['clave'] );

function ingresar_usuario ($fecha,  $correo, $nombre_usuario, $clave )
{
    include ('conexion.php');
    $sql= " insert into usuario values ('$fecha','$clave', '$correo','$nombre_usuario')";
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
