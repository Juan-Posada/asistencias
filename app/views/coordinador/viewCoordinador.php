<div class="data-container">
    <div class="navegate-group">
        <div class="back">
            <a href="/coordinador/view"><img src="/img/back.svg"></a>
        </div>
        <div class="create">
            <a href="/coordinador/new"><button>+</button></a>
        </div>
    </div>
    <div class="info">
        <?php
            if (empty($coordinadores)) {
                echo '<br>No se encuentran coordinadores en la base de datos';
            } else {
                foreach ($coordinadores as $key => $value) {
                    echo
                    "<div class='record'>
                        <span> ID: $value->id - Centro: $value->idCentro - Usuario: $value->idUsuario</span>
                        <div class='buttons'>
                            <a href='/coordinador/view/$value->id'> <button>Consultar</button> </a> 
                            <a href='/coordinador/edit/$value->id'> <button>Editar</button> </a> 
                            <a href='/coordinador/delete/$value->id'> <button>Eliminar</button> </a> 
                        </div>
                    </div>";
                }
            }
        ?>
    </div>
</div>