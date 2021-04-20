<?php
    include("../scripts/cone.php");
    include("top.php");
                    $texto_db = $conexion->query("SELECT * FROM acerca order by id_acerca desc  limit 1 ");
                    $texto = $texto_db->fetch_assoc();
                    $fotos_db = $conexion->query("SELECT * FROM acerca_img order by id_acerca desc  limit 1 ");
                    $fotos = $fotos_db->fetch_assoc();

?>
<div>
    <div class="row">
        <div class="col-md-6 titulo">
            <br>
            <center>
            <h5>Texto actual</h5>
            <div id="imagen_actual">
                <img  src="../img/<?php echo $fotos["nombre"];?>" width="200" alt="">
            </div>
            </center>
            <div class="texto_actual">
                <p id="texto_actual">
                    <?php
                        echo $texto["texto_acerca"];
                    ?>
                </p>
                <input type="hidden" name="" value="<?php echo $texto["texto_acerca"];?>" id="hh">
                <button id="edit" class="btn btn-warning">Editar</button>
            </div>
            
        </div>
        <div class="col-md-6 titulo">
            <br>
            <h5>Agregar o editar</h5>
            <form action="../scripts/acerca.php" method="post" enctype="multipart/form-data">
                <input type="file" name="foto" class="form-control" id="imagen"> <br>
                <input type="hidden" name="fotos" id="fotos">
                <textarea name="texto" class="form-control" id="texto" placeholder="Texto del acerca" cols="30" rows="10"></textarea><br>
                <button class="btn btn-primary">Guardar</button>
                
            </form>
        </div>
    </div>
</div>
<script>
    $("#edit").click(function(){
        var tex = $("#hh").val();
        $("#texto").val(tex);
    });
    $("#imagen").change(function(){
        $("#fotos").val($("#imagen").val());
    });
</script>