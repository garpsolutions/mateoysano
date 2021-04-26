<?php
    include('cone.php');
    $texto = $_POST["texto"];
    $direccion = $_POST["direccion"];
    $telefono = $_POST["telefono"];
    $correp = $_POST["correo"];

    $conexion->query("INSERT INTO contacto (texto,direccion, telefono, correo) VALUES ('$texto','$direccion','$telefono','$correp')");
    
    header("location:../views/contacto.php");