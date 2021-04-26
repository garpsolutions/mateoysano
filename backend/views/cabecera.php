<?php include('top.php') ?>
<div>
    <?php
        include('../scripts/cone.php');
         $foto_db = $conexion->query("SELECT nombre_foto FROM foto_portada order by id_foto desc  limit 1 ");
         $foto = $foto_db->fetch_assoc() ;
         $texto_db = $conexion->query("SELECT texto FROM texto_arriba order by id_texto desc  limit 1 ");
         $texto = $texto_db->fetch_assoc();
         $frases_db = $conexion->query("SELECT texto, id_texto FROM textos_abajo order by id_texto desc ");
    ?>
    <div class="row">
         <!-- Area de  muestra-->
        <div class="col-md-6">
            <br>
            <center>
                <h4 class="titulo">
                    Información actual en la cabecera
                </h4> 
                <div id="imagen_actual">
                    <img src="../img/<?php echo $foto['nombre_foto']; ?>" width="200" height="200" alt="">
                </div>
            </center>
        
        </div>
        <!-- Area de cargar -->
        <div id="area-subida" class="col-md-6">
            <center>
                <h4 class="titulo">
                    Nueva información
                </h4>
            </center><br>
            <div class="row">
                <form action="../scripts/cabecera.php" method="POST"  enctype="multipart/form-data">
                    <div class="col-md-12">
                        <input class="form-control" id="foto" name="foto" type="file"/>
                        <input id="copia" name="fotos" type="hidden"/>
                    </div>
                    <div class="col-md-12 sp">
                        <input class="btn btn-primary form-control" type="submit" value="Guardar">
                    </div>
                </form>
            </div>
        </div>
    </center>
    </div>
    </div>

    <script>
            $("#foto").change(function(){
                $('#copia').val($('#foto').val());
            });
    </script>
