<div class="data-container">
    <div class="navegate-group">
        <div class="back">
            <a href="/coordinador/view"><img src="/img/back.svg"></a>
        </div>
    </div>
    <div class="info">
        <?php
            if($coordinador && is_object($coordinador)) {
                // echo "<pre>";
                // print_r($coordinador);
                // echo "<pre>";
                echo "<div class='record-one'>
                        <span>ID: $coordinador->id</span>
                        <span>ID Centro: $coordinador->idCentro</span>
                        <span>ID Usuario: $coordinador->idUsuario</span>
                      </div>";
            }
        ?>
    </div>
</div>