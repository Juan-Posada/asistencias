<div class="data-container">
    
    <div class="info">
        <form action="/centro/update" method="post">
            <div class="form-group">
                <label for="">ID del Centro:</label>
                <input type="text" readonly value="<?php echo $centro->id ?>" name="id" id="txtId" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Nombre del centro:</label>
                <input type="text" value="<?php echo $centro->nombre ?>" name="nombre" id="txtIdUsuario" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="">Regional:</label>
                <select name="idRegional" id="">
                    <option value="">Seleccione la regional...</option>
                    <?php 
                    foreach($regionales as $regional){
                        if ($centro->idRegional == $regional->id) {
                            echo "<option selected value=".$regional->id.">".$regional->nombre."</option>";
                        }else{
                            echo "<option value=".$regional->id.">".$regional->nombre."</option>";
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
    <div class="navegate-group">
        <div class="back">
            <a href="/centro/view"><img src="/img/back.svg"></a>
        </div>
    </div>
</div>