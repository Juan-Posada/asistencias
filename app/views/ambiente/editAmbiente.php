<div class="data-container">
    <div class="navegate-group">
        <div class="back">
            <a href="/ambiente/view"><img src="/img/back.svg"></a>
        </div>
    </div>
    <div class="info">
        <form action="/ambiente/update" method="post">
            <div class="form-group">
                <label for="">ID del ambiente: </label>
                <input type="text" readonly value="<?php echo $ambiente->id ?>" name="id" id="txtId" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Nombre del ambiente: </label>
                <input type="text" value="<?php echo $ambiente->nombre ?>" name="nombre" id="txtNombre" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Centro: </label>
                <select name="idCentro" id="">
                    <option value="">Seleccione el centro...</option>
                    <?php 
                    foreach($centros as $centro){
                        if ($centro->id == $ambiente->idCentro) {
                            echo "<option selected value='".$centro->id."'>".$centro->nombre."</option>";
                        }else{
                            echo "<option value='".$centro->id."'>".$centro->nombre."</option>";
                        }
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <button type="submit">Editar</button>
            </div>
        </form>
    </div>
</div>