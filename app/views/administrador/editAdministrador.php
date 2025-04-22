<div class="data-container">
    
    <div class="info">
        <form action="/administrador/update" method="post">
            <div class="form-group">
                <label for="">ID del Administrador:</label>
                <input type="text" readonly value="<?php echo $administrador->id ?>" name="txtId" id="txtId" class="form-control">
            </div>
            <div class="form-group">
                <label for="">ID Regional:</label>
                <input type="number" value="<?php echo $administrador->idRegional ?>" name="txtIdRegional" id="txtIdRegional" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="">ID Usuario:</label>
                <input type="number" value="<?php echo $administrador->idUsuario ?>" name="txtIdUsuario" id="txtIdUsuario" class="form-control" required>
            </div>
            <div class="form-group">
                <button type="submit">Editar</button>
            </div>
        </form>
    </div>
    <div class="navegate-group">
        <div class="back">
            <a href="/administrador/view"><img src="/img/back.svg"></a>
        </div>
    </div>
</div>