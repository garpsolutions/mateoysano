<?php 
    include("cone.php");
    $completados= $_POST["completados"];
    $anos = $_POST["anos"];
    $clientes = $_POST["clientes"];
    echo $completados. " ". $anos." ". $clientes;

    $conexion->query("UPDATE record SET completados = $completados, anos = $anos, clientes = $clientes WHERE id_record = 1 ");

    header("location:../views/record.php?id=1");
?>