<div class="data-container">
    
    <div class="info">
    <?php
    if (empty($roles)) {
        echo '<br>No se encuentran roles en la base de datos';
    } else {
        foreach ($roles as $key => $value) {
            echo
            "<div class='record'>
                <span> <div class='id'>$value->id</div> $value->nombre</span>
                <div class='buttons'>
                    <a href='/rol/view/$value->id'> 
                        <button class='consultar'>
                            <img src='/img/consultar.png' alt='consultar'>
                        </button> 
                    </a> 
                    <a href='/rol/edit/$value->id'> 
                        <button class='editar'>
                            <img src='/img/editar.png' alt='consultar'>
                        </button> 
                    </a> 
                    <a href='/rol/delete/$value->id'> 
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
            <a href="/rol/new"><button>+</button></a>
        </div>
    </div>
</div>