<div class="data-container">
    
    <div class="info">
    <?php
    if (empty($regionales)) {
        echo '<br>No se encuentran regionales en la base de datos';
    } else {
        foreach ($regionales as $key => $value) {
            echo
            "<div class='record'>
                <span> <div class='id'>$value->id</div> $value->nombre</span>
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
            <a href="/regional/new"><button>+</button></a>
        </div>
    </div>
</div>