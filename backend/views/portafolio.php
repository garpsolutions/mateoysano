<?php
    include("../scripts/cone.php");
    include("top.php");
                    $servicios_db = $conexion->query("SELECT * FROM servicios order by id_servicios desc ");
                    $trabajos_db = $conexion->query("SELECT * FROM trabajos order by id_trabajo desc ");
                    

?>
<div>
    <div class="row servicios">
        <div class="col-md-6  titulo">
            <div><br>
            <center>
                <h4>Trabajos realizados</h4>
            </center>
                 <br>
                 <?php  
                    while($trabajos = $trabajos_db->fetch_assoc()){
                    ?>
                        <div class="row servicios">
                            <div class="col-md-4" style="margin-left: 50px;">
                                <img src="../img/<?php echo $trabajos["imagen"];?>" width="200" alt="">
                            </div>
                            <div class="col-md-6">
                                <p><strong>Nombre de empresa:</strong>  <?php echo $trabajos["empresa"];?></p>
                                <p><strong> Servicio: </strong><?php echo $trabajos["servicio"];?></p>
                                <button class="btn btn-danger"  data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $trabajos["id_trabajo"];?>">Eliminar</button>
                            </div>
                        </div> <br><br>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal<?php echo $trabajos["id_trabajo"];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Eliminar Trabajo</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Seguro que desea eliminar este trabajo?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <a href="../scripts/eliminar_trabajos.php?id=<?php echo $trabajos["id_trabajo"];?>"><button type="button" class="btn btn-danger">Eliminar</button></a>
                            </div>
                            </div>
                        </div>
                        </div>
                    <?php  
                    }
                 ?>
                
            </div>
        </div>
        <div class="col-md-6 titulo"><br>
            <center>
                <h4>Nuevos trabajos</h4>
            </center>
              <br>
            <form action="../scripts/portafolio.php" method="post" enctype="multipart/form-data">
                <div>
                    <input class="form-control" id="foto" name="foto" type="file"><br>
                    <input type="hidden" name="fotos" id="copia">
                </div>
                <div>
                    <input class="form-control" type="text" name="titulo" id="" placeholder="Nombre de la empresa"><br>
                </div>
                <div>
                    <select class="form-control" name="servicio" id="">
                    <?php 
                        while($servicios = $servicios_db->fetch_assoc()){
                            ?>
                                <option value="<?php echo $servicios["titulo"];?>"><?php echo $servicios["titulo"];?></option>
                            <?php
                        }
                    ?> 
                    </select><br>
                </div>
                <button class="btn btn-primary form-control">Guardar</button>
            </form>
        </div>
    </div>
</div>
<script>
      $("#foto").change(function(){
                $('#copia').val($('#foto').val());
            });
</script>