<div class="data-container">
    
    <div class="info">
    <?php
        if($rol && is_object($rol)){
            echo "
                <div class='record-one'>
                    <span class='object-table'>ID: $rol->id</span>
                    <span class='object-table'>Nombre: $rol->nombre</span>
                </div>
            ";      
        }
    ?>
    </div>
    <div class="navegate-group">
        <div class="back">
            <a href="/rol/view"><img src="/img/back.svg"></a>
        </div>
    </div>
</div>