<div class="data-container">
    <div class="navegate-group">
        <div class="back">
            <a href="/login/init"><img src="/img/back.svg"></a>
        </div>
        <div class="create">
            <a href="/centro/new"><button>+</button></a>
        </div>
    </div>
    <div class="info">
    <?php
    if (empty($centros)) {
        echo '<br>No se encuentran centros en la base de datos';
    } else {
        foreach ($centros as $key => $value) {
            echo
            "<div class='record'>
                <span> ID: $value->id - Nombre: $value->nombre - ID Regional: $value->idRegional</span>
                <div class='buttons'>
                    <a href='/centro/view/$value->id'> <button>Consultar</button> </a> 
                    <a href='/centro/edit/$value->id'> <button>Editar</button> </a> 
                    <a href='/centro/delete/$value->id'> <button>Eliminar</button> </a> 
                </div>
            </div>";
        }
    }
    ?>
    </div>
</div>