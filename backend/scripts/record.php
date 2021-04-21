<?php 
    include("../scripts/cone.php");
    $completados= $_POST["completados"];
    $anos = $_POST["anos"];
    $clientes = $_POST["clientes"];
    $record_db = $conexion->query("UPDATE record set completados = $completados, anos = $anos, clientes = $clientes where id_record = 1 ");

    header("location:../views/record.php?id=1");
?>