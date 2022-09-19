<?php
    include "controlador/conexion.php";
    include "controlador/operacion.php";

    $ob   = new metodos();
    $sql  = "SELECT id, nombre FROM paciente";
    $Data = $ob->VerDatos($sql);
    foreach ($Data as $key) {

        $id = $key['id'];
        echo $key['nombre'];
    }
?>