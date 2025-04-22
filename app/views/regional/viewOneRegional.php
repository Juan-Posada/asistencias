<div class="data-container">
    
    <div class="info">
    <?php
        if($regional && is_object($regional)){
            echo "
                <div class='record-one'>
                    <span class='object-table'>ID: $regional->id</span>
                    <span class='object-table'>Nombre: $regional->nombre</span>
                </div>
            ";      
        }
    ?>
    </div>
    <div class="navegate-group">
        <div class="back">
            <a href="/regional/view"><img src="/img/back.svg"></a>
        </div>
    </div>
</div>