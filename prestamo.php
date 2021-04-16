<?php
/** esta fucion permite ingresar ambientes a la base de datos 
 * param       texto            fecha                  fecha en que se presto el ambiente 
 * param       texto            hora_ingreso           hora en el que se comienza a utilizar el aula
 * param       texto            hora_salida            hora a la que se termina el timpo de utilizacion del aula
 */
ingresar_prestamo ($_GET['fecha'],$_GET['hora_ingreso'], $_GET['hora_salida']);
function ingresar_prestamo ($fecha, $hora_ingreso, $hora_salida);
{
    include ('conexion.php');
    $sql= " insert into prestamo_ambientes values ('$fecha', '$hora_ingreso','$hora_salida')";
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

