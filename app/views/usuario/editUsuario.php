<div class="data-container">
    
    <div class="info">
        <form action="/usuario/update" method="post">
            <div class="form-group">
                <label for="">ID del Usuario:</label>
                <input type="text" readonly value="<?php echo $usuario->id ?>" name="txtId" id="txtId" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Nombre:</label>
                <input type="text" value="<?php echo $usuario->nombre ?>" name="txtNombre" id="txtNombre" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="">Email:</label>
                <input type="email" value="<?php echo $usuario->email ?>" name="txtEmail" id="txtEmail" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="">Rol:</label>
                <select name="txtIdRol" id="txtIdRol" class="form-control" required>
                    <option value="">Seleccione un Rol</option>
                    <?php foreach ($roles as $rol): ?>
                        <option value="<?php echo $rol->id; ?>" <?php echo $usuario->idRol == $rol->id ? 'selected' : ''; ?>><?php echo $rol->nombre; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <button type="submit">Editar</button>
            </div>
        </form>
    </div>
    <div class="navegate-group">
        <div class="back">
            <a href="/usuario/view"><img src="/img/back.svg"></a>
        </div>
    </div>
</div>