<?php

ingresar_prestamo ($_GET['fecha'],$_GET['hora_ingreso'], $_GET['hora_salida']);
function ingresar_prestamo ($fecha, $hora_ingreso, $hora_salida);
{
    include ('conexion.php');
    $sql= " insert into prestamo_ambientensdch values ('$fecha', '$hora_ingreso','$hora_salida')";
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

