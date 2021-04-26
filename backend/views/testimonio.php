<?php
    include("../scripts/cone.php");
    include("top.php");
                    $testimonios_db = $conexion->query("SELECT * FROM testimonios order by id_testimonio desc ");
                    
                    

?>
<div>
    <div class="row servicios">
        <div class="col-md-6  titulo">
            <div><br>
            <center>
                <h4>Testimonios actuales</h4>
            </center>
                 <br>
                 <?php  
                    while($testimonios = $testimonios_db->fetch_assoc()){
                    ?>
                        <div class="row servicios">
                            <div class="col-md-4" style="margin-left: 50px;">
                                <img src="../img/<?php echo $testimonios["imagen"];?>" width="200" alt="">
                            </div>
                            <div class="col-md-6">
                                <h6><?php echo $testimonios["cliente"];?></h6>
                                <p><?php echo $testimonios["testimonio"];?></p>
                                <button class="btn btn-danger"  data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $servicios["id_servicios"];?>">Eliminar</button>
                            </div>
                        </div> <br><br>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal<?php echo $servicios["id_servicios"];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Eliminar servicio</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Seguro que desea eliminar este servicio?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <a href="../scripts/eliminar_servicios.php?id=<?php echo $servicios["id_servicios"];?>"><button type="button" class="btn btn-danger">Eliminar</button></a>
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
                <h4>Nuevos testimonios</h4>
            </center>
              <br>
            <form action="../scripts/testimonio.php" method="post" enctype="multipart/form-data">
                <div>
                    <input class="form-control" id="foto" name="foto" type="file"><br>
                    <input type="hidden" name="fotos" id="copia">
                </div>
                <div>
                    <input class="form-control" type="text" name="titulo" id="" placeholder="Nombre del cliente"><br>
                </div>
                <div>
                    <textarea class="form-control" placeholder="Escribe aqui el testimonio" name="descripcion" id="" cols="30" rows="10"></textarea>
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