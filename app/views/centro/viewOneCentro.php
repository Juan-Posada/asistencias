<div class="data-container">
    <div class="info">
    <?php
        if($centro && is_object($centro)){
            echo "
                <div class='record-one'>
                    <span class='object-table'>ID: $centro->id</span>
                    <span class='object-table'>Nombre: $centro->nombre</span>
                    <span class='object-table'>ID Regional: $centro->idRegional</span>
                </div>
            ";      
        }
    ?>
    </div>
    <div class="navegate-group">
        <div class="back">
            <a href="/centro/view"><img src="/img/back.svg"></a>
        </div>
    </div>
</div>