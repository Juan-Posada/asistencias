<div class="data-container">
    <div class="info">
    <?php
        if($horario && is_object($horario)){
            echo "
                <div class='record-one'>
                    <span class='object-table'>ID: $horario->id</span>
                    <span class='object-table'>Hora Inicio: $horario->horaInicio</span>
                    <span class='object-table'>Hora Fin: $horario->horaFin</span>
                    <span class='object-table'>Día: $horario->dia</span>
                    <span class='object-table'>ID Competencia: $horario->idCompetencia</span>
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