<div class="data-container">
    
    <div class="info">
    <?php
    if (empty($fichas)) {
        echo '<br>No se encuentran fichas en la base de datos';
    } else {
        foreach ($fichas as $key => $value) {
            echo
            "<div class='record'>
                <span> <div class='id'>$value->id</div> Ficha: $value->ficha - ID Programa: $value->idPrograma</span>
                <div class='buttons'>
                    <a href='/ficha/view/$value->id'> 
                        <button class='consultar'>
                            <img src='/img/consultar.png' alt='consultar'>
                        </button> 
                    </a> 
                    <a href='/ficha/edit/$value->id'> 
                        <button class='editar'>
                            <img src='/img/editar.png' alt='consultar'>
                        </button> 
                    </a> 
                    <a href='/ficha/delete/$value->id'> 
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
            <a href="/ficha/new"><button>+</button></a>
        </div>
    </div>
</div>