<div class="data-container">
    <div class="navegate-group">
        <div class="back">
            <a href="/competencia/view"><img src="/img/back.svg"></a>
        </div>
    </div>
    <div class="info">
    <?php
        if($competencia && is_object($competencia)){
            echo "
                <div class='record-one'>
                    <span>ID: $competencia->id</span>
                    <span>Nombre: $competencia->nombre</span>
                    <span>Ficha: $competencia->nombreFicha</span>
                    <span>Instructor: $competencia->nombreInstructor</span>
                </div>
            ";      
        }
    ?>
    </div>
</div>