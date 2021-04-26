<?php
    include('cone.php');
        if($_POST["fotos"] != null and $_POST["titulo"]!= null and $_POST["descripcion"]!= null)
        {
            $directorio = '../img/';
            $subir= $directorio.basename($_FILES['foto']['name']);
            move_uploaded_file($_FILES['foto']['tmp_name'], $subir);
            $foto = $_FILES['foto']['name'];
            $titulo = $_POST["titulo"];
            $descripcion = $_POST["descripcion"];
            echo $foto;
            $conexion->query("INSERT INTO testimonios (imagen, cliente, testimonio) VALUES ('$foto', '$titulo','$descripcion')");
        }
      
    
    header("location:../views/testimonio.php");
?>