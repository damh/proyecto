<?php
/** esta fucion permite ingresar ambientes a la base de datos 
 * param       texto            ficha               numero de la ficha del programa
 * param       texto            nom_programa        nombre del programa que se quiere agregar
 */
ingresar_programa ($_GET['ficha'],$_GET['nom_programa'])

function ingresar_programa ($ficha, $nom_programa)
{
    include ('conexion.php');
    $sql= " insert into programas values ('$ficha', '$nom_programa')";
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
