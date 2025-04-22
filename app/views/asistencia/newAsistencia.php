<div class="data-container">
    <div class="navegate-group">
        <div class="back">
            <a href="/asistencia/view"><img src="/img/back.svg"></a>
        </div>
    </div>
    <div class="info">
        <form action="/asistencia/create" method="post">
            <div class="form-group">
                <label for="">ID Horario:</label>
                <input type="number" name="idHorario" class="form-control" required>
                
                <label for="">Fecha:</label>
                <input type="date" name="fecha" class="form-control" required>

                <label for="">Cantidad de Horas:</label>
                <input type="number" name="cantHoras" class="form-control" required>

                <label for="">ID Aprendiz:</label>
                <input type="number" name="idAprendiz" class="form-control" required>
            </div>
            <div class="form-group">
                <button type="submit">Guardar</button>
            </div>
        </form>
    </div>
</div>