<?php 
    include("top.php");
    include("../scripts/cone.php");
    $record_db = $conexion->query("SELECT * FROM record limit 1 ");
    $record= $record_db->fetch_assoc();
    if(isset($_GET["id"])){
        include("alerta/success.php");
    }
?>
<div>
    
        <form action="../scripts/record.php" method="post">
            <div class="row" id="record">
                <div class="col-md-3">
                    <p> Trabajos completados</p> 
                    <input class="form-control" type="number" name="completados" value="<?php echo $record["completados"]; ?>" placeholder="">
                </div>
                <div class="col-md-3">
                <p>Años de experiencia</p> 
                    <input class="form-control" type="number" name="anos" value="<?php echo $record["anos"]; ?>" id="">
                </div> 
                <div class="col-md-3">
                <p>Total clientes</p> 
                    <input class="form-control" type="number" name="clientes" value="<?php echo $record["clientes"]; ?>" id="">
                </div>
                <br>
                <div class="col-md-9">
                <br>
                    <button class="btn btn-primary form-control">Guardar</button>    
                </div>
                
            </div>
        </form>
    
</div>