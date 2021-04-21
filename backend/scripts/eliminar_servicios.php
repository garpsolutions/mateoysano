<?php
    include("cone.php");
    $id= $_GET["id"];
    echo $id;
    $conexion->query("DELETE FROM servicios WHERE id_servicios = $id");
    header("location:../views/servicios.php");
?>