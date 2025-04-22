<div class="data-container">
    <div class="navegate-group">
        <div class="back">
            <a href="/login/init"><img src="/img/back.svg"></a>
        </div>
        <div class="create">
            <a href="/administrador/new"><button>+</button></a>
        </div>
    </div>
    <div class="info">
    <?php
    if (empty($administradores)) {
        echo '<br>No se encuentran administradores en la base de datos';
    } else {
        foreach ($administradores as $key => $value) {
            echo
            "<div class='record'>
                <span> ID: $value->id - ID Regional: $value->idRegional - ID Usuario: $value->idUsuario</span>
                <div class='buttons'>
                    <a href='/administrador/view/$value->id'> <button>Consultar</button> </a> 
                    <a href='/administrador/edit/$value->id'> <button>Editar</button> </a> 
                    <a href='/administrador/delete/$value->id'> <button>Eliminar</button> </a> 
                </div>
            </div>";
        }
    }
    ?>
    </div>
</div>