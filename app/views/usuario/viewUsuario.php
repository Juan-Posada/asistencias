<div class="data-container">
    
    <div class="info">
    <?php
    if (empty($usuarios)) {
        echo '<br>No se encuentran usuarios en la base de datos';
    } else {
        foreach ($usuarios as $key => $value) {
            echo
            "<div class='record'>
                <span> ID: $value->id - $value->nombre</span>
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
            <a href="/login/init"><img src="/img/back.svg"></a>
        </div>
        <div class="create">
            <a href="/usuario/new"><button>+</button></a>
        </div>
    </div>
</div>