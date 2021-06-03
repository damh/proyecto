<html>
<head>
<title>
</title>
<style>

body{
background-color: #EAEDED;
}
 
table{
border:10px solid #F4D03F;
padding:1000px;
margin:0 auto;
background: #F4D03F ;
font-family:Arial, Helvetica, sans-serif;
width: 180%;
height: 300px;
}
th{
    border: 2px solid #808080 ;
    background: #ADD8E6 ;
    
}

/* .boton{
vertical-align: middle;
}*/


</style>

</head>
<body>
	<h1>
<div id = centrar>
         <h1>TypKey</h1>
         <hr>
      </div>


<form action="r_prestamo.php" method= "POST">
<table >
<td></td><td></td><td></td><td></td><td></td>
<td><h1><input type="button" onclick="history.back()" class="btn btn-primary btn-block" name="volver atrás" value="volver"><h1></td>
<tr>

<th ><label for="imp"><h1>Inicio prestamo:</label></th>
<th ><label for="imp"><h1>Fin prestamo:</label></th>
<th><label for="imp"><h1>Horario:</label></th>

<th><label for="imp"><h1>Ambiente</label></th>
<th><label for="imp"><h1>instructor:</label></th>
<th><label for="imp"><h1>observaciones:</label></th>

<tr>  
<th> <input type="datetime-local" name= inicio_prestamo></th>
<th><input type="datetime-local" name= fin_prestamo></td>

<th><br><input type="time" name= "h_ingreso" id="start" value="12:00:00">
<input type="time" name= "h_ingreso" id="start" value="12:00:00"></th>
<th>
<select name="ambiente">
        <?php
            //se realiza la conexion con la base de datos
            $conexion= mysqli_connect("localhost", "root", "", "proyecto");
            $sql = "select no, cede, nom_aula from ambientes";
            //echo $sql;
            $resultado = $conexion->query($sql);
            //se crea l alista de los ambientes
            while($fila = mysqli_fetch_array($resultado) )
            {
                $ambiente = $fila[ 'no'];
                $ambiente .= "  ";
                $ambiente .= $fila[ 'cede'];
                $ambiente .= "  ";
                $ambiente .= $fila[ 'nom_aula'];
                echo "<option values =' $ambiente'>  $ambiente </option>";
            }
            
        ?>
    </select> <!-- se finaliza la lista-->
</th>

<th>
<select name="instructor">
        <?php
            //se realiza la conexion con la base de datos
            include('class/conexion.php');
            $conexion = conex::conectar();
            $sql = "select no_documento, nom_instructor from instructores";
            //echo $sql;
            $resultado = $conexion->query($sql);
            //se crea l alista de los ambientes
            while($fila = mysqli_fetch_array($resultado) )
            {
                $instructor = $fila[ 'no_documento'];
                $instructor .= "  ";
                $instructor .= $fila[ 'nom_instructor'];
                echo "<option values =' $instructor'>  $instructor </option>";
            }
            
        ?>
    </select> <!-- se finaliza la lista-->
</th>
    <th><textarea name="comentario">Estado  en  el  que  se  encuentra  el  Aula </textarea></p></th>
    
</tr>
<tr>&nbsp;</tr>
<tr>&nbsp;</tr>
<tr>
     
                             
         
<h1>
<td  ><input type="submit" class="btn btn-primary btn-block" name="Enviar" value="Enviar"></td>

</tr>

</table>
</form>
Disponibilidad:<input type="datetime-local">
<input type="submit" class="btn btn-primary btn-block" name="buscar" value="buscar">

</body>
</html>