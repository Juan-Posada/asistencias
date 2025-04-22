<div class="data-container">
    <div class="info">
    <?php
        if($horario && is_object($horario)){
            echo "
                <div class='record-one'>
                    <span>ID: $horario->id</span>
                    <span>Hora Inicio: $horario->horaInicio</span>
                    <span>Hora Fin: $horario->horaFin</span>
                    <span>Día: $horario->dia</span>
                    <span>ID Competencia: $horario->idCompetencia</span>
                </div>
            ";      
        }
    ?>
    </div>
    <div class="navegate-group">
        <div class="back">
            <a href="/horario/view"><img src="/img/back.svg"></a>
        </div>
    </div>
</div>