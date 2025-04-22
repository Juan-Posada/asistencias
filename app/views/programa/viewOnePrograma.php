<div class="data-container">
    
    <div class="info">
    <?php
        if($programa && is_object($programa)){
            echo "
                <div class='record-one'>
                    <span>ID: $programa->id</span>
                    <span>Nombre: $programa->nombre</span>
                    <span>Centro: $programa->nombreCentro</span>
                </div>
            ";      
        }
    ?>
    </div>
    <div class="navegate-group">
        <div class="back">
            <a href="/programa/view"><img src="/img/back.svg"></a>
        </div>
    </div>
</div>