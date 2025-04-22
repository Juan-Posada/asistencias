<div class="data-container">
    <div class="navegate-group">
        <div class="back">
            <a href="/ambiente/view"><img src="/img/back.svg"></a>
        </div>
    </div>
    <div class="info">
    <?php
        if($ambiente && is_object($ambiente)){
            echo "
                <div class='record-one'>
                    <span>ID: $ambiente->id</span>
                    <span>Nombre: $ambiente->nombre</span>
                    <span>Centro: $ambiente->nombreCentro</span>
                </div>
            ";      
        }
    ?>
    </div>
</div>