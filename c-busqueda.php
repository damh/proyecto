<h1>BUSCADOR</h1>

<form action="c-busqueda.php" method="POST">

<input type = "text" name="buscar">
<input type = "submit" value="Buscar"> 

</form>


<table border="2px">
      <thead>
            <th>No</th>
            <th>Id</th>
            <th>Fecha Registro</th>
            <th>Cede</th>
            <th>Hora Ingreso</th>
            <th>Hora Salida</th>
            <th>Observaciones</th>
            <th>Fecha prestamo</th>
            <th>Fecha devolucion</th>
</thead>
<tbody>


   
<?php

include "v-busqueda.php";

while($row= mysqli_fetch_array($sql_query)){?>

<tr>
                <td><?=$row['no'] ?></td>
                <td><?=$row['id']?></td>
                <td><?=$row['fecha_registro']?></td>
                <td><?=$row['cede']?></td>
                <td><?=$row['hora_ingreso']?></td>
                <td><?=$row['hora_salida']?></td>
                <td><?=$row['observaciones']?></td>
                <td><?=$row['fecha_prestamo']?></td>
                <td><?=$row['fecha_devolucion']?></td>
            </tr>


<?php }

?>

</tbody>