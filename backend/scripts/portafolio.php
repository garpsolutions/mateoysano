<?php
    include('cone.php');
        if($_POST["fotos"] != null and $_POST["titulo"]!= null and $_POST["servicio"]!= null)
        {
            $directorio = '../img/';
            $subir= $directorio.basename($_FILES['foto']['name']);
            move_uploaded_file($_FILES['foto']['tmp_name'], $subir);
            $foto = $_FILES['foto']['name'];
            $titulo = $_POST["titulo"];
            $descripcion = $_POST["servicio"];
            echo $foto;
            $conexion->query("INSERT INTO trabajos (imagen, empresa, servicio) VALUES ('$foto', '$titulo','$descripcion')");
        }
      
    
    header("location:../views/portafolio.php");
?>