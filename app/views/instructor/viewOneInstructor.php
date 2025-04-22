<div class="data-container">
    <div class="info">
    <?php
        if($instructor && is_object($instructor)){
            echo "
                <div class='record-one'>
                    <span class='object-table'>ID: $instructor->id</span>
                    <span class='object-table'>Centro: $instructor->idCentro</span>
                    <span class='object-table'>Usuario: $instructor->idUsuario</span>
                </div>
            ";      
        }
    ?>
    </div>
    <div class="navegate-group">
        <div class="back">
            <a href="/instructor/view"><img src="/img/back.svg"></a>
        </div>
    </div>
</div>