<div class="data-container">
    <div class="navegate-group">
        <div class="back">
            <a href="/administrador/view"><img src="/img/back.svg"></a>
        </div>
    </div>
    <div class="info">
        <form action="/administrador/create" method="post">
            <!-- Campo Regional -->
            <div class="form-group">
                <label for="txtIdRegional">Regional</label>
                <select name="txtIdRegional" id="txtIdRegional" class="form-control" required>
                    <option value="">Selecciona una regional</option>
                    <?php
                        if (isset($regionales) && is_array($regionales)) {
                            foreach ($regionales as $regional) {
                                echo "<option value='".$regional->id."'>".$regional->nombre."</option>";
                            }
                        } else {
                            echo "ERROR: No se encontraron regionales";
                        }
                    ?>
                </select>
            </div>
            
            <!-- Campo Usuario -->
            <div class="form-group">
                <label for="txtIdUsuario">Usuario</label>
                <select name="txtIdUsuario" id="txtIdUsuario" class="form-control" required>
                    <option value="">Selecciona un usuario</option>
                    <?php
                        if (isset($usuarios) && is_array($usuarios)) {
                            foreach ($usuarios as $usuario) {
                                echo "<option value='".$usuario->id."'>".$usuario->nombre."</option>";
                            }
                        } else {
                            echo "ERROR: No se encontraron usuarios";
                        }
                    ?>
                </select>
            </div>

            <!-- Botón de Guardar -->
            <div class="form-group">
                <button type="submit">Guardar</button>
            </div>
        </form>
    </div>
</div>