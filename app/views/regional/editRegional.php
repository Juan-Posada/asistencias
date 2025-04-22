<div class="data-container">
    
    <div class="info">
        <form action="/regional/update" method="post">
            <div class="form-group">
                <label for="">ID de la Regional:</label>
                <input type="text" readonly value="<?php echo $regional->id ?>" name="txtId" id="txtId" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Nombre de la Regional:</label>
                <input type="text" value="<?php echo $regional->nombre ?>" name="txtNombre" id="txtNombre" class="form-control" required>
            </div>
            <div class="form-group">
                <button type="submit">Editar</button>
            </div>
        </form>
    </div>
    <div class="navegate-group">
        <div class="back">
            <a href="/regional/view"><img src="/img/back.svg"></a>
        </div>
    </div>
</div>