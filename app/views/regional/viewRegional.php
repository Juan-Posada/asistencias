<div class="data-container">
    <div class="navegate-group">
        <div class="back">
            <a href="/login/init"><img src="/img/back.svg"></a>
        </div>
        <div class="create">
            <a href="/regional/new"><button>+</button></a>
        </div>
    </div>
    <div class="info">
    <?php
    if (empty($regionales)) {
        echo '<br>No se encuentran regionales en la base de datos';
    } else {
        foreach ($regionales as $key => $value) {
            echo
            "<div class='record'>
                <span> ID: $value->id - $value->nombre</span>
                <div class='buttons'>
                    <a href='/regional/view/$value->id'> <button>Consultar</button> </a> 
                    <a href='/regional/edit/$value->id'> <button>Editar</button> </a> 
                    <a href='/regional/delete/$value->id'> <button>Eliminar</button> </a> 
                </div>
            </div>";
        }
    }
    ?>
    </div>
</div>