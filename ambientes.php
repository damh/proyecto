<?php
/** esta fucion permite ingresar ambientes a la base de datos 
 * param       texto            cede            nombre de la cede donde esta ubicada el aula.
 * param       texto            nom_aula        nombre del aula que se quiera agregar
 */
ingresar_ambientes ($_GET['cede'],$_GET['nom_aula']);
function ingresar_ambientes($cede,$nom_aula)
{
    include ('conexion.php');

    $sql= " insert into ambientes values ('$cede', '$nom_aula')";
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
