<div class="data-container">
    <div class="navegate-group">
        <div class="back">
            <a href="/administrador/view"><img src="/img/back.svg"></a>
        </div>
    </div>
    <div class="info">
        <form action="/administrador/update" method="post">
            <!-- Campo ID (oculto) -->
            <div class="form-group">
                <label for="txtId">Id del administrador</label>
                <input type="text" readonly value="<?php echo $administrador->id ?>" name="txtId" id="txtId" class="form-control">
            </div>

            <!-- Campo Regional -->
            <div class="form-group">
                <label for="txtIdRegional">Regional</label>
                <select name="txtIdRegional" id="txtIdRegional" class="form-control" required>
                    <option value="">Selecciona una regional</option>
                    <?php
                        if (isset($regionales) && is_array($regionales)) {
                            foreach ($regionales as $regional) {
                                $selected = ($administrador->idRegional == $regional->id) ? 'selected' : '';
                                echo "<option value='".$regional->id."' $selected>".$regional->nombre."</option>";
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
                                $selected = ($administrador->idUsuario == $usuario->id) ? 'selected' : '';
                                echo "<option value='".$usuario->id."' $selected>".$usuario->nombre."</option>";
                            }
                        } else {
                            echo "ERROR: No se encontraron usuarios";
                        }
                    ?>
                </select>
            </div>

            <!-- Botón de Guardar -->
            <div class="form-group">
                <button type="submit">Editar</button>
            </div>
        </form>
    </div>
</div>