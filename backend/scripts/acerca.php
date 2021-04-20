<?php
    include('cone.php');
    $texto = $_POST["texto"];
        if($_POST["fotos"] != null)
        {
            $directorio = '../img/';
            $subir= $directorio.basename($_FILES['foto']['name']);
            move_uploaded_file($_FILES['foto']['tmp_name'], $subir);
            $foto = $_FILES["foto"]["name"];
            $conexion->query("INSERT INTO acerca_img (nombre) VALUES ('$foto')");
        }
        if($_POST["texto"]!= null)
        {
            $conexion->query("INSERT INTO acerca (texto_acerca) VALUES ('$texto')");
        }
        


    
    
    header("location:../views/acerca.php");
?>