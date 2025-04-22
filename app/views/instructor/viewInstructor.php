<div class="data-container">
    <div class="info">
    <?php
    if (empty($instructores)) {
        echo '<br>No se encuentran instructores en la base de datos';
    } else {
        foreach ($instructores as $key => $value) {
            echo
            "<div class='record'>
                <span> <div class='id'>$value->id</div> Centro: $value->idCentro - Usuario: $value->idUsuario</span>
                <div class='buttons'>
                    <a href='/instructor/view/$value->id'> 
                        <button class='consultar'>
                            <img src='/img/consultar.png' alt='consultar'>
                        </button> 
                    </a> 
                    <a href='/instructor/edit/$value->id'> 
                        <button class='editar'>
                            <img src='/img/editar.png' alt='editar'>
                        </button> 
                    </a> 
                    <a href='/instructor/delete/$value->id'> 
                        <button class='eliminar'>
                            <img src='/img/eliminar.png' alt='eliminar'>
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
            <a href="/login/init"><img src="/img/back.svg"></a>
        </div>
        <div class="create">
            <a href="/instructor/new"><button>+</button></a>
        </div>
    </div>
</div>