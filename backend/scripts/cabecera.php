<?php
    include('cone.php');
    
    if ($_POST['fotos'] != null)
    {
        $directorio = '../img/';
        $subir= $directorio.basename($_FILES['foto']['name']);
        move_uploaded_file($_FILES['foto']['tmp_name'], $subir);
        $foto = $_FILES["foto"]["name"];
        $conexion->query("INSERT INTO foto_portada (nombre_foto) VALUES ('$foto')");
    }
   echo $texto;
   if($_POST["frases"] != null){
        $frases = $_POST["frases"];
        $conexion->query("INSERT INTO textos_abajo (texto) VALUES ('$frases')");
   }
    
   if($_POST["texto_arriba"]!= null)
   {
    $texto = $_POST["texto_arriba"];
    $conexion->query("INSERT INTO texto_arriba (texto) VALUES ('$texto')");
   }
    
    header("location:../views/cabecera.php");
?>
