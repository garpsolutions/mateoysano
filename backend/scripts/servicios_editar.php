<?php
    include('cone.php');
    $id=$_POST["id"];
    $titulo = $_POST["titulo"];
    $descripcion = $_POST["descripcion"];
    if($_POST["fotos"] != null)
    {
        $directorio = '../img/';
        $subir= $directorio.basename($_FILES['foto']['name']);
        move_uploaded_file($_FILES['foto']['tmp_name'], $subir);
        $foto = $_FILES["foto"]["name"];
        $conexion->query("UPDATE servicios set imagen = '$foto' WHERE id_servicios = $id");
    }
    echo $id;
        $conexion->query("UPDATE servicios set titulo = '$titulo', descripcion = '$descripcion' WHERE id_servicios = $id");
    
    header("location:../views/servicios.php");

?>