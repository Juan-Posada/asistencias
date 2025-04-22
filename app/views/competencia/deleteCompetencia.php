<div class="data-container">
    <div class="navegate-group">
        <div class="back">
            <a href="/competencia/view"><img src="/img/back.svg"></a>
        </div>
    </div>
    <div class="info">
        <form action="/competencia/remove" method="post">
            <div class="form-group">
                <label>ID de la Competencia: </label>
                <input type="text" readonly value="<?php echo $competencia->id ?>" name="txtId" class="form-control">
            </div>
            <div class="form-group">
                <p>¿Está seguro que desea eliminar la competencia "<?php echo $competencia->nombre ?>"?</p>
                <button type="submit">Eliminar</button>
            </div>
        </form>
    </div>
</div>