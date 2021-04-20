<?php
    include('cone.php');
    $id_frase = $_GET['id'];
    echo $id_frase;
    $conexion->query("DELETE FROM textos_abajo WHERE id_texto = $id_frase");
    header("location:../views/cabecera.php");
?>
