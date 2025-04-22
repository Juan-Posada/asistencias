<div class="data-container">
    <div class="info">
    <?php
        if($competencia && is_object($competencia)){
            echo "
                <div class='record-one'>
                    <span class='object-table'>ID: $competencia->id</span>
                    <span class='object-table'>Nombre: $competencia->nombre</span>
                    <span class='object-table'>Ficha: $competencia->nombreFicha</span>
                    <span class='object-table'>Instructor: $competencia->nombreInstructor</span>
                </div>
            ";      
        }
    ?>
    </div>
    <div class="navegate-group">
        <div class="back">
            <a href="/competencia/view"><img src="/img/back.svg"></a>
        </div>
    </div>
</div>