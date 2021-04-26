<?php
    include("cone.php");
    $id= $_GET["id"];
    echo $id;
    $conexion->query("DELETE FROM trabajos WHERE id_trabajo = $id");
    header("location:../views/portafolio.php");
?>