<div class="data-container">
    <div class="navegate-group">
        <div class="back">
            <a href="/aprendiz/view"><img src="/img/back.svg"></a>
        </div>
    </div>
    <div class="info">
    <?php
        if($aprendiz && is_object($aprendiz)){
            echo "
                <div class='record-one'>
                    <span>ID: $aprendiz->id</span>
                    <span>Nombre: $aprendiz->nombre</span>
                </div>
            ";      
        }
    ?>
    </div>
</div>