<div class="data-container">
    <div class="info">
    <?php
        if($aprendiz && is_object($aprendiz)){
            echo "
                <div class='record-one'>
                    <span class='object-table'>ID: $aprendiz->id</span>
                    <span class='object-table'>Nombre: $aprendiz->idUsuario</span>
                </div>
            ";      
        }
    ?>
    </div>
    <div class="navegate-group">
        <div class="back">
            <a href="/aprendiz/view"><img src="/img/back.svg"></a>
        </div>
    </div>
</div>