<div class="data-container">
    
    <div class="info">
    <?php
    if (empty($centros)) {
        echo '<br>No se encuentran centros en la base de datos';
    } else {
        foreach ($centros as $key => $value) {
            echo
            "<div class='record'>
                <span> <div class='id'>$value->id</div> Nombre: $value->nombre - ID Regional: $value->idRegional</span>
                <div class='buttons'>
                    <a href='/centro/view/$value->id'> 
                        <button class='consultar'>
                            <img src='/img/consultar.png' alt='consultar'>
                        </button> 
                    </a> 
                    <a href='/centro/edit/$value->id'> 
                        <button class='editar'>
                            <img src='/img/editar.png' alt='consultar'>
                        </button> 
                    </a> 
                    <a href='/centro/delete/$value->id'> 
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
            <a href="/centro/new"><button>+</button></a>
        </div>
    </div>
</div>