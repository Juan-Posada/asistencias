<div class="data-container">
    <div class="navegate-group">
        <div class="back">
            <a href="/coordinador/view"><img src="/img/back.svg"></a>
        </div>
    </div>
    <div class="info">
        <form action="/coordinador/update" method="post">
            <!-- Campo ID (oculto) -->
            <div class="form-group">
                <label for="txtId">Id del coordinador</label>
                <input type="text" readonly value="<?php echo $coordinador->id ?>" name="txtId" id="txtId" class="form-control">
            </div>

            <!-- Campo Centro -->
            <div class="form-group">
                <label for="txtIdCentro">Centro</label>
                <select name="txtIdCentro" id="txtIdCentro" class="form-control" required>
                    <option value="">Selecciona un centro</option>
                    <?php
                        if (isset($centros) && is_array($centros)) {
                            foreach ($centros as $centro) {
                                $selected = ($coordinador->idCentro == $centro->idCentro) ? 'selected' : '';
                                echo "<option value='".$centro->idCentro."' $selected>".$centro->nombre."</option>";
                            }
                        } else {
                            echo "ERROR: No se encontraron centros";
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
                                $selected = ($coordinador->idUsuario == $usuario->idUsuario) ? 'selected' : '';
                                echo "<option value='".$usuario->idUsuario."' $selected>".$usuario->nombre."</option>";
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