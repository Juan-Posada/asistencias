<div class="data-container">
    <div class="navegate-group">
        <div class="back">
            <a href="/usuario/view"><img src="/img/back.svg"></a>
        </div>
    </div>
    <div class="info">
        <form action="/usuario/createUsuario" method="post">
            <div class="form-group">
                <label for="">Nombre del Usuario:</label>
                <input type="text" name="txtNombre" id="txtNombre" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="">Email del Usuario:</label>
                <input type="text" name="txtEmail" id="txtEmail" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="">Contraseña:</label>
                <input type="password" name="txtContrasenia" id="txtContrasenia" required class="form-control">
            </div>
            <div class="form-group">
                <label for="">Rol:</label>
                <select name="idRol" id="rolUsuario" required class="form-control">
                    <option value="">Seleccione un rol</option>
                    <?php
                    if (isset($roles) && count($roles) > 0) {
                        foreach ($roles as $rol) {
                            echo "<option value=\"{$rol->id}\">{$rol->nombre}</option>";
                        }
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <button type="submit">Guardar</button>
            </div>
        </form>
    </div>
</div>
