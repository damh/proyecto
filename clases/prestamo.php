<?php
include ('../conexion.php');

class prestamos extends Conex
{
    static function ingresar_prestamo($fecha, $hora_ingreso, $hora_salida, $observaciones)
    {
        $conexion = Conex::conectar();
        $sql= " insert into prestamo_ambientes (fecha_prestamo, fecha_devolucion, no, ,hora_ingreso, hora_salida) values ('$fecha_prestamo', current_date,date_add(current_date, interval '$fecha_devolucion' day), '$hora_ingreso','$hora_salida', '$observaciones')";
        $resultado = $conexion->query($sql);
        echo $sql;
        if ($conexion ->affected_rows > 0)
        {
            echo "tus datos se guardaron";
        }
        else
        {
            echo "tus datos no se guardaron";
        }
    }
}