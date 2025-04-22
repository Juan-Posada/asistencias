<div class="data-container">
    <div class="navegate-group">
        <div class="back">
            <a href="/login/init"><img src="/img/back.svg"></a>
        </div>
        <div class="create">
            <a href="/aprendiz/new"><button>+</button></a>
        </div>
    </div>
    <div class="info">
    <?php
    if (empty($aprendices)) {
        echo '<br>No se encuentran aprendices en la base de datos';
    } else {
        foreach ($aprendices as $key => $value) {
            echo
            "<div class='record'>
                <span> ID: $value->id - $value->nombre</span>
                <div class='buttons'>
                    <a href='/aprendiz/view/$value->id'> <button>Consultar</button> </a> 
                    <a href='/aprendiz/edit/$value->id'> <button>Editar</button> </a> 
                    <a href='/aprendiz/delete/$value->id'> <button>Eliminar</button> </a> 
                </div>
            </div>";
        }
    }
    ?>
    </div>
</div>