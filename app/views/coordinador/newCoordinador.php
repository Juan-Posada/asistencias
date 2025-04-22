<div class="data-container">
    <div class="navegate-group">
        <div class="back">
            <a href="/coordinador/view"><img src="/img/back.svg"></a>
        </div>
    </div>
    <div class="info">
        <form action="/coordinador/create" method="post"> <!-- Corregido: eliminada comilla adicional -->
            <!-- Campo Centro -->
            <div class="form-group">
                <label for="txtIdCentro">Centro</label>
                <select name="txtIdCentro" id="txtIdCentro" class="form-control" required>
                    <option value="">Selecciona un centro</option>
                    <?php
                        if (isset($centros) && is_array($centros)) {
                            foreach ($centros as $centro) {
                                echo "<option value='".$centro->id."'>".$centro->nombre."</option>";
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
                        if (isset($usuarios) && count($usuarios) > 0) {
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