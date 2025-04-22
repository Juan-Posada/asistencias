<div class="data-container">
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
                            <a href='/regional/view/$value->id'> 
                                <button class='consultar'>
                                    <img src='/img/consultar.png' alt='consultar'>
                                </button> 
                            </a> 
                            <a href='/regional/edit/$value->id'> 
                                <button class='editar'>
                                    <img src='/img/editar.png' alt='consultar'>
                                </button> 
                            </a> 
                            <a href='/regional/delete/$value->id'> 
                                <button class='eliminar'>
                                    <img src='/img/eliminar.png' alt='consultar'>
                                </button> 
                            </a> 
                        </div>
                    </div>";
                }
            }
        ?>
    </div>
    <div class="navegate-group">
        <div class="back">
            <a href="/coordinador/view"><img src="/img/back.svg"></a>
        </div>
        <div class="create">
            <a href="/coordinador/new"><button>+</button></a>
        </div>
    </div>
</div>