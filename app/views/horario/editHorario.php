<div class="data-container">
    <div class="info">
        <form action="/horario/update" method="post">
            <div class="form-group">
                <label for="">ID del Horario:</label>
                <input type="text" readonly value="<?php echo $horario->id ?>" name="id" id="txtId" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Hora Inicio:</label>
                <input type="time" value="<?php echo $horario->horaInicio ?>" name="horaInicio" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="">Hora Fin:</label>
                <input type="time" value="<?php echo $horario->horaFin ?>" name="horaFin" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="">Día:</label>
                <input type="text" value="<?php echo $horario->dia ?>" name="dia" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="">Competencia:</label>
                <select name="idCompetencia" id="" required>
                    <?php 
                    foreach($competencias as $competencia){
                        if ($horario->idCompetencia == $competencia->id) {
                            echo "<option selected value=".$competencia->id.">".$competencia->nombre."</option>";
                        } else {
                            echo "<option value=".$competencia->id.">".$competencia->nombre."</option>";
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
            <a href="/horario/view"><img src="/img/back.svg"></a>
        </div>
    </div>
</div>