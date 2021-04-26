<?php
    include("cone.php");
    $id= $_GET["id"];
    echo $id;
    $conexion->query("DELETE FROM foto_portada WHERE id_foto = $id");
    header("location:../views/cabecera.php");
?>