<div class="data-container">
    
    <div class="info">
    <?php
        if($ficha && is_object($ficha)){
            echo "
                <div class='record-one'>
                    <span>ID: $ficha->id</span>
                    <span>Ficha: $ficha->ficha</span>
                    <span>ID Programa: $ficha->idPrograma</span>
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