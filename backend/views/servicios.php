<?php
    include("../scripts/cone.php");
    include("top.php");
                    $servicios_db = $conexion->query("SELECT * FROM servicios order by id_servicios desc ");
                    if(isset($_GET["id"])){
                        $id = $_GET["id"];
                        $servicios2_db = $conexion->query("SELECT * FROM servicios where id_servicios = $id ");
                        $servicios2 = $servicios2_db->fetch_assoc();
                    }
                    
                    

?>
<div>
    <div class="row servicios">
        <div class="col-md-6  titulo">
            <div><br>
            <center>
                <h4>servicios actuales</h4>
            </center>
                 <br>
                 <?php  
                    while($servicios = $servicios_db->fetch_assoc()){
                    ?>
                        <div class="row servicios">
                            <div class="col-md-4" style="margin-left: 50px;">
                                <img src="../img/<?php echo $servicios["imagen"];?>" width="200" alt="">
                            </div>
                            
                            <div class="col-md-6">
                                <h6><?php echo $servicios["titulo"];?></h6>
                                <p><?php echo $servicios["descripcion"];?></p>
                                <a href="servicios.php?id=<?php echo $servicios["id_servicios"]?>"><button class="btn btn-warning" >Editar</button></a>
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
                <h4>Nuevos servicios</h4>
            </center>
              <br>

            
            <?php if(isset($_GET["id"])){?>
                <form action="../scripts/servicios_editar.php" method="post" id="editor"enctype="multipart/form-data">
                    <div>
                        <input class="form-control" id="foto" name="foto" type="file"><br>
                        <input type="hidden" name="fotos" id="copia">
                        <input type="hidden" name="id" value="<?php echo $_GET["id"] ?>">
                    </div>
                    <div>
                        <input class="form-control" type="text" value="<?php echo $servicios2["titulo"]  ?>" name="titulo" id="" placeholder="Editando"><br>
                    </div>
                    <div>
                        <textarea class="form-control" placeholder="Descripcion del servicio" name="descripcion" id="" cols="30" rows="10"><?php echo $servicios2["descripcion"];?></textarea>
                    </div>
                    <button class="btn btn-primary form-control">Guardar</button>
                </form>
            <?php 
                 }
                 else{
                    ?>
                        <form action="../scripts/servicios.php" method="post" enctype="multipart/form-data">
                <div>
                    <input class="form-control" id="foto" name="foto" type="file"><br>
                    <input type="hidden" name="fotos" id="copia">
                </div>
                <div>
                    <input class="form-control" type="text" name="titulo" id="" placeholder="Titulo"><br>
                </div>
                <div>
                    <textarea class="form-control" placeholder="Descripcion del servicio" name="descripcion" id="" cols="30" rows="10"></textarea>
                </div>
                <button class="btn btn-primary form-control">Guardar</button>
            </form>
                    <?php 
                 }
            ?>
        </div>
    </div>
</div>
<script>
      $("#foto").change(function(){
                $('#copia').val($('#foto').val());
            });
</script>