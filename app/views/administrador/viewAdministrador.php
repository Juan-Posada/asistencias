<div class="data-container">
    <div class="info">
        <?php
            if (empty($administradores)) {
                echo '<br>No se encuentran administradores en la base de datos';
            } else {
                foreach ($administradores as $key => $value) {
                    echo
                    "<div class='record'>
                        <span> <div class='id'>$value->id</div> Regional: $value->idRegional - Usuario: $value->idUsuario</span>
                        <div class='buttons'>
                            <a href='/administrador/view/$value->id'> 
                                <button class='consultar'>
                                    <img src='/img/consultar.png' alt='consultar'>
                                </button> 
                            </a> 
                            <a href='/administrador/edit/$value->id'> 
                                <button class='editar'>
                                    <img src='/img/editar.png' alt='consultar'>
                                </button> 
                            </a> 
                            <a href='/administrador/delete/$value->id'> 
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
            <a href="/administrador/view"><img src="/img/back.svg"></a>
        </div>
        <div class="create">
            <a href="/administrador/new"><button>+</button></a>
        </div>
    </div>
</div>