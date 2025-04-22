<div class="data-container">
    <div class="info">
        <?php
        if (empty($competencias)) {
            echo '<br>No se encuentran competencias en la base de datos';
        } else {
            foreach ($competencias as $key => $value) {
                echo
                "<div class='record'>
                <span><div class='id'>$value->id</div> Nombre: $value->nombre - Ficha: $value->idFicha - Instructor: $value->idInstructor</span>
                <div class='buttons'>
                    <a href='/competencia/view/$value->id'> 
                        <button class='consultar'>
                            <img src='/img/consultar.png' alt='consultar'>
                        </button> 
                    </a> 
                    <a href='/competencia/edit/$value->id'> 
                        <button class='editar'>
                            <img src='/img/editar.png' alt='consultar'>
                        </button> 
                    </a> 
                    <a href='/competencia/delete/$value->id'> 
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
            <a href="/competencia/new"><button>+</button></a>
        </div>
    </div>
</div>