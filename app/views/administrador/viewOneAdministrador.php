<div class="data-container">
    
    <div class="info">
    <?php
        if($administrador && is_object($administrador)){
            echo "
                <div class='record-one'>
                    <span>ID: $administrador->id</span>
                    <span>ID Regional: $administrador->idRegional</span>
                    <span>ID Usuario: $administrador->idUsuario</span>
                </div>
            ";      
        }
    ?>
    </div>
    <div class="navegate-group">
        <div class="back">
            <a href="/administrador/view"><img src="/img/back.svg"></a>
        </div>
    </div>
</div>