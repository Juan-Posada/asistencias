<div class="data-container">
    <div class="navegate-group">
        <div class="back">
            <a href="/asistencia/view"><img src="/img/back.svg"></a>
        </div>
    </div>
    <div class="info">
        <form action="/asistencia/update" method="post">
            <div class="form-group">
                <label for="">ID de la Asistencia:</label>
                <input type="text" readonly value="<?php echo $asistencia->id ?>" name="id" class="form-control">
            </div>
            <div class="form-group">
                <label for="">ID Horario:</label>
                <input type="number" value="<?php echo $asistencia->idHorario ?>" name="idHorario" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="">Fecha:</label>
                <input type="date" value="<?php echo $asistencia->fecha ?>" name="fecha" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="">Cantidad de Horas:</label>
                <input type="number" value="<?php echo $asistencia->cantHoras ?>" name="cantHoras" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="">ID Aprendiz:</label>
                <input type="number" value="<?php echo $asistencia->idAprendiz ?>" name="idAprendiz" class="form-control" required>
            </div>
            <div class="form-group">
                <button type="submit">Editar</button>
            </div>
        </form>
    </div>
</div>