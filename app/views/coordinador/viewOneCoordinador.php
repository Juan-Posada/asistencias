<div class="data-container">
    <div class="info">
        <?php
            if($coordinador && is_object($coordinador)) {
                // echo "<pre>";
                // print_r($coordinador);
                // echo "<pre>";
                echo "<div class='record-one'>
                        <span class='object-table'>ID: $coordinador->id</span>
                        <span class='object-table'>ID Centro: $coordinador->idCentro</span>
                        <span class='object-table'>ID Usuario: $coordinador->idUsuario</span>
                      </div>";
            }
        ?>
    </div>
    <div class="navegate-group">
        <div class="back">
            <a href="/coordinador/view"><img src="/img/back.svg"></a>
        </div>
    </div>
</div>