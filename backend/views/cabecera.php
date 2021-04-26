<?php include('top.php') ?>
<div>
    <?php
        include('../scripts/cone.php');
         $foto_db = $conexion->query("SELECT nombre_foto, id_foto FROM foto_portada order by id_foto desc  limit 3 ");
          
         
    ?>
    <div class="row">
         <!-- Area de  muestra-->
        <div class="col-md-6">
            <br>
            <center>
                <h4 class="titulo">
                    Información actual en la cabecera
                </h4> 
                <?php
                    while($foto = $foto_db->fetch_assoc()){
                ?>
                <div id="imagen_actual">
                    <img src="../img/<?php echo $foto['nombre_foto']; ?>" width="200" height="200" alt="">
                    <a href="../scripts/eliminar_foto.php?id=<?php echo $foto['id_foto']; ?> "><button class="btn btn-danger">Eliminar</button></a> 
                </div>
                <?php
                    }
                ?>
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
