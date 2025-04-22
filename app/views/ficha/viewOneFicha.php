<div class="data-container">
    <div class="info">
    <?php
        if($ficha && is_object($ficha)){
            echo "
                <div class='record-one'>
                    <span class='object-table'>ID: $ficha->id</span>
                    <span class='object-table'>Ficha: $ficha->ficha</span>
                    <span class='object-table'>ID Programa: $ficha->idPrograma</span>
                </div>
            ";      
        }
    ?>
    </div>
    <div class="navegate-group">
        <div class="back">
            <a href="/ficha/view"><img src="/img/back.svg"></a>
        </div>
    </div>
</div>