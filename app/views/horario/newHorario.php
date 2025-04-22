<div class="data-container">
    <div class="info">
        <form action="/horario/create" method="post">
            <div class="form-group">
                <label for="">Hora Inicio:</label>
                <input type="datetime-local" name="horaInicio" class="form-control" required>
                
                <label for="">Hora Fin:</label>
                <input type="datetime-local" name="horaFin" class="form-control" required>

                <label for="">Día:</label>
                <select name="dia" id="" required>
                    <option value="">Seleccione el día...</option>
                    <option value="lunes">Lunes</option>
                    <option value="martes">Martes</option>
                    <option value="miercoles">Miercoles</option>
                    <option value="jueves">Jueves</option>
                    <option value="viernes">Viernes</option>
                    <option value="sabado">Sabado</option>
                </select>

                <label for="">Competencia:</label>
                <select name="idCompetencia" id="" required>
                    <option value="">Seleccione la competencia...</option>
                    <?php 
                    foreach($competencias as $competencia){
                        echo "<option value=".$competencia->id.">".$competencia->nombre."</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <button type="submit">Guardar</button>
            </div>
        </form>
    </div>
    <div class="navegate-group">
        <div class="back">
            <a href="/horario/view"><img src="/img/back.svg"></a>
        </div>
    </div>
</div>