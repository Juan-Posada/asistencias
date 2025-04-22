<div class="data-container">
    <div class="info">
    <?php
        if($ambiente && is_object($ambiente)){
            echo "
                <div class='record-one'>
                    <span class='object-table'>ID: $ambiente->id</span>
                    <span class='object-table'>Nombre: $ambiente->nombre</span>
                    <span class='object-table'>Centro: $ambiente->nombreCentro</span>
                </div>
            ";      
        }
    ?>
    </div>
    <div class="navegate-group">
        <div class="back">
            <a href="/ambiente/view"><img src="/img/back.svg"></a>
        </div>
    </div>
</div>