<?php
/** esta fucion permite ingresar ambientes a la base de datos 
 * param       numero           No_documento            es el numero de identificacion del instructor 
 * param       texto            nom_instructor          nombre del instructor que se quiera agregar
 */
ingresar_instructores ($_GET['No_documento'],$_GET['nom_instructor']);
function ingresar_instructores($cede,$nom_aula)
{
    include ('conexion.php');
    $sql= " insert into instructores values ('$No_documento', '$nom_instructor')";
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
