<div class="data-container">
    <div class="info">
    <?php
        if($asistencia && is_object($asistencia)){
            echo "
                <div class='record-one'>
                    <span class='object-table'>ID: $asistencia->id</span>
                    <span class='object-table'>ID Horario: $asistencia->idHorario</span>
                    <span class='object-table'>Fecha: $asistencia->fecha</span>
                    <span class='object-table'>Cantidad de Horas: $asistencia->cantHoras</span>
                    <span class='object-table'>ID Aprendiz: $asistencia->idAprendiz</span>
                </div>
            ";      
        }
    ?>
    </div>
    <div class="navegate-group">
        <div class="back">
            <a href="/asistencia/view"><img src="/img/back.svg"></a>
        </div>
    </div>
</div>