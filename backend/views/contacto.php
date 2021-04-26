<?php
    include("../scripts/cone.php");
    include("top.php");
                    $contacto_db = $conexion->query("SELECT * FROM contacto order by id_contacto desc limit 1 ");    
                    $contacto = $contacto_db->fetch_assoc();    


?>
<div>
    <div class="row"> 
        <div class="col-md-6 titulo"><br>
            <center>
                <div>
                    <h5> Informacion actual </h5>  
                </div>
            </center>
            <div class="row">
                <div class="col-md-12" style="margin-left: 10%;">
                    <strong> Texto: </strong>  <br>
                    <p id="texto_a"><?php echo $contacto["texto"] ?></p>
                </div>
                <div class="row" style="margin-left: 8.3%;" >
                    <div class="col-md-3"><strong>Direccion:</strong></div>
                    <div class="col-md-6"><p id="direccion_a"><?php echo $contacto["direccion"] ?></p> </div>
                </div>
                <div class="row" style="margin-left: 8.3%;" >
                    <div class="col-md-3"><strong>Telefono:</strong></div>
                    <div class="col-md-6"><p id="telefono_a"><?php echo $contacto["telefono"] ?> </p></div>
                </div>
                <div class="row" style="margin-left: 8.3%;" >
                    <div class="col-md-3"><strong> Correo:</strong></div>
                    <div class="col-md-6"> <p id="correo_a"><?php echo $contacto["correo"] ?></p> </div>
                </div>
                
            </div>
            <button class="btn btn-warning" style="margin-left: 10.3%;" id="editar">Editar</button>
        </div>
        <div class="col-md-6 titulo"><br>
            <center>
                <div>
                    <h5> Nueva informacion </h5> 
                </div>
            </center>
            <div>
                <form action="../scripts/contacto.php" method="post">
                    <div class="row">
                        <div class="col-md-12">
                            <textarea class="form-control" name="texto" id="texto" cols="30" rows="10" placeholder="Texto del pie de pagina"></textarea>
                        </div>
                        <div class="col-md-12"><br>
                            <input class="form-control" type="text" name="direccion" id="direccion" placeholder="Direccion">
                        </div>
                        <div class="col-md-12"><br>
                            <input class="form-control" type="text" name="telefono" id="telefono" placeholder="telefono">
                        </div>
                        <div class="col-md-12"><br>
                            <input class="form-control" type="mail" name="correo" id="correo" placeholder="correo">
                        </div>
                        <div class="col-md-12"><br>
                            <input type="submit" id="envio" class="btn btn-primary form-control" <?php if($contacto_db->num_rows > 0) {  ?> disabled <?php } ?> value="Guardar">
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
<script>
    $("#editar").click(function(){
        $("#texto").val($("#texto_a").text());
        $("#direccion").val($("#direccion_a").text());
        $("#telefono").val($("#telefono_a").text());
        $("#correo").val($("#correo_a").text());
        $("#envio").attr("disabled", false);
    });
</script>