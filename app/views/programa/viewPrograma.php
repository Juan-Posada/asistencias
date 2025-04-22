<div class="data-container">
    <div class="navegate-group">
        <div class="back">
            <a href="/login/init"><img src="/img/back.svg"></a>
        </div>
        <div class="create">
            <a href="/programa/new"><button>+</button></a>
        </div>
    </div>
    <div class="info">
    <?php
    if (empty($programas)) {
        echo '<br>No se encuentran programas en la base de datos';
    } else {
        foreach ($programas as $key => $value) {
            echo
            "<div class='record'>
                <span> ID: $value->id - Nombre: $value->nombre - Centro: $value->idCentro</span>
                <div class='buttons'>
                    <a href='/programa/view/$value->id'> <button>Consultar</button> </a> 
                    <a href='/programa/edit/$value->id'> <button>Editar</button> </a> 
                    <a href='/programa/delete/$value->id'> <button>Eliminar</button> </a> 
                </div>
            </div>";
        }
    }
    ?>
    </div>
</div>