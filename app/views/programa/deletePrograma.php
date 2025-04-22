<div class="data-container">
    
    <div class="info">
        <form action="/programa/remove" method="post">
            <div class="form-group">
                <label>ID del Programa: </label>
                <input type="text" readonly value="<?php echo $programa->id ?>" name="txtId" class="form-control">
            </div>
            <div class="form-group">
                <button type="submit">Eliminar</button>
            </div>
        </form>
    </div>
    <div class="navegate-group">
        <div class="back">
            <a href="/programa/view"><img src="/img/back.svg"></a>
        </div>
    </div>
</div>