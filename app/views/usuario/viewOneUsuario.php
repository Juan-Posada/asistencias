<div class="data-container">
    <div class="info">
    <?php
        if($usuario && is_object($usuario)){
            echo "
                <div class='record-one'>
                    <span class='object-table'>ID: $usuario->id</span>
                    <span class='object-table'>Nombre: $usuario->nombre</span>
                    <span class='object-table'>Email: $usuario->email</span>
                    <span class='object-table'>Rol: $usuario->idRol</span>
                </div>
            ";      
        }
    ?>
    </div>
    <div class="navegate-group">
        <div class="back">
            <a href="/usuario/view"><img src="/img/back.svg"></a>
        </div>
    </div>
</div>