<div class="data-container">
    
    <div class="info">
    <?php
        if($asistencia && is_object($asistencia)){
            echo "
                <div class='record-one'>
                    <span>ID: $asistencia->id</span>
                    <span>ID Horario: $asistencia->idHorario</span>
                    <span>Fecha: $asistencia->fecha</span>
                    <span>Cantidad de Horas: $asistencia->cantHoras</span>
                    <span>ID Aprendiz: $asistencia->idAprendiz</span>
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