<?php

    include("class/ambientes.php");
    $cede = $_POST[ 'cede' ];
    $nom_aula = $_POST[ 'ambiente' ];
    $nulo= " ";
    
    if ($cede == $nulo or $nom_aula == $nulo)
    {
      
        ambientes::ingresar_ambientes(  $cede, $nom_aula );
       

    }
    else{
       echo "hola";
       //header( "location: c-menu_ambientes.php" );
    }